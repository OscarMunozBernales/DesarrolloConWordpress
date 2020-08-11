# Curso de introducción a php

# 1. Introducción a php

## 1.1. Presentación del curso
Bienvenido al **Curso de Introducción a PHP ** en este curso el profesor Héctor Benitez, @HectorBenitez en Twitter, te ira enseñando los fundamentos de PHP mientras desarrollas un proyecto que servirá de sitio web personal.

En este curso veremos:
- Programación orientada a Objetos.
- Conexión a bases de datos.
- Usaremos los estándares de PHP.
- Implementaremos librerías de terceros.
- Estructuraremos nuestro proyecto de una forma muy profesional que te servirá para futuros proyectos.
- Utilizaremos la versión 7.2 de PHP.

## 1.2. ¿Qué es php?
PHP es un lenguaje de programación de propósito general de alto nivel que fue diseñado especialmente para el desarrollo de aplicaciones web.

Es interpretado, multiplataforma, open source, el cual ha sido muy popular en los últimos años.

¿Qué NO es PHP?
- No es un lenguaje compilado, por lo cual siempre tendrás que llevar juntos tu código y tu interprete.
- No esta diseñado para realizar aplicaciones de escritorio.

# 2. Conceptos básicos de PHP

## 2.1. Sintaxis de PHP
Hagamos el ejemplo más sencillo para trabajar con PHP. Siempre que usemos PHP usaremos lo siguiente: 
```php
<?php ?> 
```
Todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Para acceder a él lo haremos localhost:8080/hello.php porque el servidor abre por defecto el archivo index y nuestro nuevo archivo se llama hello.php.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de <?php ?> van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un ; (punto y coma).

## 2.2. Variables, tipos de datos y cadenas
Una variable puede ser una pequeña cajita en la que puedes almacenar un valor y este lo pueden usar para realizar alguna operación.

Para declararla usaremos el símbolo de $ y en seguida el nombre, este puede ser un _ o una letra. ejemplo:

```php
$variable1 = 'hola mundo';
$variable2 = 10;
$variable3 = ['hola', 10];
```

PHP no es estáticamente tipado, es decir que no tenemos que decirle qué tipo de dato es esa variable. Además, es débilmente tipado porque podemos fácilmente cambiar el tipo de dato, es decir PHP ejecuta una conversión de datos interna.

Al momento de trabajar con PHP una cosa muy importante es hacer debugging a nuestras variables, para ello utilizamos la función var_dump(); pasándole por parámetro la variable a revisar.

En PHP tenemos dos tipos de cadenas, las que son con comillas simples y las de comillas dobles. La diferencia entre estas dos cadenas es que la de comillas simples recibe de forma literal lo que le escribas mientras que la de comillas dobles intenta interpretar cualquier variable dentro de ella.

## 2.3. Tipos de datos en php
PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL.
Tipos escalares:
- boolean: Representa solamente un valor verdadero o falso. http://php.net/manual/es/language.types.boolean.php Valores válidos: true (verdadero) false (falso)
```php
<?php
$a = true; 
$b = false; 
?>
```
- Integer: Representa un número entero positivo, negativo o 0. http://php.net/manual/es/language.types.integer.php

```php
<?php
$a = -123;
$b = 0;
$c = 7763;
?>
```
- float o double: Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. http://php.net/manual/es/language.types.float.php
```php
<?php
$a = 12.24; 
$b = 1.5e3; 
$c = 7E-10;
?> 
```
- string: Representa una cadena de caracteres.Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles. Usando comillas simples donde el texto será exactamente como se escribe. Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.
Hay 2 formas adicionales llamadas Heredoc y Nowdoc que sirven para crear cadenas de múltiples líneas.

Si quieres conocer más de este tipo de dato da  [click aquí.](https://www.php.net/manual/es/language.types.string.php#language.types.string.details)
```php
<?php
$a = ”Hola”; 
$b = ‘Mundo’; 
?>
```

Tipos compuestos:
- array: Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array. http://php.net/manual/es/language.types.array.php

```php
<?php
$array = array(
    "curso1" => "php",
    "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
    "curso1" => "php",
    "curso2" => "js",
];

// índices numéricos
$array = [
    "php",
    "js",
];
?>
```
- object: Representa una instancia de una clase. Este tema lo veremos más a fondo en la clase de Programación Orientada a Objetos.
```php
<?php
class Car
{
    function move()
    {
        echo "Going forward..."; 
    }
}

$myCar = new Car();
$myCar->move();
?>
```
- callable: Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.
```php
<?php
// Variable que guarda un callable
$firstOfArray = function(array $array) {
    if (count($array) == 0) { return null; }
    return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo $firstOfArray($values);
?>
```
- iterable: A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.
```php
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        // ...
    } 
}

?>
```

Tipos especiales:
- resource: Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.
```php
<?php
$res = fopen("c:\\dir\\file.txt", "r");
?>
```
- NULL: Es un valor especial que se usa para representar una variable sin valor. http://php.net/manual/es/language.types.null.php
```php
<?php
$a = null; 
?>
```
## 2.4. Arreglos
Como vimos en la clase anterior almacenamos datos en una variable, ahora trataremos de almacenar más datos en una misma variable.

Estas variables que almacenan más de un dato se conocen como arreglos y su sintaxis se va a indicar con [ ] (corchetes).

PHP utiliza índices para localizar a los elementos dentro de la variable.

La estructura de arreglos en PHP es conocida como mapa, lo que quiere decir que tiene una composición de llave valor. Además, un arreglo puede contener más arreglos y cada uno de ellos seguirá la misma estructura.

Algo que debes saber es que en PHP podrás almacenar diferentes tipos de datos en un mismo arreglo.

## 2.5. Condicionales y ciclos
Las condiciones nos permiten tomar decisiones en el código, si se cumple la condición entonces se ejecutarán ciertas instrucciones sino se cumple se ejecutarán otras. Estas se denotan por la instrucción **if else**.

```php
<?php 
$esVerdadero = false;
if ( $esVerdadero ) {
    // SI ES VERDADERO, SE EJECUTA ESTA PARTE DEL CÓDIGO
} else {
    // DE LO CONTRARIO, SE EJECUTA ESTA PARTE DEL CÓDIGO
}

?>
```

Los ciclos funcionan de la mano con las condiciones, en este caso si se cumple la instrucción se estará ejecutando repetidas veces una instrucción dada.

Hemos agregado los jobs de forma manual accediendo al arreglo a través de sus índices, hacer esto podría traer errores y no podríamos controlarlo si tuviéramos muchos jobs. Ahora veamos una mejor forma de hacerlo con ciclos.
- El primero que tenemos es **do while** que va a involucrar la inicialización de variables y condiciones.
- El segundo que veremos es **for** que es una forma más simplificada de usar todos los elementos que componen los ciclos.

```php
<?php 
$cont = 0;
do{
    ++$cont;
}while( $cont < 10);

$jobs = ['', '', '', ...];

for ($i = 0; $i < count($jobs); $i++) {
    echo $jobs[$i];
}
?>
```
