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
    /* echo "Variabili" . "\n";
    $result = 2 + 2;
    echo $result;
    //fwrite(STDOUT, 2 + 2);
    echo "Hello world" . "\n";
    $name = "Emanuel";
    file_put_contents('test.txt', $name); */

    $last_name = 'Rista';
    echo '<h1>' . $last_name . '</h1>';
    echo '<h1>$last_name</h1>';
    echo "<h1>$last_name</h1>";

    $isLoaded = true;
    if ($isLoaded) {
        echo "Arma carica";
    } else {
        echo "Arma non carica";
    }
    //valori sempre falsi in php: false, integer 0, stringa '0', float 0.0, '', [] array con zero elementi, NULL e variabili disassegnate, oggetti simpleXML creati con tag vuoti 

    $dec = 255;
    var_dump($dec);
    $dec2 = '255';
    var_dump($dec2);
    $dec3 = 255;
    var_dump($dec3 * 4);
    $octal = 0124;
    var_dump($octal);
    $hex = 0xDE;
    var_dump($hex);
    $bin = 0b1111111;
    var_dump($bin);
    $resultN = $dec / $hex + $bin;
    var_dump($resultN);
    $negative = -255;
    var_dump($negative);

    //heredoc EOD (viene parsificato), nowdoc 'EOD' (non viene interpretato)
    $accounts = [2, 3];
    $accountsNumbers['accountsnumbers'] = 3232323;
    $obj = new stdClass();
    $obj->name = 'Jim';
    $dati = <<<EOD
                Il mio cognome è $last_name<br>
                Il mio indirizzo è Via Lanzo 159/10<br>
                $accounts[0]<br>
                Account: {$accountsNumbers['accountsnumbers']}<br>
                $obj->name oppure {$obj->name}
    EOD;
    echo $dati;

    $surName = 'Emanuel';
    $accented = 'à';
    $surName[4] = 'à';
    echo $surName;
    //perchè esce questo? Perchè la a è 1 byte, mentre la à sono 2 byte, infatti:
    echo strlen($accented); // =2
    //per risolvere questo problema si usano le funzioni mb:
    echo mb_strlen($accented);

    //---convertire in stringa
    //null = ''
    //true = 1
    //false = ''
    //numeri in numeri 
    //Array
    $arr = [4.44];
    echo $arr;
    $bool = true;
    var_dump((string)$bool);
    echo 'val=' . $bool . '<br>';
    echo $surName . $accented;

    //Array
    $arr = array();
    $arr = array('red', 'green', 'blue');
    $arr[] = 'pink';
    $arr[9] = 'yellow';
    $arr[] = 'magenta';
    $arr['giallo'] = 'Amarillo';
    $arr[] = 'blue sky';
    $arr[4] = [2, 4, 44, 44];
    $arr['5'] = 'cinco'; //fa un parse e lo trasforma in un numero
    $arr['5.2'] = 'cinco'; //non fa il parse e la key rimane stringa
    $arr['giorni'] = ['lunedì', 'martedì', 'mercoledì'];
    array_push($arr['giorni'], 'giovedì');
    $arr['giallo'] = 'yellow'; //modificare valore della chiave giallo
    unset($arr['giorni']); //elimina array giorni
    unset($arr[2]); //elimina posizione 2 (blue)
    var_dump($arr);
    print_r($arr);
    echo $arr['giallo'];
    echo "<br> Valore chiave 4 terza posizione è {$arr[4][3]}";
    echo "<br> Valore chiave giorni seconda posizione è {$arr['giorni'][1]}";

    define('giallo', 4); //costante
    echo $arr[giallo];
    print_r(giallo);

    $arr2 = ['a', 'b', 'c', 'd'];
    unset($arr2[2]); //toglie il valore in posizione 2 ma non reindicizza le chiavi
    var_dump($arr2);
    $arr2 = array_values($arr2); //ritorna i valori di un array ma reindicizza le chiavi
    var_dump($arr2);

    //costanti nelle versioni php più recenti
    const PI = 3.141516; //è una costante, il valore non può cambiare
    echo PI . PHP_EOL;
    //PI = 1.718; //è una costante, quindi non si può riassegnare

    //costanti nelle versioni php più vecchie
    //define('PI', 3.1415165454, true); ma attenzione, PI è stato già definito con il metodo nuovo, da errore.
    //il terzo parametro "è case sensitive o no?" è deprecato e dalla v. 8 da errore

    if (!defined('PI'))
        define('PI', 3.1415165454); //se PI non è stata già definita allora definisci

    const PROVINCES = ['TO', 'RE'];
    define('REGIONS', ['PIE', 'LOM']);
    var_dump(REGIONS);
    var_dump(PROVINCES);



    ?>

</body>

</html>