<?php 
    include_once "Persona.php";
    class Usuari extends Persona{

        //Atributs

        private $idUsuari;
        private $llibrePrestec;
        private $dataIniciPrestec;
        private $isbnPrestec;
        
        //Constructor

        public function __construct($nom, $cognom, $adrecaElec, $tel, $contrasenya, $idUsuari, $llibrePrestec, $dataIniciPrestec, $isbnPrestec){
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->adrecaElec = $adrecaElec;
            $this->tel = $tel;
            $this->contrasenya = $contrasenya;
            $this->idUsuari = $idUsuari;
            $this->llibrePrestec = $llibrePrestec;
            $this->dataIniciPrestec = $dataIniciPrestec;
            $this->isbnPrestec = $isbnPrestec;    
        
        }

        //G&S
        
        public function setnom($nom){
            $this->nom=$nom;
        }
        
        public function getnom(){
            return $this->nom;
        }

        public function setcognom($cognom){
            $this->cognom=$cognom;
        }
        
        public function getcognom(){
            return $this->cognom;
        }

        public function setadrecaElec($adrecaElec){
            $this->adrecaElec=$adrecaElec;
        }
        
        public function getadrecaElec(){
            return $this->adrecaElec;


        }
        public function settel($tel){
            $this->tel=$tel;
        }
        
        public function gettel(){
            return $this->tel;
        }
        
        public function setcontrasenya($contrasenya){
            $this->contrasenya=$contrasenya;
        }
        
        public function getcontrasenya(){
            return $this->contrasenya;
        }
        
        public function setidUsuari($idUsuari){
            $this->idUsuari=$idUsuari;
        }
        
        public function getidUsuari(){
            return $this->idUsuari;
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
        public function setisbnPrestec($isbnPrestec){
            $this->isbnPrestec=$isbnPrestec;
        }
        
        public function getisbnPrestec(){
            return $this->isbnPrestec;
        }

        public function __toString()
        {
            return "<b>Usuari creat</b> <br>" . "Nom: ". $this->nom . "<br> Cognom: " . $this->cognom . "<br> Adreça Electrònica: " . $this->adrecaElec .
            "<br> Telèfon: " . $this->tel . "<br> Contrassenya: " . $this->contrasenya . 
            "<br> ID del usuari: " . $this->idUsuari . "<br> Llibre Prestat: " . $this->llibrePrestec . 
            "<br> Data Inici del Prèstec: " . $this->dataIniciPrestec . "<br> ISBN del llibre prestat: " . $this->isbnPrestec;
        }

        //metodes pagina

        public function veureTotsElsLlibres(){

        }

        //HERENCIA
        public function veureDadesPersonals(){

        }

    }

    

?>