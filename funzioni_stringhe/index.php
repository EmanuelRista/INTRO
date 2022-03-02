<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Funzioni di Stringhe</h1>

    <ul>
        <li>strtolower</li>
        <li>strtoupper</li>
        <li>trim</li>
        <li>str_replace</li>
        <li>strstr</li>
        <li>strpos</li>
        <li>str_split</li>
        <li>explode</li>
        <li>implode</li>
        <li>stripslashes</li>
    </ul>

    <?php

    $lastName = 'Rista';
    $firstName = 'Emanuel';
    $email = ' emanuel@gmail.com ';
    $address = 'èàò'; //

    echo strtoupper($lastName) . '<br>';
    echo strtolower($lastName) . '<br>';
    $email = trim(strtolower($email)); //trim toglie gli spazi
    echo "$email" . '<br>';
    $address = str_replace('à', 'a', $address); //rimpiazza un carattere di stringa
    echo "Address = " . $address . '<br>';
    $address = str_replace(array('è', 'ò'), ['e', 'o'], $address);
    echo "Address = " . $address . '<br>';
    $atExist = strpos($email, '@'); //ti dice in quale posizione si trova @
    var_dump($atExist);
    if ($atExist) {
        echo "La chiocciola c'è<br>"; //attenzione però, se la @ fosse nella prima posizione che è 0, ritorna false perchè in php zero è sempre false
    }
    //trasformare una stringa in un array
    $str = '1,2,3,4,5,6,8,9';
    $arr = explode(',', $str); //la virgola è il separatore, può essere anche un altro carattere
    var_dump($arr);
    //trasformare un array in stringa
    $sayHi = ['H', 'e', 'l', 'l', 'o'];
    echo implode('-', $sayHi) . '<br>';
    echo join('=', $sayHi) . '<br>'; //join e implode sono la stessa cosa
    //stripslashes
    $carName = "Doblo\'";
    $carName = stripslashes($carName);
    echo $carName;
    ?>

    <h2>Funzioni di Stringhe in php8</h2>

    <?php

    $str = 'the quick browm fox jumped over the lazy dog';
    //questa stringa contiene la parola lazy?
    var_dump(str_contains(haystack: $str, needle: 'lazy'));
    var_dump(str_contains($str, 'lazy'));
    //questa stringa inizia con the?
    var_dump(str_starts_with($str, 'the'));
    //questa stringa finisce con dog?
    var_dump(str_ends_with($str, 'dog'));


    ?>

</body>

</html>