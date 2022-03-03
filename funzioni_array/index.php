<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Funzioni di Array</h1>
    <ul>
        <li>array_pop(): toglie ultimo elemento e lo ritorna</li>
        <li>array_shift: toglie primo elemento e lo ritorna</li>
        <li>array_push: aggiunge un elemento alla fine dell'array</li>
        <li>array_unshift: aggiunge elementi all'inizio di un array</li>
        <li>sort: ordina un array e rigenera le chiavi</li>
        <li>asort: ordina array mantenendo le chiavi</li>
        <li>array_map: ritorna applica funzione ad ogni elemento e ritorna un nuovo array con elementi modificati</li>
        <li>array_walk: applica funzione ad ogni membro dell'array</li>
    </ul>

    <?php

    $colors = ['blue', 'red', 'green'];
    var_dump(array_pop($colors));
    echo (array_pop($colors));
    var_dump($colors);

    $colors = ['blue', 'red', 'green'];
    var_dump(array_shift($colors));

    $colors = ['blue', 'red', 'green'];
    var_dump(array_push($colors, 'pink'));
    var_dump($colors);

    $colors = ['blue', 'red', 'green'];
    var_dump(array_unshift($colors, 'black'));
    var_dump($colors);

    $images = [3, 2, 1, 6, 5, 4, 9, 8, 7];
    sort($images);
    var_dump($images);

    $images = [3, 2, 1, 6, 5, 4, 9, 8, 7];
    asort($images);
    var_dump($images);

    $words = ['red' => 'rosso', 'white' => 'bianco'];
    array_walk($words, function (&$val, $k) {
        $val = strtoupper($val);
    });
    var_dump($words);

    $words = ['red' => 'rosso', 'white' => 'bianco'];
    $initial = array_map(function ($v) {
        return substr($v, 0, 1);
    }, $words);
    var_dump($initial);
    var_dump($words);

    //destrutturazione asimmetrica - ovvero trasformare elementi di array in variabili normali
    //prima di v.7
    $arr = [1, 2, 3];
    list($a, $b, $c) = $arr;
    var_dump($a, $b, $c);

    $userData = ['name' => 'Emanuel', 'lastName' => 'Rista'];
    list('name' => $name, 'lastName' => $lastName) = $userData;
    var_dump($name, $lastName);
    //dalle v.7 sintassi semplificata
    [$a, $b, $c] = $arr; //list non è più necessario



    ?>

</body>

</html>