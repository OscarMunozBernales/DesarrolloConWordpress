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