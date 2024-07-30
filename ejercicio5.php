<?php
/*
$producto = $_GET['nombre'];
$monto = $_GET['cantidad'];
$edad = $_GET['edad'];
$iva = $_GET['iva'];
$montoIva = 0;

function ConIva($monto) {
    return $monto + ($monto * 0.13);
}

function SinIva($monto) {
    return $monto - ($monto * 0.13);
}

$montoFinal = ($iva == 'true') ? ConIva($monto) : SinIva($monto);
$mensajeEdad = ($edad >= 18) ? "Puedes realizar la compra" : "No puedes realizar la compra";

try{
    echo "Resultado: $montoFinal";
    echo "<br>";
    echo "Edad: $mensajeEdad";

} catch(TypeError $e){
    echo "Error en ingreso de datos".$e->getMessage();
}

*/

//EJERCICIO NRO 2


$notas = array(100, 90, 80, 96, 75, 87);

function promedio(int | float ...$notas): int | float
{
    
    $totalNotas = 0;
    foreach ($notas as $nota) {
        $totalNotas += $nota; // Sumar cada nota al total
    }
    return $totalNotas / count($notas); 
}

echo "El promedio de notas es: " . promedio(...$notas);




?>
