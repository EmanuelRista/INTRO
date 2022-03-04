<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <h2>Variabili superglobali</h2>

    <p>Per esempio usare URL: http://localhost/INTRO/superglobals/index.php?username=Emanuel&lastname=Rista</p>

    <?php

    //var_dump($_SERVER);
    var_dump($_SERVER['REMOTE_ADDR']);
    var_dump($_SERVER['HTTP_USER_AGENT']);
    var_dump($_SERVER['REQUEST_URI']);

    //get via url
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //$_GET['username'] = null;
    /*     if (isset($_GET['username'])) {
        var_dump($_GET);
    }
    if (array_key_exists('username', $_GET)) { //qui non importa se il valore è null, perchè è se esiste la chiave, non il valore
        var_dump($_GET);
    } */
    //get via form
    ?>
    <h3>Form con GET</h3>
    <div class="container">
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="name">
                    Name
                </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">
                    Lastname
                </label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    Email
                </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">
                    SAVE
                </button>
                <input type="reset" class="btn btn-success" onclick="location.href='index.php'" value="RESET" />
                <a href="index.php?username=Test&lastname=Testlastname" class="btn btn-secondary">Invia test</a>
            </div>
        </form>
    </div>
    <?php echo 'get:';
    var_dump($_GET); ?>
    <h3>Form con POST</h3>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="name">
                    Name
                </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">
                    Lastname
                </label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    Email
                </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">
                    SAVE
                </button>
                <input type="reset" class="btn btn-success" onclick="location.href='index.php'" value="RESET" />
                <a href="index.php?username=Test&lastname=Testlastname" class="btn btn-secondary">Invia test</a>
            </div>
        </form>
    </div>
    <?php echo 'post:';
    var_dump($_POST); ?>
    <?php
    echo 'request:';
    var_dump($_REQUEST); //contiene GET, POST e COOKIE. La priorità da destra a sinistra (C, P, G)

    //$GLOBALS contiene tutte le variabili dello scope globale (GET, POST, COOKIE ECC...)
    // var_dump($GLOBALS);
    $testGlobal = 'questa è una variabile globale<br>';
    var_dump($GLOBALS['testGlobal']);
    //quindi quando sono in una funzione e ho bisogno di accedere ad una variabile globale posso utilizzare questo array $GLOBALS
    function test()
    {
        echo $GLOBALS['testGlobal'];
    }
    test();
    //un altro modo:
    function test2()
    {
        global $testGlobal;
        echo $testGlobal;
    }
    test2();

    //differenza tra sessione e cookie:
    //sessione: i dati di $_SESSION sono disponibili fin quando l'utente chiude il browser. Una volta chiuso la sessione è terminata
    //cookie i dati di $_COOKIE sono disponibili a seconda del tempo di durata del cookie. Indipendentemente dal fatto che il browser sia aperto o no
    ?>

    <!-- $_FILES -->
    <form enctype="multipart/form-data" action="index.php" method="POST">
        <div class="form-group">
            <label for="campo1">Campo 1</label>
            <input type="text" class="form-control" id="Campo1" name="campo1">
        </div>
        <div class="form-group">
            <label for="campo2">Campo 2</label>
            <input type="text" class="form-control" id="Campo2" name="campo2">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control"
                onchange="document.getElementById('imgavatar').src=window.URL.createObjectURL(this.files[0])"
                id="avatar" name="avatar">
            <img src="" id="imgavatar" width="120">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">SAVE</button>
            <input type="reset" onclick="location.href='index.php'" class="btn btn-success" value="RESET">
        </div>
    </form>
    <?php

    if (!empty($_FILES)) {
        var_dump($_FILES);
    }

    if (!empty($_FILES)) {
        $destination = realpath(dirname(__FILE__) . '/images');

        foreach ($_FILES as $k => $file) {
            echo "$k<br>";
            $fileName = basename($file['name']);
            if (is_uploaded_file($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {
                $res = move_uploaded_file($file['tmp_name'], $destination . '/' . $fileName);
                if ($res) {
                    echo "file $fileName è stato caricato<br>";
                } else {
                    echo "file $fileName non è stato caricato<br>";
                }
            }
        }
    }

    ?>


</body>

</html>