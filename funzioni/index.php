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
    $result = test();
    var_dump($result);
    function test()
    {
        echo "funzione chiamata<br>";
        return [3, 5, 6, 7];
    }

    function summ($val1, $val2, $val3 = 4) //val3 = 4 è un valore di default, se quel parametro non viene passato conterà quello. Deve essere sempre l'ultimo/i a destra
    {
        return $val1 + $val2 + $val3;
    }
    $result = summ(2, 5); //una stirnga tipo 'sdsd' php la conta come 0
    var_dump($result);

    function summVar()
    {
        if (!func_num_args()) { //conta il numero di argomenti
            echo "non sono stati passati argomenti";
        } else {
            echo "sono stati passati " . func_num_args() . " argomenti";
        }
        return array_sum(func_get_args()); //array_sum, fa la somma Restituisce un array che comprende l'elenco di argomenti di una funzione
    }

    $result = summVar(); //summVar(2, 5, 6, 11)
    var_dump($result);
    /*
    function cicleSumVar()
    {
        $result = 0;
        foreach (func_get_args() as $val) {
            $result += $val;
        }
        return $result;
    }
    $result = cicleSumVar(2, 5, 6, 11);
    var_dump($result); */

    function newSumVar()
    {
        $result = 0;
        $total = func_num_args();
        for ($tot = 0; $tot < $total; $tot++) { //cicla finchè minore del numero degli argomenti
            $result += func_get_arg($tot); //result = result + argomento. Ritorna un elemento dalla lista di argomenti 
        }
        return $result;
    }

    $result = newSumVar(2, 2, 3);
    echo 'newSumVar è' . ' ' . $result;

    $arr = array(2, 3, 4);
    echo 'la somma di arr è ' .  array_sum($arr) . '<br>';

    function mathOp($op, ...$args) //... spread operator da v. 7 in su. Sostituisce func_get_args(). "Mette qui dentro tutti gli altri argomenti"
    //Quando ... è come parametro fa compattare gli argomenti che vengono passati
    {

        if (empty($args)) {
            return null; //se non ci sono argomenti ritorna null
        }
        $ret = 0;
        switch ($op) {
            case '+': //se l'operatore è +
                $ret = array_sum($args); //allora ret = somma degli argomenti
                break;
            case '-':
                $ret = $args[0];
                $vals = array_slice($args, 1); //prendi gli elementi dell'array args dalla posizione 1 in poi
                foreach ($vals as $val) {
                    $ret -= $val;
                }
                break;
            case '/':
                $ret = $args[0];
                $vals = array_slice($args, 1);
                foreach ($vals as $val) {
                    $ret /= $val;
                }
                break;
            case '*':
                $ret = 1;
                foreach ($args as $arg) {
                    $ret *= $arg;
                }
                break;
            default:
                $ret = null;
        }
        return $ret;
    }
    $arrayVals = [2, 5, 6, 8];
    var_dump(mathOp('+', ...$arrayVals)); //quando invece la funzione viene chiamata ... scompone questo array nei valori singoli e li passa ad uno ad uno come argomenti 

    //funzioni anonime e variabili
    $somma = function ($val1, $val2) { //funzione anonima
        echo $val1 + $val2;
    };
    $somma(2, 3); //attenzione, con funzione variabile non è possibile richiamare la funzione prima di averla definita, cosa che accade invece per le funzioni normali

    //arrow function da php 7.4

    $arr = [
        [
            'name' => 'Emanuel',
            'age' => 33,
            'city' => 'Torino'
        ]
    ];

    $arrnew = array_map(function ($val) {
        $tmp = [];
        foreach ($val as $k => $v) {
            $tmp[$k] = strtoupper($v);
        }
    }, $arr);

    var_dump($arrnew);

    $arr2 = [
        'name' => 'Emanuel',
        'age' => 33,
        'city' => 'Torino'
    ];

    $arrResult = array_map(fn ($v) => strtoupper($v), $arr2);
    print_r($arrResult);

    //recupero funzioni anonime

    $nome = "Emanuel";
    /*    $anonima = function ($nomeIndicato) {
        echo "<br>Ciao io sono $nomeIndicato";
    };
    $nome = "Gianluca";
    $anonima($nome);
 */
    $closure = function () use ($nome) {
        echo "Ciao da $nome";
    };
    $nome = "Luisa";
    $closure();

    //la differenza tra una normale funzione anonima e una closure:
    //la closure utilizza il valore della variabile/parametro così com'era quando lo closure
    //è stata definita. E' una chiusura dallo scope globale e si entra in uno scope locale interno
    //possono essere utilizzate come funzioni di callback

    $arr = [10, 4, 12];
    $per = 3;
    array_walk($arr, function ($elemento) use ($per) {
        echo $elemento * $per . "<br>";
    });

    $anonima = function () {
        echo 1;
    };
    $closure = function () use ($a) {
        echo 2;
    };

    var_dump($anonima, $closure);

    /*  //passare parametri per riferimento e per valore

    //array
    $data = [
        'name' => 'John',
        'lastname' => 'Doe'
    ];
    //object
    $obj = new stdClass();
    $obj->name = 'John';
    $obj->lastname = 'doe';
    //Scalare
    $name = 'John Doe';

    function modifyVal($val)
    {
        if (is_object($val)) {
            $val->name = 'Emanuel';
        } else if (is_array($val)) {
            $val['name'] = 'Emanuel';
        } else {
            $val = 'Emanuel';
        }
        echo "<h1>Interno funzione</h1>";
        var_dump($val);
    }
    echo "<h1>Prima della funzione</h1>";
    var_dump($name);
    modifyVal($name);
    echo "<h1>Dopo la funzione</h1>";
    var_dump($name); */

    //SCOPE DELLE VARIABILI, LOCALI E GLOBALI
    //array
    $data = [
        'name' => 'John',
        'lastname' => 'Doe'
    ];
    //object
    $obj = new stdClass();
    $obj->name = 'John';
    $obj->lastname = 'doe';
    //Scalare
    $name = 'John Doe';
    $val = 'Test';

    function modifyVal($val = null)
    {
        echo 'Dentro la funzione';
        global $obj; //$data non lo vede, perchè dentro la funzione è uno scope locale. Uno dei modi per risolvere è usare GLOBAL
        $obj->name = "Emanuel"; //se modifico la variabile all'interno della funzione sto modificando anche quella globale
        var_dump($obj);
        global $data;
        $data['name'] = 'Emanuel';
        var_dump($data);
        //global $name;
        $GLOBALS['name'] = 'Emanuel';
        //var_dump($name);
        //global $val; //quando scrivo global qui sto facendo riferimento alla variabile globale, pertanto 'jane' viene ignorato
        var_dump($val);
    }
    modifyVal();
    echo 'Fuori dalla funzione:';
    var_dump($obj, $data, $name);
    modifyVal('Jane');

    var_dump($GLOBALS);

    //tipi di argomenti e tipo di ritorno

    function somma(int $a, int $b): int
    { //:int = tipo di ritorno
        return (string)($a + $b); //ce lo trasforma comunque in int. Ma se non volessimo questa conversione automatica? in testa al php: declare(strict_types=1);
    }
    echo somma('5', 5); //'5' php fa il cast

    //se volessi passare parametri null? basta mettere un ?. Esempio (?int $a, ?int $b)

    //UNION TYPES da php 8+
    function somma2(int|float $a, int|float $b, callable $c): int|float
    {
        $c();
        return $a + $b;
    }
    $test = function () {
        echo "test variabile<br>";
    };
    echo somma2(5.5, 5.6, $test);

    //NAMED ARGUMENTS

    echo somma2(b: 5.6, a: 10, c: function () {
        echo "I am a callable";
    });





    ?>

</body>

</html>