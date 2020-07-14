<?php

$paises = array(
    "Mexico", "Italia", "Colombia", "Peru", 
    "Chile", "Venezuela", "Usa"
);

//foreach($paises as $pais){
    //echo $pais . "<br />";

    //if ($pais == "Colombia") {
    //break;
   // }
//}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1> Paises Latinoamericanos: </h1>
      <?php

      foreach($paises as $pais){
          if ($pais == "Italia") {
              continue;
          }
          echo $pais . "<br />";
      }
?>
</body>
</html>