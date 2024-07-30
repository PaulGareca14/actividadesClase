<?php
//array de números desde la URL
$numbers = $_GET['numbers']; 

// Array de letras 
$letras = ['A', 'B', 'C'];


$a = (int)$numbers[0];
$b = (int)$numbers[1];
$c = (int)$numbers[2];

echo "Comparaciones de {$letras[0]} ($a):<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a <=> $b);
echo "<br>";
var_dump($a > $c);
echo "<br>";
var_dump($a < $c);
echo "<br>";
var_dump($a <=> $c);
echo "<br>";

echo "Comparaciones de {$letras[1]} ($b):<br>";
var_dump($b > $a);
echo "<br>";
var_dump($b < $a);
echo "<br>";
var_dump($b <=> $a);
echo "<br>";
var_dump($b > $c);
echo "<br>";
var_dump($b < $c);
echo "<br>";
var_dump($b <=> $c);
echo "<br>";

echo "Comparaciones de {$letras[2]} ($c):<br>";
var_dump($c > $a);
echo "<br>";
var_dump($c < $a);
echo "<br>";
var_dump($c <=> $a);
echo "<br>";
var_dump($c > $b);
echo "<br>";
var_dump($c < $b);
echo "<br>";
var_dump($c <=> $b);
echo "<br>";
?>
