# FizzBuzz Kata
## Instalación
Para inicializar el proyecto hay que ejecutar el siguiente código:
~~~php
composer install
~~~
## Testeo
Los test se encuentran en la carpeta 'tests/'. Se pueden ejecutar de la siguiente manera:

~~~php
vendor/bin/phpunit 
~~~

## Ejecución
El archivo de ejecución se ejecuta a traves del terminal con el siguiente comando:
~~~php
php src/app.php
~~~
La cantidad de elementos en el array se puede modificar en el codigo fuente de app.php.
~~~php
print_r(FizzBuzz::process(range(0, 100)));
~~~
