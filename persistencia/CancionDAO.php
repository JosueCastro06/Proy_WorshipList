<?php

class CancionDAO {
    
    private $idCancion;
    private $nombre;
    private $autor;
    private $letra;
    private $tipo;

    public function CancionDAO($idCancion="", $nombre="", $autor="", $letra="", $tipo="") {
        $this -> idCancion = $idCancion;
        $this -> nombre = $nombre;
        $this -> autor = $autor;
        $this -> letra = $letra;
        $this -> tipo = $tipo;
    }

    public function insertarCancion(){
        return "insert into Cancion (nombre, autor, letra, tipo)
                values ('" . $this -> nombre . "' , '" . $this -> autor . "' , '" . $this -> letra .  "'  , '" .  $this -> tipo . "')";
    }

    public function consultar(){
        return "select nombre, autor, letra, tipo
                from Cancion
                where id = '" . $this -> idCancion .  "'";
    }

    public function consultarTodos(){
        return "select id, nombre, autor, letra, tipo
                from Cancion";
    }


}