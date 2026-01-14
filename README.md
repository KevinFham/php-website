# php-website

playing around with php

### Installing 

Install PHP, Composer, and Laravel

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

Binaries

- Nginx to serve at port 80
- PHP FastCGI to allow php to be run from the web

```sh
sudo apt install nginx php8.4-fpm    
```

### Extra

Initialize table with cache

```sh
php artisan cache:table
php artisan migrate
php artisan reload
```
