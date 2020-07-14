<?php
if (isset($_COOKIE['font-size'])){
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamaño = '15px';
}

$tamaño = $_COOKIE['font-size'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
    p {
        font-size: <?php echo $tamaño; ?>;
    }

    </style>
</head>
<body>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Neque eius quibusdam consequatur distinctio ad quidem assumenda nihil 
    natus totam tenetur veniam labore, sunt blanditiis, ducimus corporis 
    laudantium voluptatem nulla esse!</p>
</body>
</html>