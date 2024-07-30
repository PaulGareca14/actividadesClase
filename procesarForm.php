<?php
if (isset($_POST['bandera']) && $_POST['bandera'] == '1') {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];

   
    $archivo = 'practica_3/' . $nombre . '_' . $apellido . '.txt';

    
    if (!file_exists('practica_3')) {
        mkdir('practica_3', 0777, true);
    }

    
    $datos = fopen($archivo, "w");
    if ($datos) {
       
        fwrite($datos, "Nombre: $nombre\n");
        fwrite($datos, "Apellido: $apellido\n");
        fwrite($datos, "Carrera: $carrera\n");
        fclose($datos);

        echo "Los datos han sido guardados en $archivo";
    } else {
        echo "No se pudo abrir el archivo para escritura.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
