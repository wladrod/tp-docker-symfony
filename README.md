# tp-docker-symfony

This repository contains the basic configuration for a complete local environment for Symfony projects

### Content:
- NGINX 1.26 container to handle HTTP requests
- PHP 8.3.0 container to host your Symfony application
- MySQL 8.3.0 container to store databases

(feel free to update any version in `Dockerfiles` and ports in `docker-compose.yml`)

### Installation:
- Run `make build` to create all containers 
- Run `make start` to spin up containers
- Enter the PHP container with `make ssh-be`
- Navigate to `localhost:8081` so you can see the Symfony welcome page :)

