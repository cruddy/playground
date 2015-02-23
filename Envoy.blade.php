@servers(['web' => 'u-cruddy-demo@ssh37.eu1.frbit.com'])

@task('deploy')
    cd htdocs
    composer install
	php artisan migrate
	php artisan cruddy:compile ru en
	php artisan up
@endtask

@task('down')
    cd htdocs
    php artisan down
@endtask