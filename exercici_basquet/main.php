<?php

    require 'jugador.php';
    require 'equip.php';

    
    $peter = new Jugador("Peter", 25, 190, 90, "base");
    $mark = new Jugador("Mark", 19, 180, 85, "escolta");
    $sam = new Jugador("Sam", 22, 205, 89, "alero");
    $nil = new Jugador("Nil", 18, 203, 88, "pivot");
    $eric = new Jugador("Eric", 17, 189, 82, "ala pivot");


    echo $eric -> getEdat();
    echo '<br>';
    
    $badalona = new Equip("Badalona");
    
    $badalona -> altaJugador($peter);
    $badalona -> altaJugador($mark);
    $badalona -> altaJugador($sam);
    $badalona -> altaJugador($nil);
    $badalona -> altaJugador($eric);


    echo('<pre>');
    print_r($badalona);
    echo ('</pre>');
    
    echo '<br>';
    print_r($badalona -> getJugadorsSub21());
    echo '<br>';
    print_r($badalona -> getJugadorsAlts());
    echo '<br>';
    echo $badalona -> getJugadorMesJove()." és el jugador més jove del Badalona.";
   
?>