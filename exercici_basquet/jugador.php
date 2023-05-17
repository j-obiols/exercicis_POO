<?php

    class Jugador {

        private $nom;
        private $edat;
        private $altura;
        private $pes;
        private $posicio;
    
        
        public function __construct(string $no, int $ed, int $alt, int $pe, string $posi) {
            $this -> nom = $no;
            $this -> edat = $ed;
            $this -> altura = $alt;
            $this -> pes = $pe;
            $this -> posicio = $posi;
        }

        public function getNom() {
            return $this -> nom;
        }
        
        public function getEdat() {
            return $this -> edat;
        }

        public function getAltura() {
            return $this -> altura;
        }

    
    }