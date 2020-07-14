<?php

// $amigo = array('telefono' => 1236547, 'edad' => 21, 'pais' => 'mexico');
// extract($amigo); (para extraer los que son los elementos de un 
// arreglo asociativo como si fueran variables)

$semana = array(
    'Lunes', 'Martes', 'Miercoles',
    'Jueves', 'Viernes', 'Sabado', 'Domingo'
);
// $ultimo_dia = array_pop($semana); (Extrae el ultimo elemento alfinal de un arreglo)
// foreach ($semana as $dia){
//    echo $dia . '<br />';
//}

// echo join(', -', $semana); (recibe cada uno de los elementos separados por 
// lo que coloquemos)

// echo count($semana);
// sort($semana); (ordena los elementos en forma ascendente alfabeticamente)
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana); 
// (ordena elementos en forma Invertidos)
echo join(', ', $semana_reverse);


?>