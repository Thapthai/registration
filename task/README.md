# Laravel 9 - Registration

## using docker

### start using docker

1. Copy `docker/.env.example` to `docker/.env` and change update it
2. Run `docker compose up -d` inside docker folder to start container
   <br/>phpfpm service should run composer install via startup
   <br/>If needed, you can run  `docker/bin/composer install` to install composer dependencies again
3. Copy `.env.example` to `.env` and update value
4. Run `docker/bin/artisan key:gen` to generate app key
5. Run `docker/bin/artisan migrate` to migrate database
6. Allow other to write `storage` directory recursively
7. Enjoy!

### artisan and composer inside docker

We prepare scripts to help you run artisan and composer via `docker/bin/artisan` and `docker/bin/composer`. These two command will execute artisan and composer inside phpfpm container
