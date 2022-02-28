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

    echo '<h1>Operatori</h1>';
    //MATEMATICI
    $a = 5;
    $b = 8;
    $c = $a + $b;
    //echo $c;
    $d = $a + $b * 5;
    //echo $c;
    $e = ($a + $b) * 5;
    //echo $c;
    $f = 25 % 8; //dimmi quanto è il resto di questo divisione
    echo $d;
    var_dump($d);
    $g = 2 ** 4; //2 alla quarta potenza
    $g = pow(2, 4); //modo vecchio
    var_dump($g);
    $sqroot = sqrt(16); //radice quadrata
    var_dump($sqroot);

    //DI CONFRONTO
    $a = null; //'1'
    $b = 0; //1 - /'0' == e === false
    $c = $a == $b; //uguale - != diverso
    $d = $a === $b; //identico - !==strettamente diverso
    var_dump($a, $b, $c, $d);
    $price = 0;
    if ($price !== null) {
        echo "prezzo aggiornato";
    } else {
        echo "prezzo non aggiornato";
    }

    /*  Comparaison before PHP8 | After PHP 8
    --------------------------------------
    0 == "0"      true | true
    0 == "0.0"    true | true
    0 == "foo"    true | false
    0 == ""       true | false 
    42 == "  42"  true | true
    42 == "42foo" true | false */

    //NULL COALESCING
    //Utile anche per dare un valore di default se il valore è null
    $result = null ?? null ?? 3; //il primo che non sia null, possono essere variabili
    var_dump($result);

    $arr = [
        'name' => 'Emanuel',
        'city' => 'Torino',
        'lastName' => null
    ];
    $lastName = $arr['lastName'] ?? 'N/A';
    $arr['lastName'] ??= 'N/A'; //metti lo stesso valore che c'è in lastname, ma se non c'è metti null. Solo da v. 7.4+
    echo $lastName;
    echo $arr['lastName'];

    //OPERATORE TERNARIO
    //come if else ma per cose brevi
    $val1 = 0;
    $val2 = null;
    $ternary = ($val1 === $val2) ? "sono uguale" : "sono diversi"; //se -condizione- allora fai questo, diversamente fai quest'altro
    echo $ternary;

    //OPERATORE ESPONENZIALE
    $res = pow(2, 6); //modo vecchio
    $res == 2 ** 6; //modo nuovo
    echo $res;
    $result = 2 ** 3 ** 2; //viene 512 perchè la precedenza è a destra (3 al quadrato = 9, quindi 2 elevato 9)
    echo $result;

    ?>

</body>

</html>