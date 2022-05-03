<?php

/**
 * En programacion podemoss tener varios tipos de dat
 * os, pero los mas conocidos son 
 * Numericos
 * - Integer
 * - Float
 * - Double
 * Cadenas de caracter
 * - Char
 * - String
 * Booleanos
 * -Bool
 * Sin valor
 * - Null
 * -Undefined
 */

 /**
  * En PHP tenemos un tipado debil, pero esto no significa que no se use
  tupos de datos.
  Este lengiaje no necesita que se defina de forma explicita un tipo de dato
  ya que por si mismo puede deducir que tipo de datos se esta usando
  */

  /*
  Conversion de tipos automatica
  PHP es capaz de convertir un tipo de dato a otro de forma automatica 
  segun el contexto donde se use.

  Si sumas un numero con un string, PHP evaluara ambos como numeros

  */

$numero = "0";
$numero_nuevo = $numero + 2;
var_dump($numero);
var_dump($numero_nuevo);
echo "\n";
