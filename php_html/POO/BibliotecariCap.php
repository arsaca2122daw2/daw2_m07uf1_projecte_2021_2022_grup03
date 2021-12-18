<?php 

    include "Persona.php";
    include "InterfacePDF.php";

    class BibliotecariCap extends Persona implements InterfacePDF{

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

        //INTERRFACE
        public function crearPDF(){


    }
}