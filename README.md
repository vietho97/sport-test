# sport-test

## Installation and running
Laravel 11
copy the .env.example to .env

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret

run docker-compose up -d
run docker exec -it [CONTAINER ID] bash 
run composer install
run php artisan key:generate
run php artisan migrate
run php artisan db:seed
run php artisan storage:link


Vue 3
run npm install
run npm run dev

