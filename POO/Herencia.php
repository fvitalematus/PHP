<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
           $this->nombre = $nombre;
           $this->edad = $edad;
           $this->pais = $pais;
        }
    
    public function mostrarInformacion(){
          return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
        }
}

class Estudiante extends Persona {
    // extends herencia para tener una clase dentro de otra
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        // parent: constructor padre para no repetir
        $this ->carrera = $carrera;
    }
}

class Trabajador extends Persona {
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this ->trabajo = $trabajo;
    }
}

$franco = new Trabajador('Franco Vitale', 23, 'Chile', 'Desarrollador');
echo $franco->trabajo;

?>