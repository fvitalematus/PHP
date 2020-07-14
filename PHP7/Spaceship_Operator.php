<?php

// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

$arreglo = [3,1,5,2,4];
sort($arreglo);

function comparar($a, $b){
    return $a <=> $b;
}
usort($arreglo, 'comparar');

echo implode(' - ', $arreglo);

?>
