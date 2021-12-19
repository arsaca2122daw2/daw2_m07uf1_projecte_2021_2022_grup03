<?php 
    include_once "Persona.php";
    class Bibliotecari extends Persona{

        private $idBiblotecari;
        private $numSS;
        private $dataIniciTreball;
        private $salari;
        private $cap = false;

        public function __construct($nom, $cognom, $adrecaElec, $tel, $contrasenya, $idBiblotecari, $numSS, $dataIniciTreball, $salari, $cap){
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->adrecaElec = $adrecaElec;
            $this->tel = $tel;
            $this->contrasenya = $contrasenya;
            $this->idBiblotecari = $idBiblotecari;
            $this->numSS = $numSS;
            $this->dataIniciTreball = $dataIniciTreball;
            $this->salari = $salari;
            $this->cap = $cap;
    
    
        }

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
        
        public function setidBiblotecari($idBiblotecari){
            $this->idBiblotecari=$idBiblotecari;
        }

        public function getidBiblotecari(){
            return $this->idBiblotecari;
        }

        public function setnumSS($numSS){
            $this->numSS=$numSS;
        }

        public function getnumSS(){
            return $this->numSS;
        }
        public function setdataIniciTreball($dataIniciTreball){
            $this->dataIniciTreball=$dataIniciTreball;
        }

        public function getdataIniciTreball(){
            return $this->dataIniciTreball;
        }
        public function setsalari($salari){
            $this->salari=$salari;
        }

        public function getsalari(){
            return $this->salari;
        }
        public function setcap($cap){
            $this->cap=$cap;
        }

        public function getcap(){
            return $this->cap;
        }

        //metodes pagina
            //llibres
        public function __toString(){
            return "<b>Llibre creat</b> <br>" . "Nom: ". $this->nom . "<br> Cognom: " . $this->cognom . "<br> Adreça Electrònica: " . $this->adrecaElec .
            "<br> Telèfon: " . $this->tel . "<br> Contrassenya: " . $this->contrasenya . 
            "<br> ID del bibliotecari: " . $this->idBiblotecari . "<br> Número Seguretat Social: " . $this->numSS . 
            "<br> Data Inici del Treball: " . $this->dataIniciTreball . "<br> Salari: " . 
            $this->salari . "<br> Cap: " . $this->cap;
        }

        public function crearLlibre(){

        }

        public function veureLlibre(){

        }

        public function modificarLlibre(){

        }

        public function eliminarLlibre(){

        }

            //usuaris

        public function crearusuari(){

        }

        public function veureUsuari(){

        }

        public function modificarUsuari(){

        }

        public function eliminarUsuari(){

        }
        
        //HERENCIA 
        public function veureDadesPersonals(){

        }
    }

?>