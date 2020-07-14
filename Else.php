<?php

$mes = "Junio";
$verdadero = true;

// if ($verdadero)  {
// echo "Verdadero";
// } else {
// echo "Falso";
// }

if ($mes == "Diciembre") {
    echo "Feliz Navidad";
} else if($mes == "Enero"){
    echo "Feliz Año Nuevo";
} else if ($mes == "Junio"){
    echo "Feliz Cumpleaños";
} else {
    echo "El mes que ingresaste no tiene Celebracion";
}

?>