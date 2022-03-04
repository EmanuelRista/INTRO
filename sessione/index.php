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

    //differenza tra sessione e cookie:
    //sessione: i dati di $_SESSION sono disponibili fin quando l'utente chiude il browser. Una volta chiuso la sessione è terminata
    //cookie i dati di $_COOKIE sono disponibili a seconda del tempo di durata del cookie. Indipendentemente dal fatto che il browser sia aperto o no

    session_start(); //deve essere in cima, apre la sessione. A meno che non ci sia l'output buffering
    var_dump($_SESSION);
    $_SESSION['userid'] = 4;
    $_SESSION['isLogged'] = 1; //l'utente è loggato
    session_write_close(); //chiude la sessione
    ?>

</body>

</html>