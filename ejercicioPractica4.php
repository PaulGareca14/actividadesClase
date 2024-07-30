<?php

$fechaIngresada = $_GET['fecha']; 

// Convertir DateTime
$fecha = DateTime::createFromFormat('Y-m-d', $fechaIngresada);

$mesDia = $fecha->format('m-d');


$inicioVerano = '06-21';
$finVerano = '09-21';


if ($mesDia >= $inicioVerano && $mesDia <= $finVerano) {
    echo "Es verano";
} else {
    echo "No es verano";
}

?>
