<?php

    class Equip {

        private $nom;
        private $jugadors = array();

        
        public function __construct(string $no) {
            $this -> nom = $no;
        }


        public function getJugadors() {
            return $this -> jugadors;
        }
  

        public function altaJugador($jug) {
            $this -> jugadors[] = $jug;
        }

        public function getJugadorsSub21() {

            $sub21 = array();

            foreach($this -> getJugadors() as $key => $jug) {

                if (($jug -> getEdat()) < 21) {

                  $sub21[$jug -> getNom()] = $jug -> getEdat();

                }
            }   

            return $sub21;
        }

        public function getJugadorsAlts() {

            $jugAlts = array();

            foreach($this -> getJugadors() as $key => $jug) {

                if (($jug -> getAltura()) > 200) {

                    $jugAlts[$jug -> getNom()] = $jug -> getAltura();

                }
            }   
            return $jugAlts;
        }

        /*això que segueix era el que volia fer perquè no he tornat a mirar l'enunciat
        i era la idea que m'havia quedat: buscar el jugador més jove...*/
        
        public function getJugadorMesJove() {
             
            $jugMesJove = $this -> jugadors[0];

            for($ind = 1; $ind <= (sizeof($this -> jugadors) - 1); $ind++) {

                if($this -> jugadors[$ind] -> getEdat() < $jugMesJove -> getEdat()) {

                    $jugMesJove = $this -> jugadors[$ind];
                    
                }
            }
   
            return $jugMesJove ->getNom();

        }

    }

?>