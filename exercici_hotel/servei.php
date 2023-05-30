<?php

    enum Servei {

        case Complet;
        case MitjaPensio;

        public function text(): string {

            return match($this)  {
                Servei::Complet => "complet",
                Servei::MitjaPensio => "mitjaPensio",
              
            };
        }
    }

   
?>