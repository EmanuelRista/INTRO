<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Esercizio oggetti</h2>

    <?php

    $oggetto = new stdClass();

    $oggetto->persone = array();
    $oggetto->eta = array(10, 15, 20, 25, 30);

    for ($i = 0; $i < 5; $i++) {
        array_push($oggetto->persone, "Persona $i");
        echo $oggetto->persone[$i] . ' ha ' . $oggetto->eta[$i] . ' anni<br>';
    }

    /*     print_r($oggetto->persone);
    echo '<br>';
    print_r($oggetto); */


    //creare un form, invio nome di persona, inserisco dati dentro un oggetto, stampa oggetto



    ?>

</body>

</html>