<?php
    
  class Escuderia {

    private $nom;
    private $pressupost;
    private $pilots = array();
    private $mecanics = array();

    public function __construct($no, $presu)  {
        $this -> nom = $no;
        $this -> pres = $presu;
    }
        
    //Getters & Setters

    public function getNom(){
      return $this -> nom;
    }

    public function getPressup(){
      return $this -> pressupost;
    }

    public function getPilots(){
      return $this -> pilots;
    }

    public function getMecanics(){
      return $this -> mecanics;
    }

    public function setNom($nomi){
        $this -> nom = $nomi;
    }

    public function setPresu($presi){
        $this -> pressupost = $presi;
    }

    /*public function setPilot($pil){
      $this-> pilots[] = $pil;
    }*/

    
    public function altaPilot($pil){
      $this-> pilots[] = $pil;
    }
    

    public function altaMecanic($mec){
      $this-> mecanics[] = $mec;
    }
    
    public function baixaMecanic($nom, $cognom) {

      $indexMec;

      foreach($this -> getMecanics() as $key => $mec) {

        if($mec -> getNom() == $nom and $mec -> getCognom() == $cognom ) {
         $indexMec = $key;
         break;
        }
      }

      unset($this -> mecanics[$indexMec]);

    }

    public function baixaPilot($nom, $cognom) {

      $index = 0;

      foreach($this -> getPilots() as $key => $pil) {

        if($pil -> getNom() == $nom and $pil -> getCognom() == $cognom ) {
         $index = $key;
         break;
        }

      }
    
      unset($this -> pilots[$index]);

    }

    public function compEstudis($nom, $cognom) {
      
      $indexMec = 0;
      $key;

      foreach($this -> getMecanics() as $key => $mec) {
        if($mec -> getNom() == $nom and $mec -> getCognom() == $cognom ) {
         $indexMec = $key;
         break;
        }
      }
      
      
      if(($this -> mecanics[$indexMec]) -> getEstMec()) {
        return "si";
      } else {
        return "no";
      }

    }

  }
    
     
    
?>