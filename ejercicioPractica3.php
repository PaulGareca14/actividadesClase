<?php
$competidores = [
    "Paul Gareca" => "13:14:00",
    "Fernando Batallanos" => "13:10:05",
    "Pedro Porro" => "13:16:12",
    "Cristhian Gareca" => "13:12:05",
    "Gerard Moreno" => "13:23:30",
    "Ibai Llanos" => "13:20:23",
    "Pedri Gonzales" => "14:26:40",
    "Pablo Gaviria" => "14:33:55",
];

// Mostrar Original
echo "Datos originales de competidores:";
echo "<pre>";
var_dump($competidores);
echo "</pre>";

// Asc
asort($competidores);
echo "Orden de llegada:";
echo "<pre>";
var_dump($competidores);
echo "</pre>";

$primer_competidor = array_key_first($competidores);

// Calcular
$tiempos = array_values($competidores);
$diferencia_segundo_primero = strtotime($tiempos[1]) - strtotime($tiempos[0]);

echo "El primero en llegar es:". $primer_competidor. "<br>";
echo "Diferencia de tiempo entre el segundo y el primer competidor:" . gmdate("H:i:s", $diferencia_segundo_primero) . "<br>";

// Ultimo
$ultimo_llegado = end($competidores);
echo "Último competidor en llegar:" . key($competidores) . " con tiempo de llegada " . $ultimo_llegado . "<br>";

// Mostrar los tres primeros lugares
$primeros_lugares = array_slice($competidores, 0, 3, true);
echo "<br>";
echo "Primeros tres lugares:";
echo "<pre>";
var_dump($primeros_lugares);
echo "</pre>";


?>