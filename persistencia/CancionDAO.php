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


}