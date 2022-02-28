<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<h1>Verifica variabili</h1>";

    //isset - Verifica se una variaible è impostata e non ha il valore null
    $name = null; //è false se null o non dichiarata
    if (isset($name)) {
        echo "name esiste";
    } else {
        echo "name non esiste";
    }

    //empty - Verifica se una variabile è vuota
    $lastname = 0; // è true se 0, se null, se false, se [], se '', se '0', o non dichiarata
    if (empty($lastname)) {
        echo "lastname è vuota ($lastname)";
    } else {
        echo "lastname non è vuota ed è $lastname";
    }

    //is_null - verifica se la variabile è null

    $age = null;
    if (is_null($age)) {
        echo "la variabile age è null";
    } else {
        echo "la variabile age non è null";
    }

    ?>

</body>

</html>