<?php

include 'treballadors.php';
include 'pilots.php';
include 'escuderia.php';
include 'mecanics.php';

//Donar d'alta, de baixa i veure pilots i mecànics
//Veure escuderies i bòlids(falten els bòlids)

//Instanciem Pilots
$kiersen = new Pilot("Andrew", "Kiersen", 24, 2, 50000, 177, 90);
$davis = new Pilot("Mark", "Davis", 25, 1, 50000, 175, 87);
$sanders = new Pilot("Paul", "Sanders", 29, 50000, 5, 170, 88);

echo $kiersen -> getNom();
echo '<br>';
echo $kiersen -> getCognom();
echo '<br>';

//Instanciem Mecànics
$silver = new Mecanic("Peter", "Silver", 48, 14, 50000, False);
$smith = new Mecanic("Alex", "Smith", 65, 30, 50000, False);
$solana = new Mecanic("Alvaro", "Solana", 35, 10, 50000, True);

//Comprovem lectura booleans
echo '<br>';
var_dump($smith -> getEstMec());
echo '<br>';
var_dump($solana -> getEstMec());
echo '<br>';

//Instanciem una escuderia
$fiat = new Escuderia ("Fiat", 100000000);

//Donem d'alta pilots
$fiat -> altaPilot($kiersen);
$fiat -> altaPilot($davis);
$fiat -> altaPilot($sanders);

//Donem d'alta mecànics
$fiat -> altaMecanic($silver);
$fiat -> altaMecanic($smith);
$fiat -> altaMecanic($solana);

//Comprovem el mètode per veure si un mecànic té estudis superiors de mecànica
echo '<br>';
echo $fiat -> compEstudis("Alex", "Smith");
echo '<br>';
echo $fiat -> compEstudis("Alvaro", "Solana");
echo '<br>';

//Impressió escuderies
echo('<pre>');
print_r($fiat);
echo ('</pre>');

//Donem de baixa un pilot
$fiat -> baixaPilot("Mark", "Sanders");

//Donem de baixa un mecànic
$fiat -> baixaMecanic("Alex", "Smith");

//Comprovem els canvis realitzats
echo('<pre>');
print_r($fiat);
echo ('</pre>');

//Comprovem els mètodes per calcular els sous
echo "Sou Kiersen : " .$kiersen -> calcularSou();
echo '<br>';
echo "Sou Solana : ".$solana -> calcularSou();
echo '<br>';

?>