<?php

// if (file_exists('documento.txt')) {
   // echo "El archivo si existe";
    //} else {
      //  echo "El archivo no existe";
    //}

// echo file_get_contents('documento.txt');
//   \n nueva linea solo con comillas dobles  (EL SLASH SE HACE CON EL O ANTES DEL 1 PRIMER BOTON IZQ)
//  file_put_contents (PARA SOBREESCRIBIR) AGREGAR INFO
// FILE_APPEND PARA AGREGAR MAS INFO SIN SOBREESCRIBIR

//file_put_contents('documento.txt', "Hola mundo \n", FILE_APPEND);

//file_put_contents('documento.txt', '');
// for ($i= 1 ; $i <=10 ; $i++) {
//    file_put_contents('documento.txt', "$i \n", FILE_APPEND);
// }

$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);

?>