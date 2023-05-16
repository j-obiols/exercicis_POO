<?php

abstract class Treballador {

    protected $nom;
    protected $cognom;
    protected $edat;
    protected $antiguetat;
    protected $souBase;
    
    public function __construct(string $no, string $cog, int $ed, int $antig, float $soB) {
        $this -> nom = $no;
        $this -> cognom = $cog;
        $this -> edat = $ed;
        $this -> antiguetat = $antig;
        $this -> souBase = $soB;
    }

    //Getters & Setters

    public function getNom() {
        return $this -> nom;
    }

    public function getCognom() {
        return $this -> cognom;
    }
    
    public function getEdat() {
        return $this -> edat;
    }

    public function getAntiguetat() {
        return $this -> antiguetat;
    }

    public function getSouBase() {
        return $this -> souBase;
    }
    
    public function setNom($nomi) {
        $this -> nom = $nomi;
    }

    public function setCognom($cognomi) {
        $this -> cognom = $cognomi;
    }

    public function setEdat($edati) {
        $this -> edat = $edati;
    }

    public function setAntig($anti) {
        $this -> antiguetat = $anti;
    }

    public function setSou($soui) {
        $this -> sou = $soui;
    }

    abstract function calcularSou();
}