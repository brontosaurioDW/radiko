# Radiko

## Instalación de laravel
Para comenzar con la instalación de laravel debemos tener instalado en en nuestra PC [NodeJS](https://nodejs.org/es/)  y [Composer](https://getcomposer.org/download/). 

Una vez instalados vamos a la carpeta principal del proyecto (donde se encuentra el index.php), abrimos la consola de comandos y corremos la instalacion de composer.

```
composer install
```
Ahora necesitamos establecer nuestro archivo de configuración. Para ello vamos a la carpeta principal del proyecto, buscamos __.env.example__ y lo usamos como base para crear __.env__. En este archivo podemos editar la conexión a la base de datos.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Luego de haber creado el archivo generamos la clave de seguridad.

```
php artisan key:generate
```

Solo queda copiar la carpeta images dentro de _development-html/dev_ y pegarla en _storage/app/public_ y vincular el storage con la carpeta public.

```
php artisan storage:link
```

## Base de datos

Es posible que al momento de realizar una migración con la base de datos nos arroje un error del tipo SQLSTATE[42000]. Para corregir este error tenemos que editar el achivo __AppServiceProvider.php__ y colocar __Schema::defaultStringLength(191);__ dentro de la funccion boot().

```php
public function boot()
{
	Schema::defaultStringLength(191);
}
```

Crear la base y hacer los seeders
php artisan migrate:fresh --seed
```

## funciones últiles	

* composer dump-autoload
* php artisan make:migration
* php artisan make:model 
* php artisan make:controller
* php artisan make:seeder
* php artisan migrate
* php artisan db:seeder
* php artisan migrate:refresh
* php artisan migrate:fresh
* php artisan migrate:fresh --seed


## Paquetes de terceros

* barryvdh/laravel-debugbar
* barryvdh/laravel-ide-helper
* Paquete 3
* Paquete 4