<?php




if(isset($_POST['submit'])){
    // Lista de campos requeridos
$camposRequeridos = [
    "nombre" => "Nombre",
    "apellido" => "Apellido",
    "correo" => "Correo",
    "comentario" => "Comentario",
    "idioma" => "Idioma",
    "musica" => "Música",
    "pasatiempo" => "Pasatiempo"
];

$errores = [];
$isFormSubmitted = false;

function validarLongitudComentario($comentario) {
    return strlen($comentario) >= 5 && strlen($comentario) <= 50;
}
function validarCaracteresEspeciales($comentario) {
    return preg_match('/[*%&.@]/', $comentario) === 0;
}

function validarLongitudNombreApellido($valor) {
    return strlen($valor) > 3 && strlen($valor) < 20;
}

// Validar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isFormSubmitted = true;

    // Validar cada campo
    foreach ($camposRequeridos as $campo => $nombreCampo) {
        if (empty($_POST[$campo])) {
            $errores[$campo] = "El campo '$nombreCampo' no puede estar vacío.";
        } else {
            if ($campo === 'comentario') {
                $comentario = $_POST[$campo];
                if (!validarLongitudComentario($comentario)) {
                    $errores[$campo] = "El comentario debe tener entre 5 y 50 caracteres.";
                }
                if (!validarCaracteresEspeciales($comentario)) {
                    $errores[$campo] = "El comentario no puede contener /[*%&.@]/";
                }
            }

            if ($campo === 'nombre' || $campo === 'apellido') {
                $valor = $_POST[$campo];
                if (!validarLongitudNombreApellido($valor)) {
                    $errores[$campo] = "El $nombreCampo debe tener entre 3 y 20 caracteres.";
                }
            }
        }
    }

    // Mostrar resultados o errores
    if (!empty($errores)) {
        echo "<div style='color: red;'>Se encontraron los siguientes errores:<br>";
        foreach ($errores as $error) {
            echo "<span class='error'>$error</span><br>";
        }
        echo "</div>";
    } else {
        echo "Formulario enviado exitosamente.<br>";
        foreach ($camposRequeridos as $campo => $nombreCampo) {
            if (is_array($_POST[$campo])) {
                echo "$nombreCampo: " . implode(", ", array_map('htmlspecialchars', $_POST[$campo])) . "<br>";
            } else {
                echo "$nombreCampo: " . htmlspecialchars($_POST[$campo]) . "<br>";
            }
        }
    }
}
}


































?>