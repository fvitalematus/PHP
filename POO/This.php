<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;
    
    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
        //This hace referencia a la clase
    }
}

$franco = new Persona;
$franco->nombre='Franco Vitale';
$franco->edad='23';
$franco->pais= 'Chile';
$franco->mostrarInformacion();

echo '<br />';

$carlos = new Persona;
$carlos->nombre='Carlos Ceron';
$carlos->edad='30';
$carlos->pais= 'Mexico';
$carlos->mostrarInformacion();

?>