<?php

class ListaDAO {

    private $idLista;
    private $dia;

    public function ListaDAO ($idLista = "", $dia = ""){
        $this -> idLista = $idLista;
        $this -> dia = $dia;
    }

    public function insertarLista(){
        return "insert into Lista (dia)
                values ('" . $this -> dia . "')";
    }

    



}