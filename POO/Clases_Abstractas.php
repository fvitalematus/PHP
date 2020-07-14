<?php
// abstract class : es para condicionar las clases a que tengan una heredada. extends
abstract class Persona {
    public function saludo(){
        return 'Hola!';
    }
}

class Estudiante extends Persona {

}

$franco = new Estudiante;
echo $franco->saludo();

?>