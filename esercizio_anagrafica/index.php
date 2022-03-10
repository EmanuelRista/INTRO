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

    <h3>Esercizio Anagrafica</h3>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="reset" class="btn btn-secondary" value="cancella">
    </form>

    <?php
    echo '<br><br>';

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $people = new stdClass();
    $people->name = $name;
    $people->lastname = $lastname;
    $people->email = $email;

    var_dump($people);

    echo $people->email;


    ?>

</body>

</html>