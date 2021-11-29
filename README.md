# Docker: PHP & MySQL

Instala rápidamente un ambiente de desarrollo local para trabajar con [PHP](https://www.php.net/) y [MySQL](https://www.mysql.com/) utilizando [Docker](https://www.docker.com).

Utilizar *Docker* es sencillo, pero existen tantas imágenes, versiones y formas para crear los contenedores que hacen tediosa esta tarea. Este proyecto ofrece una instalación rápida, con versiones estandar y con la mínima cantidad de modificaciones a las imágenes de Docker. Viene configurado con  `PHP 7.3` y `MySQL 5.7`.

## Requerimientos

* [Docker Desktop](https://www.docker.com/products/docker-desktop)

## Instalar el ambiente de desarrollo

La instalación se hace en línea de comandos:

```
docker-compose up -d
```
Puedes vaidar que se ha instalado correctamente accediendo a: [http://localhost/info.php](http://localhost/info.php)

## Comandos disponibles

Una vez instalado, se pueden utilizar los siguiente comandos:

```
docker-compose start    # Iniciar el ambiente de desarrollo
docker-compose stop     # Detener el ambiente de desarrollo
docker-compose down     # Detener y eliminar el ambiente de desarrollo.
```

## Estructura de Archivos

* `/docker/` contiene los archivos de configuración de Docker.
* `/www/` carpeta para los archivos PHP del proyecto.

## Accesos

### Web

* http://localhost/

### Base de datos

Existen dos dominios para conectarse a base de datos.

* `mysql`: para conexión desde los archivos PHP.
* `localhost`: para conexiones externas al contenedor.

Las credenciales por defecto para la conexión son:

| Usuario | Clave | Base de datos |
|  :---:  |  :---:|      :---:    |
| dino    | dino  | alumnosdb     |

---

Repositorio original de [kodetop](https://github.com/kodetop/docker-php-mysql)
