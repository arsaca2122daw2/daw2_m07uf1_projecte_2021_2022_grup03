<?php

    abstract class Persona{
        protected $nom;
        protected $cognom;
        protected $adrecaElec;
        protected $tel;
        protected $contrasenya;


    }

    class Usuari extends Persona{
        private $idUsuari;
        private $llibrePrestec;
        private $dataIniciPrestec;
        private $isbnPrestec;

        public function __construct($n, $c, $a, $t, $p, $idU, $lP, $dataIP, $isbn){
            $this->$nom = $n;
            $this->$cognom = $c;
            $this->$adrecaElec = $a;
            $this->$tel = $t;
            $this->$contrasenya = $p;
            $this->$idUsuari = $idU;
            $this->$llibrePrestec = $lP;
            $this->$dataIniciPrestec = $dataIP;
            $this->$isbnPrestec = $isbn;
    
    
        }
    }

    class Bibliotecari extends Persona{
        private $idBibliotecari;
        private $numSS;
        private $dataIniciTreball;
        private $salari;
        private $cap;

        public function __construct($n, $c, $a, $t, $p, $idB, $SS, $dataIT, $s, $cap){
            $this->$nom = $n;
            $this->$cognom = $c;
            $this->$adrecaElec = $a;
            $this->$tel = $t;
            $this->$contrasenya = $p;
            $this->$idBibliotecari = $idB;
            $this->$numSS = $SS;
            $this->$dataIniciTreball = $dataIT;
            $this->$salari = $s;
            $this->$cap = $cap;
    
        }
    }

?>