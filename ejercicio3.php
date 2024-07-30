<?php
//array UNA DIMENSIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN 

$platos = array("saice","sopa", "pescado");
$platos = ["saice","sopa", "chancho"];

echo "<pre>";
var_dump($platos);
echo "</pre>";

//insertar datos
$platos[2]="Nuevo plato";

echo "<pre>";
var_dump($platos);
echo "</pre>";
//insertar al inicio

array_unshift($platos,"Plato nr1");
echo "<pre>";
var_dump($platos);
echo "</pre>";
//insertar al final

array_push($platos,"Plato final");
echo "<pre>";
var_dump($platos);
echo "</pre>";


//Array de DOS DIMENSIONESSSSSSSSSSSSSSSS

$electrodomesticos= [
    "nombre" => "televisor",
    "modelo" => "Xiaomi",
    "precio" => 10000,
    "pulgadas" => 60,
    "accesorios" => [
        "4k" => "Si",
        "Sonido 3d" => "Si",
        "HDMI 2.0" => "Si"
    ]

];

echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";


///imprimir solo nombre y precio

echo $electrodomesticos["nombre"]. "<br>".$electrodomesticos["precio"]."<br>".$electrodomesticos["accesorios"]["4k"];

//insertar accesorio: array en otro array
$electrodomesticos["accesorios"]["USB"]="Si";
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

//manejar los indices
$clientes =[];

//si esta vacio
var_dump(empty($clientes));

//si fue declarada
var_dump(isset($clientes));


//ordenar mayor a menor
sort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";

//ordenar menor a mayor

rsort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";

//ordenar array dos dimensiones valores de acuerdo al orden alfabetico asc y desc
asort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

arsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

//ordenar por indices asc y desc

ksort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

krsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
















?>
