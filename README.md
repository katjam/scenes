# run Composer
curl -sS https://getcomposer.org/installer | php
php composer.phar install

# Set a new development key
php artisan key:generate

php artisan migrate
sudo chown -R http:http storage
