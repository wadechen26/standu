#laravel related tasks
namespace :laravel do
    desc "Link Laravel shared directories."
    task :link_shared do
        transaction do
            run "ln -nfs #{shared_path}/system #{current_release}/public/system"
        end
    end

    desc "Run Artisan migrate task."
    task :migrate do
        run "php #{current_release}/artisan migrate"
    end

    # create storage folders as laravel didn't create this during provision
    desc "Create laravel storage folders"
    task :create_storage_folder do
        transaction do
            run "cd #{current_release} && [ ! -d storage ] && mkdir storage; true"
            run "cd #{current_release} && cd storage && [ ! -d app ] && sudo mkdir app framework logs && cd framework && sudo mkdir cache sessions views; true"
            run "cd #{current_release}/storage/logs && sudo touch supervisord.log"
        end
    end

    desc "Add .env file"
    task :add_env do
        transaction do
            run "cd #{current_release} && cp #{shared_path}/cached-copy/sourcecode/.env.#{stage} .env"
        end
    end
end