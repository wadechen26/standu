#composer related tasks
namespace :composer do
    desc "Update composer"
    task :update do
        transaction do
        run "sudo /usr/local/bin/composer self-update"
        end
    end

    desc "Setup github oauth token"
    task :setup_github do
        transaction do
        run "/usr/local/bin/composer config -g github-oauth.github.com 06fb51eff9644c85f9f0600ea0cab51f1a27233f"
        end
    end

    desc "Install dependencies with Composer"
    task :install_dependencies do
        transaction do
        run "cd #{current_release}; sudo /usr/local/bin/composer install --no-dev --no-progress; sudo chown -R www-data:www-data #{current_release}"
        end
    end
end