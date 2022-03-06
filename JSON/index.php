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

    $user = new stdClass();
    $user->name = 'Emanuel';
    $user->lastname = 'Rista';
    $user->age = '33';
    $user->hobbies = ['programming', 'travelling', 'cooking'];
    $user->isAvailable = false;
    $user->money = null;

    echo json_encode($user);
    //decodificare: json_decode;


    ?>

</body>

</html>