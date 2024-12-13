<?php

function bubbleSort(&$arr) {
    $n = count($arr);
    
    // Recorremos todo el arreglo
    for ($i = 0; $i < $n; $i++) {
        // Últimos i elementos ya están en su lugar
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Si el elemento actual es menor que el siguiente
            // los intercambiamos (para orden descendente)
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Ejemplo de uso
$numeros = [64, 34, -25, 12, 22, 11, 90];
echo "Lista original: " . implode(", ", $numeros) . "\n";

bubbleSort($numeros);
echo "Lista ordenada descendente: " . implode(", ", $numeros) . "\n";

?>