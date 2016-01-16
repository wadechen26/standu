require 'capistrano/ext/multistage'
require 'capistrano/recipes/deploy/strategy/remote_cache'
require Dir.pwd + '/config/recipes/remote_cache_subdir'

#load custom recipes
load '/config/recipes/npm.rb'
load '/config/recipes/composer.rb'
load '/config/recipes/gulp.rb'
load '/config/recipes/laravel.rb'
load '/config/recipes/php_fpm.rb'

#settings
set :stages, %w(staging)
set :default_stage, "staging"
set(:stage) { fetch(:stage) }
set :application, "standu"

#repo settings
set :repo_name,  "standu.git"
set :repo_user, "Yanniyiyi"
set :repo_password, "yy6606036"
set :repository, "https://#{repo_user}:#{repo_password}@github.com/#{repo_user}/#{repo_name}"

#deployment settings
set :strategy, RemoteCacheSubdir.new(self)
set :scm, :git
set :use_sudo, false
set :keep_releases, 3
set :ssh_options, {:forward_agent => true}
set :normalize_asset_timestamps, false

#local database settings
set :local_db_user, "homestead"
set :local_db_password, "secret"
set :local_db_name, "homestead"

#tasks
after "deploy:update_code", "composer:setup_github"
after "composer:setup_github", "laravel:add_env"
after "laravel:add_env", "composer:install_dependencies"
after "composer:install_dependencies", "laravel:create_storage_folder"
after "laravel:create_storage_folder", "npm:update"
after "npm:update", "gulp:build"
after "gulp:build", "npm:remove_node_modules"
after "npm:remove_node_modules", "laravel:link_shared"
after "laravel:link_shared", "deploy:symlink_shared_folders"
after "deploy:symlink_shared_folders", "deploy:set_permissions"
after "deploy:set_permissions", "deploy:cleanup"
after "deploy:cleanup", "laravel:migrate"

# Nginx requires the php_fpm:reload task; other servers may not
after "laravel:migrate", "php_fpm:reload"

#general deploy tasks
namespace :deploy do
    task :finalize_update do
        transaction do
            run "chmod -R g+w #{releases_path}/#{release_name}"
            symlink
        end
    end

    task :symlink do
        transaction do
            run "ln -nfs #{current_release} #{deploy_to}/#{current_dir}"
        end
    end

    #symlink any folders shared across releases (e.g uploads)
    desc "Symlink Shared Folders"
    task :symlink_shared_folders do
        transaction do
            #remove deployed uploads directory, and symlink with shared version
            run "rm -rf #{current_release}/public/images/uploads"
            run "ln -nfs #{uploads_path} #{current_release}/public/images/uploads"
        end
    end

    desc "Fix Permissions"
    task :set_permissions do
        transaction do
            run "sudo chown -R www-data:www-data #{releases_path}/#{release_name}"
            run "sudo chown -R www-data:www-data #{current_release}/storage"
            run "sudo chmod -R 775 #{releases_path}/#{release_name}"
            run "sudo chmod -R 775 #{current_release}/storage"
        end
    end
end

