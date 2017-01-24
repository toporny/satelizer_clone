copy zero.txt database.sqlite
../composer dump-autoload
php ../artisan migrate --seed
wget http://localhost:8000/api/generate_config_files
