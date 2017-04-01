- composer installer

- OR - 

- curl -sS https://getcomposer.org/installer | php
- php composer.phar install

# Get instance set up

- mysql user and DB (or sqlite)
- create .env from example
- php artisan key:generate
- php artisan migrate
- sudo chown -R http:http storage
