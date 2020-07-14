<?php

$id = $_GET['id'];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos','root', '');
    // echo "Conexion OK";
   //CODIGOS

   // Metodo Query (se recomienda solo si id = 5, sino te inyectan codigo)
   // $resultados = $conexion->query('SELECT * FROM usuarios');
   // $conexion->query("SELECT * FROM usuarios WHERE id = 5");
   // foreach ($resultados as $fila) {
     //  echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
  // }

  // Prepared Statements
  $statement = $conexion->prepare('SELECT * FROM usuarios');
  $statement->execute(
      array(':id' => $id, ':id2' => 2) 
    );

  $resultados = $statement->fetchall();
  foreach($resultados as $usuario){
      echo $usuario['nombre'] . '<br>';
  }
 

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>