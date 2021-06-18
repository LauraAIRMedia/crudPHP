<?php

class ConexionBD{
    public function cbd() {
        $bd = new PDO("mysql:host=localhost;dbname=crud","root","");
        return $bd;
    }

}


// host: localhost
// nombreBD: crud
// usuario: root
// password: no tiene