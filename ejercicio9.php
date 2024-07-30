<?php

$archivo = 'prueba.txt';
echo (touch($archivo)) ? "Archivo existe" : "Archivo no existe";
echo "<br>";

//var_dump($datos);

if(touch($archivo)){
    $datos = fopen($archivo, "w");
    fwrite($datos, "Sos un ordinario de mrd\n");
    fwrite($datos, "Mutazo viejo");
    fclose($datos); // Aquí cerramos el puntero del archivo correctamente
$datos=fopen($archivo,"r");
while(!feof($datos)){
    $linea=fgets($datos,1024);
    echo $linea."<br>";
}
fclose($datos);
}
else{
    echo "Hay problemas";
}

?>
