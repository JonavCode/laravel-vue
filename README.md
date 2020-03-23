# CRUD con Laravel + Vue + Axios

#### CRUD básico de tareas.

##### Clona este repositorio :sunglasses:

```
git clone https://github.com/JonavCode/laravel-vue.git
```

##### Ingresa al proyecto desde la terminal e instala las dependencias de php necesarias para el proyecto con el siguiente:

```php
composer install
```

##### Crea el archivo **.env** en la raiz del proyecto y copia el contenido del archivo **.env.example** al archivo creado.

##### Configuramos el archivo **.env** con nuestra conexión a la base de datos.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_vue
DB_USERNAME=root
DB_PASSWORD=******
```

##### Creamos el APP_KEY del proyecto.

```php
php artisan key:generate
```

##### Instalamos las dependencias de Javascript :rocket:

```
npm install
```

##### Corremos las migraciones con el siguiente comando.

```
php artisan migrate
```

##### Por ultimo utilizamos el comando.

```
npm run watch
```

##### Crea al Host Virtual

```
<VirtualHost *:80>
    ServerName laravelvue.devel
    DocumentRoot "(tu_ruta)/laravel-vue/public"
    <Directory  "(tu_ruta)/laravel-vue/public/">
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require local
    </Directory>
</VirtualHost>
```


##### crea un usuario en la pestaña register y luego logueate.


#### Consideraciones.

##### Si cambias el nombre del proyecto tambien debes cambiar la ruta en el metodo **browserSync** de Laravel Mix

##### para ello abre el archivo **webpack.mix.js** y editalo :scream:

```php
mix.browserSync('http://laravelvue.devel');
```
