<?php
session_start();

$_SESSION['nombre'] = 'Franco';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesions</title>
</head>
<body>
       <h1>Pagina de Inicio</h1>
       <p></p>
       <a href="pagina2.php">Ir a la pagina 2</a>
    
</body>
</html>