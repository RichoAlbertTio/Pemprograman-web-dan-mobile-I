<?php
// String
$String = 'Hello world!';
echo $String;
echo '<br>';

// Integer
$Integer = 5985;
var_dump($Integer);
echo '<br>';

// Float
$Float = 10.365;
var_dump($Float);
echo '<br>';

// Boolean
$x = true;
$y = false;
echo "Boolean :".$x;
echo '<br>';

// Null
$Null = null;
var_dump($Null);

// nama constant adalah case-sensitive
define("GREETING", "Welcome to W3Schools.com!"); 
echo GREETING;
?>