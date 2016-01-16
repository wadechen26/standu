#npm related tasks
namespace :npm do
    task :update do
        transaction do
            update_npm
            install_node_modules
        end
    end

    # Update npm
    desc "Update npm"
    task :update_npm do
        transaction do
            run "sudo npm install -g npm@latest"
        end
    end

    # install node modules
    desc "Install node modules"
    task :install_node_modules do
        transaction do
            run "cd #{current_release} && sudo npm install"
        end
    end

    desc "Remove node modules"
    task :remove_node_modules do
        transaction do
            run "cd #{current_release} && sudo rm -rf node_modules"
        end
    end
end