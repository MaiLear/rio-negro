## Tabla de Contenidos
- [Instalación](#INSTALACIÓN)
- [Configuración](#CONFIGURACIÓN)


# INSTALACIÓN

## Instalar dependencias
composer i

# CONFIGURACIÓN

## Cambiar el nombre del archivo .env
Busca el archivo en la raiz del proyecto .env.example y cambiale el nombre a .env

## Base de datos

### Crear base de datos
1. Crea tu base de datos con Xampp https://www.apachefriends.org/download.html u otro servidor php local
2. Agrega el nombre de tu base de datos en DB_DATABASE del archivo .env
3. Ejecuta el comando php artisan migrate


## Levantar servidor
php artisan serve
