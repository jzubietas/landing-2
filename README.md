# Laravel 8 All

## Comenzando 🚀

_Sigue las siguientes instrucciones para clonar este repositorio en tu máquina local y poder trabajar desde el principio con la plantilla AdminLTE, sistema de Roles y Permisos con Spatie, Envio de Email, Verificación de Email y API con JWT Token en Laravel 8._

### Pre-requisitos 📋

Para clonar este repositorio, debes tener instalado un servidor Apache, PHP y MSQL (Wamp, Xampp, Mamp o Lamp) y los gerenciadores de dependencias para PHP (Composer) y para NodeJs (Npm).

Antes de comenzar verifica si tienes composer con cualquiera de los siguientes comandos en tu terminal.
```
composer --version 
composer -v
```
Si no lo tienes instalado lo pueden instalar siguiendo la documentación oficial en:  
https://getcomposer.org/doc/00-intro.md

Verifica tambien la version de NPM en la terminal con
```
npm --version
```
Si no lo tienes instalado lo pueden instalar siguiendo la documentación oficial en:  
https://www.npmjs.com/get-npm

Verifica las versiones de cada uno de ellos

Versión PHP - 7.4.2  
Versión Mysql - 5.7.26  
Versión Composer - 1.10.1  
Versión NPM - 7.0.10  

### Instalación 🔧

_Sigue las siguientes instrucciones para clonar el repositorio_

_Clone el repositorio_

```
git clone https://github.com/jorgehernandezch/Laravel-8-All.git
```

_Instale y actualize todas las dependencias del Proyecto con_

```
composer install y composer update
```

_Como el proyecto tiene dependencias en JS instalelas y actualizelas con_

```
npm install e npm update
```

_Copie el Archivo .env.example en un archivo nuevo .env con_

```
cp .env.example .env
```
_Configure la base de datos y las demas variables de entorno en el archivo .env_

_Genere una nueva Key para el protecto con_

```
php artisan key:generate
```

_Corra las migraciones y seeders del proyecto con_

```
php artisan migrate --seed
```

_Corra el proyecto con_

```
php artisan serve
```

_Si todo está correcto puede acceder al proyecto en la dirección http://localhost:8000 con el Usuario root@root.com - Root. También puede verificar si la API está funcionando en la dirección http://localhost:8000/api/users, el sistema enviará un mensaje en json con el error de no autorizado._


---
[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Ingeniero y Desarrollador Web_
