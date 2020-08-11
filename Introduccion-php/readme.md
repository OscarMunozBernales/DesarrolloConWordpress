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
todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Para acceder a él lo haremos localhost:8080/hello.php porque el servidor abre por defecto el archivo index y nuestro nuevo archivo se llama hello.php.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de <?php ?> van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un ; (punto y coma).