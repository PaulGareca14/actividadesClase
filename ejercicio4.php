<?php
$puntos=0;
//sentencia if
$compra=$_GET['c'];

if($compra>50 && $compra<=100){
    $puntos= $puntos+5;
}
elseif($compra>100 && $compra<=200){
    $puntos= $puntos+15;
}
elseif($compra>200 && $compra<=500){
    $puntos= $puntos+30;
}
elseif($compra>500){
    $puntos=$puntos+60;
}
else{
    $puntos=$puntos+0;
}

echo "cantidad de puntos obtenidos:".$puntos;




/* Otra formaaaa
$puntos = 0;
$compra = $_GET['c'];

$puntos = ($compra > 50 && $compra <= 100) ? 5 : 
          (($compra > 100 && $compra <= 200) ? 15 : 
          (($compra > 200 && $compra <= 500) ? 30 :
          ($compra > 500 ? 60: 0)));
echo "cantidad de puntos obtenidos: " . $puntos;

*/


//usando switch


switch (true) {
    case ($compra > 500):
        $puntos = 60;
        break;
    case ($compra > 200):
        $puntos = 30;
        break;
    case ($compra > 100):
        $puntos = 15;
        break;
    case ($compra > 50):
        $puntos = 5;
        break;
    default:
        $puntos = 0;
        break;
    }


    echo "cantidad de puntos obtenidos:".$puntos;



    // Metodo whileeeeee

    $indiceInferior = $_GET['i'];
    $indiceSuperior = $_GET['s'];
    $contador = 0;

    $numero = $indiceInferior;

    while ($numero <= $indiceSuperior) {
    if ($numero % 7 == 0) {
        $contador++;
    }
    $numero++;
    }

    //For
    /*for ($numero = $indiceInferior; $numero <= $indiceSuperior; $numero++) {
        if ($numero % 7 == 0) {
            $contador++;
        }
    }

    echo "Cantidad de múltiplos de 7 en el rango [$indiceInferior, $indiceSuperior]: " . $contador;

    */


    //Foreach
    echo "<br>";

    $electrodomesticos=[
        ["nombre"=> "televisor",
        "precio" => 400,
        "estado" => true],
        ["nombre"=> "heladera",
        "precio" => 200,
        "estado" => true],
        ["nombre"=> "motocicleta",
        "precio" => 600,
        "estado" => true],
    ];

    foreach ($electrodomesticos as $productos){
        echo $productos['nombre']."<br>";
        echo $productos['precio']."<br>";
        echo ($productos['estado'])?"Disponible":"No disponible"."<br>";
        echo "<br>";
    }



    echo "<pre>";
    var_dump($electrodomesticos);
    echo "<pre>";

    
?>