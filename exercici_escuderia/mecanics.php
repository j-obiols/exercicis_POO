<?php

    class Mecanic extends Treballador {

        private $estMec;

        public function __construct($no, $cog,  $ed,  $ant, $so, $est){
            $this -> estMec = $est;
            parent::__construct($no, $cog, $ed, $ant, $so);

        }
        
        public function getEstMec() {
            return $this -> estMec;
        }

        public function calcularSou() {
            $this -> sou = $this -> getSouBase() + 10000 * $this -> getAntiguetat();
            return $this -> sou;
        }
    }
   

?>