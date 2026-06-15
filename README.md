## Установка laravel

```bash
cd src
composer create-project laravel/laravel .
```

Перенести .env из корня в /src с заменой

Подключится к php-fpm контейнеру и вызвать
```bash
    php artisan migrate
```