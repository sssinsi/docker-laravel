# docker-laravel
Laravel and docker-compose

# set up

```
# console
docker-composer exec app /bin/bash


# in app container
cd /laravel
composer install
cp .env.example .env
php artisan key:generate
```

access http://localhost:8000
