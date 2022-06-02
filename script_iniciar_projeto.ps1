Rename-Item .env.example .env
composer install
New-Item -Name .\database\database.sqlite -ItemType File
php artisan migrate
php artisan key:generate