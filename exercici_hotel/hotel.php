<?php

    include 'servei.php';

    class Hotel {

        protected $nom;
        protected $numHab;
        protected $numTreb;
        protected Servei $servei;

        public function __construct(string $nom, int $numHab, int $numTreb, Servei $servei) {


        $this -> nom = $nom;
        $this -> numHab = $numHab;
        $this -> numTreb = $numTreb;
        $this -> servei = $servei;

        }

        public function getNom() {
            return $this -> nom;
        }

        public function getNumHab() {
        return $this -> numHab;
        }

        public function getServei() {
            return $this -> servei -> text();
        }

    }

?>