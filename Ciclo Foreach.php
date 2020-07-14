<?php

$meses = array(
    "Enero", "Febrero", "Marzo", "Abril",
    "Mayo", "Junio", "Julio", "Agosto",
    "Septiembre", "Octubre", "Noviembre", "Diciembre"
    );
    
$Franco = array("Telefono" => 12365489, "Edad" => 20, "Pais" => "Chile");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Documentos </title>
</head>
<body>
<h1> Documentos </h1>
     <ul>
        <?php
        
        foreach($Franco as $dato => $Valor){
            echo "<li>" . $dato . ": " . $Valor . "</li>";
        }
        ?>

     </ul>
    
</body>   
</html>