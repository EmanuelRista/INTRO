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
    echo '<h1>Struttura di controllo</h1>';
    //if-else
    //switch-case
    //MATCH - solo da php 8

    /*     $money = '3';
    match ($money) {
        1 > 2 => print("E' false"),
        0 => print('Non hai soldi false <br>'),
        3, 4 => print('Hai 3 o 4')
        default => print('nessuno dei valori')
    } */

    //WHILE e DO WHILE

    $i = 0;
    /*     while ($i <= 10) { //finchè è così
        echo $i . '<br>'; //fai questo
        $i++;
    } */
    /*     do { //fai questo almeno una volta
        echo $i . '<br';
    } while ($i <= 10); */
    echo '<ul>';
    $arr = ['red', 'blue', 'green', 'yellow'];
    $total = count($arr); //ne conta 4
    while ($i < $total) { //< e non <= perchè count ne conta 4 ma yellow è in posizione 3, si parte da 0
        echo '<li>' . $arr[$i] . '</li>';
        $i++;
    }
    echo '</ul>';

    //ciclo for
    $arr = ['Cina', 'USA', 'Francia', 'Spagna', 'Italia', 'Israele'];
    echo '<ul>';
    for ($i = 0, $tot = count($arr); $i < $tot; $i++) {
        /* if ($i > 2) {
            break;
        } */ //dalla posizione maggiore di 2 non mostrare più
        if ($arr[$i] === 'Italia') {
            continue;
        } //salta al prossimo giro del ciclo
        echo "<li>$arr[$i]</li>";
    }
    echo '</ul>';

    //cicli for annidati
    echo '<table border=1 cellpadding = 10>';
    for ($i = 1; $i < 4; $i++) { //per ognuna delle 3 colonne
        echo '<tr>';
        for ($j = 1; $j < 5; $j++) { //4 colonne
            echo '<td>';
            echo 'riga:' . $i . ' colonna: ' . $j;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    //ciclo foreach
    $arr = ['Paolo', 'Marco', 'Andrea', 'Pio'];
    foreach ($arr as $key => $value) {
        echo "$key $value <br>";
    }
    $arr2 = ['Cliente1' => 'Paolo', 'Cliente2' => 'Marco', 'Cliente3' => 'Andrea', 'Cliente4' => 'Pio'];
    foreach ($arr2 as $key => $value) {
        echo "$key $value <br>";
    }
    var_dump($arr2);
    $arr3 = ['Cliente1' => 'Paolo', 'Cliente2' => 'Marco', 'Cliente3' => 'Andrea', 'Cliente4' => 'Pio'];
    foreach ($arr3 as $key => $value) {
        $value = strtoupper($value);
        echo "$key -> $value <br>";
    }
    var_dump($arr3);

    ?>

</body>

</html>