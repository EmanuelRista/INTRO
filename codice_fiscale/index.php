<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codice fiscale</title>
</head>

<body>

    <form action="index.php" method="POST">
        <h2>Controllo del codice fiscale</h2>
        <p>
            <input type="text" size="16" maxlength="16" name="codice"> Inserire qui il codice fiscale<br>
            <input type="submit" value="CHIUDI">
            <input type="reset" value="cancella">
    </form>

    <?php

    $codice = $_POST['codice'];

    $numberCharacters =  strlen($codice);
    var_dump($numberCharacters);

    if ($numberCharacters === 16) {
        echo 'Il codice ' . $codice . ' è valido';
    } else {
        echo 'Il codice non è valido';
    }


    ?>

</body>

</html>