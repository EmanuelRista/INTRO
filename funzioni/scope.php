
<?php
setcookie('TESTCOOKIE', 'Emanuel', time() + 3600);
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
$val = 'Test';

function modifyVal($val = null)
{
    global $name;
    echo $name;
    echo $GLOBALS['val'];
    echo $GLOBALS['obj']->name;
    var_dump($_COOKIE);
}
modifyVal('JANE');
