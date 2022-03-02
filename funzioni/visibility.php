<?php
// By Reference e ByVal
//array
$data = [
    'name' => ' John',
    'lastname' => 'Dow'
];
//object
$obj = new stdClass();
$obj->name = 'John';
$obj->lastname = ' dow';

// Scalar
$name = 'John Dow';

function modifyVal(&$val)
{

    if (is_object($val)) {
        $val->name = 'Emanuel';
    } else if (is_array($val)) {
        $val['name']  = 'Emanuel';
    } else {
        $val = 'Emanuel';
    }
    echo "<h1>Interno funzione</h1>";
    var_dump($val);
}
var_dump($data);
modifyVal($data);
echo "<h1>Dopo funzione</h1>";
var_dump($data);
