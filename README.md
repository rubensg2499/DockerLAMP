# Docker LAMP

Este es un template para crear un entorno LAMP en docker.



## Autor

- [@rubensg2499](https://github.com/rubensg2499)


## Variables de Entorno

Para ejecutar este proyecto, se requiere agregar las siguientes variables de entorno al archivo .env

`PHP_APACHE_VERSION=php:8.3.9-apache`

`MYSQL_VERSION=mysql:9.0.0`

`PHPMYADMIN_VERSION=phpmyadmin:5.2.1`

`MYSQL_ROOT_PASSWORD=root_password`

`MYSQL_DATABASE=db_name`
## Ejecutar Localmente

Clonar el proyecto

```bash
  git clone https://github.com/rubensg2499/DockerLAMP
```

Ir al directorio del proyecto

```bash
  cd DockerLAMP
```

Inicar los servicios

```bash
  docker-compose build
  docker-compose up -d
```


## Demo

Ir a PHPMyAdmin

http://http://127.0.0.1:8080/

Ir a index PHP

http://127.0.0.1:80/
## Licencia

[MIT](https://choosealicense.com/licenses/mit/)

