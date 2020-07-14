<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola mundo <br />';
    }
}

$franco = new Persona;
$franco->nombre = 'Franco Vitale';
$franco->edad = 23;
$franco->pais = 'Chile';

$franco->mostrarInformacion();

echo $franco->nombre . ' tiene ' . $franco->edad . ' años de edad';

$carlos = new Persona;
$carlos->nombre = 'Carlos';
$carlos->edad = 30;
$carlos->pais = 'mexico';

