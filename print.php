<?php
//Por: shonenki
//Fecha: 11/10/2016
//Título: Ejemplo simple de uso de namespaces en PHP

//Se incluyen las clases
require('snes.php');
require('sega.php');

//Con cambiar el nombre de la clase "sega" o "snes" se obtienen diferentes resultados
//Los métodos se llaman exactamente iguales en ambas clases
$imprime = \consolas\sega\consola::juegos();

