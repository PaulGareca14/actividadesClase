<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

 // Validación de longitud del usuario
 if (strlen($usuario) >= 10) {
    echo "Bienvenido " . $usuario;
} else {
    echo "Usuario debe contener mínimo 10 dígitos";
}

$numeros = array(0,1,2,3,4,5,6,7,8,9);
$contador=0;
foreach($numeros as $valor){

    if(strpos($password, $valor)!==false){
        $contador ++;
    }
}
echo "<br>";
echo($contador>0)? "Contraseña correcta": "Error de contraseña";

?>
