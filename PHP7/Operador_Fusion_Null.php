<?php
//if(isset$_GET['nombre'])){
  //  $nombre = $_GET['nombre'];
//} else {
  //  $nombre = 'Anonimo';
//} <==
//     ==>$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
// ?? si la variable tiene valor lo guardas en nombre de otra forma en anonimo
$nombre = $_GET['nombre'] ?? 'Anonimo';
echo $nombre;

?>