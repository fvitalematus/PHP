<?php

class Persona {
    public static $dia = '1 de junio';

    public static function saludo($nombre = null){
        if($nombre){
            return 'Hola, buen dia ' . $nombre;
        }
        return 'Hola, buen dia ' . $nombre;
    }
}  
// METODO NORMAL: $carlos = new Persona 
// METODO STATIC: echo Persona :: saludo('franco');
echo Persona :: saludo('franco');


?>