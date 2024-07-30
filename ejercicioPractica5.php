<?php

$texto = "Rendiz y Mostajo por siempre";

function contarPalabras($texto) {
    $palabras = str_word_count($texto, 1);
    return count($palabras);
}

function contarCaracteres($texto) {
    $caracteres = strlen($texto);
    return $caracteres;
}

function contarFrecuenciaLetras($texto) {
    $texto = strtolower($texto);
    $texto = str_replace(' ', '', $texto);
    $frecuencia = count_chars($texto, 1);
    
    
    $frecuencia_letras = [];
    foreach ($frecuencia as $codigo => $cantidad) {
        $letra = chr($codigo);
        $frecuencia_letras[$letra] = $cantidad;
    }
    
    return $frecuencia_letras;
}

echo "El total de palabras es: " . contarPalabras($texto) . "<br>";
echo "El total de caracteres es: " . contarCaracteres($texto) . "<br>";

$frecuenciaLetras = contarFrecuenciaLetras($texto);
echo "Frecuencia de cada letra:<br>";
foreach ($frecuenciaLetras as $letra => $frecuencia) {
    echo "La letra '$letra' aparece $frecuencia veces.<br>";
}

?>
