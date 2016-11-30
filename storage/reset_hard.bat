copy zero.txt database.sqlite
../composer dump-autoload
php ../artisan migrate --seed
