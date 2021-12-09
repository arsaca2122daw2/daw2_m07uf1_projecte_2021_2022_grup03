<?php

class Persona{
    protected $nom;
    protected $cognom;
    protected $adrecaElec;
    protected $tel;
    protected $contrasenya;


    public function __construct($n, $c, $a, $t, $p){
        $this->$nom = $n;
        $this->$cognom = $c;
        $this->$adrecaElec = $a;
        $this->$tel = $t;
        $this->$contrasenya = $p;


    }
}

    class Usuari extends Persona{

        private $idUsuari;
        private $llibrePrestec;
        private $dataIniciPrestec;
        private $isbnPrestec;

        public function __construct($n, $c, $a, $t, $p, $idUsu, $llibreP, $dataIniciP, $isbnP){
            $this->$nom = $n;
            $this->$cognom = $c;
            $this->$adrecaElec = $a;
            $this->$tel = $t;
            $this->$contrasenya = $p;
            $this->$idUsuari = $idUsu;
            $this->$llibrePrestec = $llibreP;
            $this->$dataIniciPrestec = $dataIniciP;
            $this->$isbnPrestec = $isbnP;    
   
        }

    }


    class Bibliotecari extends Persona{
        private $idBiblotecari;
        private $numSS;
        private $dataIniciTreball;
        private $salari;
        private $cap;

        public function __construct($n, $c, $a, $t, $p, $idBiblio, $ss, $dataIniciT, $sal,$cap){
            $this->$nom = $n;
            $this->$cognom = $c;
            $this->$adrecaElec = $a;
            $this->$tel = $t;
            $this->$contrasenya = $p;
            $this->$idBiblotecari = $idBiblio;
            $this->$numSS = $ss;
            $this->$dataIniciTreball = $dataIniciT;
            $this->$salari = $sal;
            $this->$cap = $cap;
    
    
        }

    
    }

    class Llibre {

        private $titol;
        private $autor;
        private $isbn;
        private $llibrePrestec;
        private $dataIniciPrestec;
        private $codiUsuPrestec;


        public function __construct($ti, $au, $isbn, $lP, $dIP, $cUP){
            $this->$titol = $ti;
            $this->$autor = $au;
            $this->$isbn = $isbn;
            $this->$llibrePrestec = $lP;
            $this->$dataIniciPrestec = $dIP;
            $this->$codiUsuPrestec = $cUP;


        }

        public function mostrardades(){
            echo("El titol es :".$ti);
            echo("L'autor es :".$au);
            echo("L'ISBN es :".$isbn);
            echo("El llibre esta en prestec :".$lP);
            echo("La data d'inici del prestec es :".$dIP);
            echo("El té l'usuari :".$cUP);

        }


    }
















?>