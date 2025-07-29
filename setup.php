- install laravel 11:
        - laravel new project_name --version=11
        - composer create-project laravel/laravel project_name "11.*"

- cd project_name

- install filament :
        - composer require filament/filament:"^3.3" -W
        - php artisan filament:install --panels

- composer require livewire/livewire (install Livewire v3)

- php artisan migrate 

- php artisan make:filament-user (generate admin user name , email , password )
