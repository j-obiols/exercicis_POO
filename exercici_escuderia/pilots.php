<?php

class Pilot extends Treballador {

    private $alçada;
    private $pes;
    private $plus = 50000;

    public function __construct($no, $cog, $ed, $ant, $so, $al, $pe){
        parent::__construct($no, $cog, $ed, $ant, $so);
        $this -> alçada = $al;
        $this -> pes = $pe;
        
    }

    public function setPlus($plu){
        $this -> plus = $plu;
    }

    public function getPlus(){
       return $this -> plus;
    }

    public function calcularSou() {
       $this -> sou = $this -> getSouBase() + $this -> getPlus() + 10000 * $this -> getAntiguetat();
       return $this -> sou;
    }
}

?>