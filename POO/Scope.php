<?php

// SCOPE --> Public : PUEDEN ser accedidos desde cualquier parte, ya sea 
// dentro o fuera de nuestra clase.

// SCOPE --> Protected : PUEDEN ser accedidos desde dentro de la clase
// y otras clases que heredaron. Pero no fuera de estas.

// SCOPE --> Private  : PUEDEN ser accedidos desde dentro de la clase en la que
// fueron creados. No podemos acceder a ellos desde otra clase que heredo
// y tampoco podemos acceder desde fuera de las clases. 

class Usuario {
    public $nombre;
    private $correo;

    function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo(){
        return ' Este es el correo: ' . $this->correo
    }
}

$franco = new Miembro('franco', 'franco@gmail.com');
echo $franco->mostrarCorreo();

?>