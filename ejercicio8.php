<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container .radio-group,
        .form-container .checkbox-group {
            margin-bottom: 10px;
        }

        .form-container input[type="submit"] {
            width: auto;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 3px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            border: 1px solid red;
            box-shadow: 0 0 5px red;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['bandera'])) {
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
           /* echo "<div class='error-message'>Se encontraron los siguientes errores:<br>";
            foreach ($errores as $error) {
                echo "<span class='error-message'>$error</span><br>";
            }
            echo "</div>"; */
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

<div class="form-container">
    <h2>Formulario</h2>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre" class="<?php echo isset($errores['nombre']) ? 'error' : ''; ?>" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
        <?php if (isset($errores['nombre'])) echo '<p class="error-message">' . $errores['nombre'] . '</p>'; ?>

        <input type="text" name="apellido" placeholder="Apellido" class="<?php echo isset($errores['apellido']) ? 'error' : ''; ?>" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>">
        <?php if (isset($errores['apellido'])) echo '<p class="error-message">' . $errores['apellido'] . '</p>'; ?>

        <input type="email" name="correo" placeholder="Correo" class="<?php echo isset($errores['correo']) ? 'error' : ''; ?>" value="<?php echo isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : ''; ?>">
        <?php if (isset($errores['correo'])) echo '<p class="error-message">' . $errores['correo'] . '</p>'; ?>

        <textarea name="comentario" placeholder="Comentario" class="<?php echo isset($errores['comentario']) ? 'error' : ''; ?>"><?php echo isset($_POST['comentario']) ? htmlspecialchars($_POST['comentario']) : ''; ?></textarea>
        <?php if (isset($errores['comentario'])) echo '<p class="error-message">' . $errores['comentario'] . '</p>'; ?>

        <select name="idioma" class="<?php echo isset($errores['idioma']) ? 'error' : ''; ?>">
            <option value="">Selecciona un idioma</option>
            <option value="español" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'español') ? 'selected' : ''; ?>>Español</option>
            <option value="ingles" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ingles') ? 'selected' : ''; ?>>Inglés</option>
            <option value="frances" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'frances') ? 'selected' : ''; ?>>Francés</option>
        </select>
        <?php if (isset($errores['idioma'])) echo '<p class="error-message">' . $errores['idioma'] . '</p>'; ?>

        <div class="radio-group">
            <label>Música:</label><br>
            <label><input type="radio" name="musica" value="rock" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'rock') ? 'checked' : ''; ?>> Rock</label>
            <label><input type="radio" name="musica" value="pop" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'pop') ? 'checked' : ''; ?>> Pop</label>
            <label><input type="radio" name="musica" value="jazz" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'jazz') ? 'checked' : ''; ?>> Jazz</label>
        </div>
        <?php if (isset($errores['musica'])) echo '<p class="error-message">' . $errores['musica'] . '</p>'; ?>

        <div class="checkbox-group">
            <label>Pasatiempos:</label><br>
            <label><input type="checkbox" name="pasatiempo[]" value="leer" <?php echo (isset($_POST['pasatiempo']) && in_array('leer', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Leer</label>
            <label><input type="checkbox" name="pasatiempo[]" value="deportes" <?php echo (isset($_POST['pasatiempo']) && in_array('deportes', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Deportes</label>
            <label><input type="checkbox" name="pasatiempo[]" value="musica" <?php echo (isset($_POST['pasatiempo']) && in_array('musica', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Música</label>
        </div>
        <?php if (isset($errores['pasatiempo'])) echo '<p class="error-message">' . $errores['pasatiempo'] . '</p>'; ?>

        <input type="hidden" name="bandera" value="1">
        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
