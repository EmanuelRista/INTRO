<?php

$persone = array("Maria", "Pippo", "Pluto", "Fabrizio");
$eta = array(5, 10, 35, 70);

for ($x = 0; $x < count($persone); $x++) {
    echo ("$persone[$x] ha $eta[$x] anni<br>");
}