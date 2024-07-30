<?php

$cliente= "Paul Gareca";

//saber el tamaño de la cadena

print(strlen($cliente));
echo "<br>";
var_dump($cliente);

//limpiar espacios en blanco
echo "<br>";
$texto =" Paul Gareca ";
var_dump($texto);
echo "<br>";
$texto2= strlen(trim($texto));
echo $texto2; 
echo "<br>";

//convertir miniscula

echo (strtolower($cliente));
echo "<br>";
//convertir mayuscula
echo (strtoupper($texto));

//comparar texto
echo "<br>";
var_dump($cliente==$texto);

//reemplazar una palabra
echo "<br>";
echo str_replace("Paul","Cristhian",$cliente);

//buscar posicion

echo "<br>";
echo strpos($cliente,"Gareca");

//buscar
echo "<br>";
echo substr_count($cliente, "a");

//dvidir cadena
echo "<br>";
$cadena = explode("a", $texto);
var_dump($cadena);


//unir cadena
echo "<br>";
$cadena = implode("a", $cadena);
var_dump($cadena);





?>
