#php fpm related tasks
namespace :php_fpm do
    desc "Reload PHP-FPM"
    task :reload, :roles => :app do
        run "sudo service nginx restart"
        run "sudo service php5-fpm restart"
    end
end
