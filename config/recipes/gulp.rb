#gulp related tasks
namespace :gulp do
    desc "Gulp build"
    task :build do
        transaction do
            run "cd #{current_release} && gulp"
        end
    end
end

