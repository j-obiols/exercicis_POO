<?php

    include 'hotel.php';


    $hotel1 = new Hotel ("Palace", 35, 45, Servei::Complet);
    $hotel2 = new Hotel ("Ritz", 55, 45, Servei::MitjaPensio);
    $hotel3 = new Hotel ("Rambla", 60, 45, Servei::Complet);
    $hotel4 = new Hotel ("Astoria", 26, 45, Servei::MitjaPensio);
    $hotel5 = new Hotel ("Marina", 12, 45, Servei::Complet);

    
    $hotels = array();
    

    array_push($hotels, $hotel1, $hotel2,$hotel3,$hotel4,$hotel5);

    /*echo'<pre>';
    echo var_dump ($hotels);
    echo '</pre>';*/

    function trobarHotelsMes50($hotels){

        $hotelsMes50 = array();

        foreach($hotels as $hotel) {
            
            if(($hotel -> getNumHab()) > 50) {

                $hotelsMes50[$hotel -> getNom()] = $hotel -> getNumHab();
            }
      
        }
        return $hotelsMes50;

    }

    function trobarHotelsServeiComplet($hotels){

        $hotelsServeiComplet = array();

        foreach($hotels as $hotel) {
            
            if(($hotel -> getServei()) == "complet") {
                $hotelsServeiComplet[] = $hotel;
            }
      
        }
        return $hotelsServeiComplet;

    }
     
    $hotelsMes50 =  trobarHotelsMes50($hotels);
    $hotelsServeiComplet = trobarHotelsServeiComplet($hotels);

    echo'<pre>';
    echo var_dump ($hotelsMes50);
    echo '</pre>';

    echo'<pre>';
    echo var_dump ($hotelsServeiComplet);
    echo '</pre>';

?>