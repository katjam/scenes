__Scenes is a breakdown and scheduling tool__


# Get instance set up

- composer install

- OR - 

- curl -sS https://getcomposer.org/installer | php
- php composer.phar install

- mysql user and DB (or sqlite)
- create .env from example
- php artisan key:generate
- php artisan migrate
- sudo chown -R http:http storage
