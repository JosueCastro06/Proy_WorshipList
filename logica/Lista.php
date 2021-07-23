<?php

require_once 'persistencia/Conexion.php';
require_once 'persistencia/ListaDAO.php';

class Lista {

    private $idLista;
    private $dia;
    private $conexion;
    private $listaDAO; 

    public function getIdLista(){
        return $this -> idLista;
    }

    public function getDia() {
        return $this -> dia;
    }

    public function Lista ($idLista = "", $dia = "") {
        $this -> idLista = $idLista;
        $this -> dia = $dia;
        $this -> conexion = new Conexion();
        $this -> listaDAO = new ListaDAO($idLista = "", $dia = "");
    }

}