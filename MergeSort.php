<?php

function mergeSort($arr) {
    $length = count($arr);
    
    // Caso base: si el array tiene 1 o menos elementos, ya está ordenado
    if ($length <= 1) {
        return $arr;
    }
    
    // Encontrar el punto medio
    $mid = (int)($length / 2);
    
    // Dividir el array en dos mitades
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    // Recursivamente ordenar ambas mitades
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    // Mezclar las mitades ordenadas
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftIndex = 0;
    $rightIndex = 0;
    
    // Comparar y mezclar elementos
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if (strcasecmp($left[$leftIndex], $right[$rightIndex]) <= 0) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }
    
    // Agregar elementos restantes de la izquierda
    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }
    
    // Agregar elementos restantes de la derecha
    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }
    
    return $result;
}

// Ejemplo de uso
$palabras = ["Manzana", "pera", "Banana", "uva", "kiwi", "Naranja"];
echo "Lista original: " . implode(", ", $palabras) . "\n";

$palabrasOrdenadas = mergeSort($palabras);
echo "Lista ordenada alfabéticamente: " . implode(", ", $palabrasOrdenadas) . "\n";

?>