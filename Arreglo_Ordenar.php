<?php

$meses = array(
"Enero", "Febrero", "Marzo", "Abril",
"Mayo", "Junio", "Julio", "Agosto",
"Septiembre", "Octubre", "Noviembre", "Diciembre"
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);
sort($numeros);

// sort($meses);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
<h1> Meses del año </h1>
     <ul>
        <?php
        
        foreach($numeros as $numero){
            echo "<li>" . $numero . "</li>";
        }
        ?>

     </ul>
    
</body>   
</html>
