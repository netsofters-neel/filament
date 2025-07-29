Example need to create {Employee} CRUD

- php artisan make:model {Employee} -m (Generate Modle and table schma)
- php artisan migrate
- Make Model Fillable
    - go to -> app/Models/Employee.php
    - protected $fillable = ['name', 'email', 'phone', 'status'];  (change filled)
- php artisan make:filament-resource {Employee} --generate


