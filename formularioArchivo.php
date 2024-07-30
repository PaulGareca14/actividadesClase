<?php

if(isset($_POST['bandera'])){

    $archivo=$_FILES['file']['name'];
    $archivo=$_FILES['file']['type'];
    $archivo=$_FILES['file']['size'];

echo "Filename: ".$_FILES['file']['name']."<br>";
echo "Type: ".$_FILES['file']['type']."<br>";
echo "Size: ".$_FILES['file']['size']."<br>";
echo "Temp name: ".$_FILES['file']['tmp_name']."<br>";
echo "Error: ".$_FILES['file']['error']."<br>";



}





?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Subida de Archivo</title>
</head>
<body>
    <h2>Subir un Archivo</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Selecciona un archivo:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="hidden" name="bandera">
        <input type="submit" value="Subir Archivo">
        

        
    </form>
</body>
</html>

