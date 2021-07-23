<?php

require_once 'persistencia/Conexion.php';
require_once 'persistencia/CancionDAO.php';

class Cancion {

    private $idCancion;
    private $nombre;
    private $autor;
    private $letra;
    private $tipo;
    private $conexion;
    private $cancionDAO;

    public function getIdCancion(){
        return $this -> idCancion;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getAutor() {
        return $this -> autor;
    }

    public function getLetra() {
        return $this -> letra;
    }

    public function getTipo() {
        return $this -> tipo;
    }

    public function Cancion ($idCancion="", $nombre="", $autor="", $letra="", $tipo="") {
        $this -> idCancion = $idCancion;
        $this -> nombre = $nombre;
        $this -> autor = $autor;
        $this -> letra = $letra;
        $this -> tipo = $tipo;
        $this -> conexion = new Conexion();
        $this -> cancionDAO = new CancionDAO($this -> idCancion, $this -> nombre, $this -> autor, $this -> letra, $this -> tipo);
    }






}



