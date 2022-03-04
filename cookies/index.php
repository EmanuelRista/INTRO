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
    $time = time() + 3600;
    if (!isset($_COOKIE['numberOfVisits'])) { //se il cookie number of visits non è settato
        setcookie('numberOfVisits', 1, $time); //allora va settato con valore 1
    } else { //se è già settato
        $total = $_COOKIE['numberOfVisits'] + 1; //la variabile total è uguale al valore di numberOfVisits + 1
        setcookie('numberOfVisits', $total); //quindi setta il valore di number of visits aumentato
    }

    var_dump($_COOKIE['numberOfVisits']); //la prima volta, quando viene settato, non c'è il cookie perchè lo stiamo inviando. E' dalla volta dopo che ce lo ritorna

    //se non si mette il tempo = dura finchè non si chiude il browser

    ?>

</body>

</html>