<?php


/*Tipos de Datos*/

$nombre = "Paul";
$talla = 1.70;
$peso = 63;
$musica = array("Gone gone gone","Till kingdom come","Can I call you tonight");
$bandera = true;
print("nombre:".$nombre."<br>");
printf("talla:".$talla."<br>");
print_r("peso:".$peso."<br>");
echo("bandera:".$bandera."<br>");
var_dump($musica);

/*Tipos de Operadores*/

$a=$_GET['A'];
$b=$_GET['B'];
echo("El resultado de la suma es: ".$a+$b."<br>");
echo("El resultado de la resta es: ".$a-$b."<br>");
echo("El resultado de la multiplicacion es: ".$a*$b."<br>");
echo("El resultado de la division es: ".$a/$b."<br>");
echo("El resultado del modulo es: ".$a%$b."<br>");

/*Tipos de Comparativos*/

var_dump($a>$b);
echo"<br>";
var_dump($a<$b);
echo"<br>";
var_dump($a<=$b);
echo"<br>";
var_dump($a>=$b);
echo"<br>";
var_dump($a==$b);
echo"<br>";
var_dump($a<=>$b);
echo"<br>";


/*Recibir datos en el navegador*/



?>