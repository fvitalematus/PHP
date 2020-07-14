<?php

// localhost o 127.0.0.1
$conexion = mysql_connect('localhost', 'root', '') or die('No se pudo conectar a la bd');

mysql_select_db('prueba_datos', $conexion);

$resultados = mysql_query('SELECT * FROM usuarios');

// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.
while($fila = mysql_fetch_object($resultados)) {
    echo $fila->nombre;
    echo "<br>";
}

?>