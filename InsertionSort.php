<?php

function insertionSort($arr) {
    $n = count($arr);
    
    // Comenzamos desde el segundo elemento
    for ($i = 1; $i < $n; $i++) {
        // Guardamos el elemento actual
        $actual = $arr[$i];
        $j = $i - 1;
        
        // Movemos los elementos mayores que el actual
        // una posición adelante
        while ($j >= 0 && strcasecmp($arr[$j], $actual) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        
        // Colocamos el elemento actual en su posición correcta
        $arr[$j + 1] = $actual;
    }
    
    return $arr;
}

// Ejemplo de uso
$nombres = ["Juan", "ana", "Carlos", "beatriz", "Diana", "eduardo"];
echo "Lista original de nombres: " . implode(", ", $nombres) . "\n";

$nombresOrdenados = insertionSort($nombres);
echo "Lista ordenada alfabéticamente: " . implode(", ", $nombresOrdenados) . "\n";

?>