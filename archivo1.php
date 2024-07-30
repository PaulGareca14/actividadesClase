<?php
$carpeta = "prueba/";
$archivo = "prueba/ejercicio1.php";

// Verificar si el archivo existe
echo (file_exists($carpeta . $archivo)) ? "Archivo Existente" : "Archivo Inexistente";
echo "<br>";

// Verificar si el archivo es un archivo regular
echo (is_file($archivo)) ? "Archivo existente por is_file" : "Archivo Inexistente por is_file";
echo "<br>";

// Verificar si la carpeta existe
echo (is_dir($carpeta)) ? "Carpeta existente por is_dir" : "Carpeta Inexistente por is_dir";
echo "<br>";

$archivo2 = "Do i have to lose too.jpg";

// Si el archivo2 existe, obtener y mostrar sus propiedades
if (file_exists($carpeta.$archivo2)) {
    $size = filesize($carpeta.$archivo2);
    $creado = filectime($carpeta.$archivo2);
    $modificado = filemtime($carpeta.$archivo2);

    $sizeKB = $size / 1024;
    $sizeMB = $sizeKB / 1024;
    // Imprimir las propiedades del archivo
    echo "Tamaño del archivo: " . $sizeKB . " KBbytes";
    echo "<br>";
    echo "Fecha de creación: " . date("d-m-Y H:i:s", $creado);
    echo "<br>";
    echo "Última modificación: " . date("d-m-Y H:i:s", $modificado);
    echo "<br>";
} else {
    echo "Archivo Inexistente: " . $carpeta . $archivo2;
}
?>

