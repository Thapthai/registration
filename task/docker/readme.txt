start using docker

1. Copy "docker/.env.example" to "docker/.env" and change update it
2. Run "docker compose up -d" inside docker folder to start container
        phpfpm service should run composer install via startup
        If needed, you can run "docker/bin/composer install" to install composer dependencies again

3. Copy .env.example to .env and update value edit "EXPOSE_PORT_DB=25432" and "EXPOSE_PORT_WEB=81" to another port for 
4. docker/bin% docker compose up -d --build phpfpm
5. docker/bin% docker require predis/predis
6. IN config's folder database.php line 124 edit "phpredis" to "predis" for Prevent port collision

7. Run docker/bin/artisan key:gen to generate app key
8. Run docker/bin/artisan migrate to migrate database
9. Allow other to write storage directory recursively
