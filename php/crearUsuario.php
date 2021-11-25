<?php

    class usuari{
        protected $nom;
        protected $dni;//añadir mas variables
    

        public function __construct($n, $d){
            $this->nom = $n;
            $this->dni = $d;
        }

        public function visualitzacioLlibres(){
            //printf de los libros
        }

        public function visualitzacioDadesUsuari(){
            //printf de las dadas del usuario que es
        }
    }

?>