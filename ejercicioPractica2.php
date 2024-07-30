<?php

$usuario = "administrador";

$contrasenia = "123456";
$repetir= "123456";

var_dump($contrasenia==$repetir);
echo "<br>";

$partes = explode("i", $usuario);


var_dump($partes);
echo "<br>";

$posicion_cero = $partes[0];
$contiene_m_pos0 = (strpos($posicion_cero, 'm') !== false) ? 'true' : 'false';

// Buscar la letra "m" en la posición 1
$posicion_uno = $partes[1];
$contiene_m_pos1 = (strpos($posicion_uno, 'm') !== false) ? 'true' : 'false';

// Buscar la letra "m" en la posición 2
$posicion_dos = $partes[2];
$contiene_m_pos2 = (strpos($posicion_dos, 'm') !== false) ? 'true' : 'false';

// Mostrar los resultados
echo "Posición 0 contiene 'm': " . $contiene_m_pos0 . "<br>";
echo "Posición 1 contiene 'm': " . $contiene_m_pos1 . "<br>";
echo "Posición 2 contiene 'm': " . $contiene_m_pos2 . "<br>";




//Otra manera de buscar de manera mas simplificada
//echo "<br>";
//echo substr_count($cliente, "a");

?>
