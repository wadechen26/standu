server "52.62.8.201", :app, :web, :db, :primary => true
set :user, "ubuntu"
set :branch, "master"
set :use_sudo, false

set :domain, "standu"
set :ssh_options, { :keys => "config/keys/#{stage}.pem" }
set :deploy_to, "/var/www/#{domain}"
set :uploads_path, "/var/www/#{domain}/uploads/"
set :deploy_subdir, "sourcecode" #sub directory in repo to deploy
set :share_path, "#{deploy_to}"
set :copy_exclude, [".git", ".gitignore"]

#db settings
set :db_user, "homestead"
set :db_password, "secret"
set :db_name, "homestead"