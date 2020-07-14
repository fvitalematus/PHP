<?php

// pathinfo('documento.txt', PATHINFO_BASENAME);

//PATHINFO_EXTENSION: devuelve la extension del archivo
// PATHINFO_FILENAME: devuelve el nombre del archivo
//BASENAME: Conocer el nombre base de un archivo incluyendo 
// la extension  y elimina toda la ruta de los archivos
//DIRNAME:devuelve el directorio padre del archivo


//$resultados = glob('sesions/*.{php,html,txt}', GLOB_BRACE);
// print_r($resultados);

// echo basename('carpeta1/carpeta2/archivo.php', '.php');
echo dirname('carpeta1/carpeta2/archivo.php', '.php');

?>