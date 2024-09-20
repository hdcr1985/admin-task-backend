<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Gestión de Tareas BackEnd para el proyecto en React JS

BackEnd para el proyecto Gestión de Tareas a traves de API Rest 

## Como comenzar

Clonar el proyecto localmente:

```shell
git https://github.com/hdcr1985/admin-task-backend.git
cd admin-task-backend
composer install
```
## Crear el archivo .env

Sustituir los datos de conexion a la Base de Datos:

~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_bd
DB_USERNAME=root
DB_PASSWORD=root
~~~

## Ejecutar la migracion de Laravel

Con esto se crearan todas las tablas necesarias para el proyecto:

```shell
php artisan migrate
```

## Ejecutar la semilla de Laravel

Con esto se crearan tareas de pruebas para probar los diferentes metodos de ordenamiento:

```shell
php artisan db:seed --class=TasksTableSeeder
```

## Ejecutar el proyecto

```shell
php artisan serve
```

## URL del BackEnd

```shell
http://localhost:8000
```

## Clonar el proyecto siguiente para el FrontEnd

<a href="https://github.com/hdcr1985/react-atomic-design"> https://github.com/hdcr1985/react-atomic-design</a>
