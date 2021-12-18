<?php 
class Llibre {

    private $titol;
    private $autor;
    private $isbn;
    private $llibrePrestec;
    private $dataIniciPrestec;
    private $codiUsuPrestec;


    public function __construct($titol, $autor, $isbn, $llibrePrestec, $dataIniciPrestec, $codiUsuPrestec){
        $this->titol = $titol;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->llibrePrestec = $llibrePrestec;
        $this->dataIniciPrestec = $dataIniciPrestec;
        $this->codiUsuPrestec = $codiUsuPrestec;


    }

    public function settitol($titol){
        $this->titol=$titol;
    }

    public function gettitol(){
        return $this->titol;
    }

    public function setautor($autor){
        $this->autor=$autor;
    }

    public function getautor(){
        return $this->autor;
    }

    public function setisbn($isbn){
        $this->isbn=$isbn;
    }

    public function getisbn(){
        return $this->isbn;
    }

    public function setllibrePrestec($llibrePrestec){
        $this->llibrePrestec=$llibrePrestec;
    }

    public function getllibrePrestec(){
        return $this->llibrePrestec;
    }

    public function setdataIniciPrestec($dataIniciPrestec){
        $this->dataIniciPrestec=$dataIniciPrestec;
    }

    public function getdataIniciPrestec(){
        return $this->dataIniciPrestec;
    }

    public function setcodiUsuPrestec($codiUsuPrestec){
        $this->codiUsuPrestec=$codiUsuPrestec;
    }

    public function getcodiUsuPrestec(){
        return $this->codiUsuPrestec;
    }

    public function __toString()
    {
        return "<b>Llibre creat</b> <br>" . "Títol: ". $this->titol . "<br> Autor: " . $this->autor . "<br> ISBN: " . $this->isbn .
        "<br> Llibre en Prèstec: " . $this->llibrePrestec . "<br> Data Inici del prèstec: " . $this->dataIniciPrestec . 
        "<br> ID del usuari amb el prèstec: " . $this->codiUsuPrestec ;
    }
}
