# Instalación del Proyecto

Este documento proporciona instrucciones paso a paso para instalar y configurar el proyecto.

## Requisitos previos

Asegúrate de tener instalados los siguientes componentes:

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (versión recomendada: 7.4 o superior)
- [MySQL](https://www.mysql.com/) o cualquier otro sistema de gestión de bases de datos compatible con Laravel

## Pasos de instalación

1. **Cambiar a la ruta del servidor**
- cd ruta/del/proyecto

2. **Clonar el repositorio**
- git clone https://github.com/MiguelAyala2/sigea.git

3. **Instalar los paquetes necesarios**
- composer install

4. **Configurar el archivo de entorno**
- Copiar el archivo `.env.example` a `.env`
- Configurar las credenciales de la base de datos y otras configuraciones necesarias

5. **Generar una nueva clave de aplicación**
- php artisan key:generate

6. **Ejecutar las migraciones y los seeders**
- php artisan migrate --seed

El proyecto ya debe estar disponible en tu servidor local

Usuario: admin@infotecpy.com
Password: Paraguay2024

## Problemas comunes

Si encuentras algún problema durante la instalación, asegúrate de:

- Tener los permisos correctos en las carpetas del proyecto
- Haber configurado correctamente la base de datos en el archivo `.env`
- Tener todas las extensiones de PHP requeridas instaladas

Para más información, consulta la [documentación oficial de Laravel](https://laravel.com/docs).