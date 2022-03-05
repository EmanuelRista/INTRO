<?php

//include, include_once, require, require_once

//include 'functions.php';
//include 'functions.php'; da errore! Non si deve ripetere, perchè la funzione è già definita
//functions.php era già incluso! E' come se tutto il codice venisse propriamente copiato qui

//include_once 'functions.php';
//include_once 'functions.php'; //non da errore perchè con include once si include solo una volta in ogni caso
//usiamo quindi sempre include once? No. Perchè per esempio all'interno di un ciclo se il codice servirà più volte lo farebbe vedere una volta sola

//require 'functions.php';
//la differenza tra include e require: require se il file non esiste, se il path fosse sbagliato da errore. Che ci sia quel codice sarà un requisito per continuare

require_once 'functions.php';
//come include_once ma con la stessa caratteristica di require

$dati = ['name' => 'Emanuel', 'lastname' => 'Rista'];

dd($dati);

print_r($dati);

$config = require 'config.php';
var_dump($config);