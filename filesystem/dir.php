<?php
//LEGGERE UNA CARTELLA
$dir = 'docs/';
/* $d = scandir($dir);
foreach ($d as $entry) {
    if ($entry === '.' || $entry === '..') {
        continue;
    }
    var_dump(is_dir($dir . $entry));
    var_dump(is_file($dir . $entry));
    echo $entry . "<br>";
} */

//oppure (consigliato):

$di = new DirectoryIterator($dir);
foreach ($di as $entry) {
    if ($entry->getFilename() === '.' || $entry->getFilename() === '..') {
        continue;
    }
    echo $entry->getFilename();
    var_dump($entry->isDir());
    var_dump($entry->isFile());
    echo "<br>";
}

//CREARE UN FILE E SCRIVERCI DENTRO

$fileName = $dir . 'myfile.txt';

//apro un file per scriversi, se esiste cancella tutto ciò che c'è dentro e se non esiste lo creo

$hd = fopen($fileName, 'w'); //w -> scrivere
if ($hd) {
    fwrite($hd, 'Prima scrittura su file');
    fclose($hd);
} else {
    echo 'Impossibile creare file';
}

//scrivere alla fine del file

$hd = fopen($fileName, 'a'); //a -> appendere
if ($hd) {
    fwrite($hd, 'Ultima scrittura su file');
    fclose($hd);
} else {
    echo 'Impossibile scrivere alla fine del file';
}

//per leggere il file

$hd = fopen($fileName, 'r'); //r -> leggere
if ($hd) {
    $content = fread($hd, filesize($fileName)); //il secondo parametro è il numero di byte da leggere, filesize = tutto il file
    echo $content;
} else {
    echo 'Impossibile aprire file';
}

//un modo alternativo

$dir = 'docs/';
$fileName = $dir . 'myfile2.txt';

//file_put_contents($fileName, 'Primo contenuto');
//file_put_contents($fileName, 'Secondo contenuto'); //sovrascrive!
//evitare di sovrascrivere(appendere):

$content = '';

if (file_exists($fileName)) {
    $content = file_get_contents($fileName);
}

file_put_contents($fileName, $content . 'Ancora un contenuto');