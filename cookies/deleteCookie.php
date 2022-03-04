<?php
$tempo = time() - 3600; //quanti secondi sono passati dal primo gennaio 1970
//-3600, sto togliendo un'ora. Il metodo per eliminare un cookie è mettergli un'expiration date nel passato + un valore vuoto (ma non fidarsi solo di quest'ultimo)!
setcookie('testcookie', '', $tempo);
setcookie('numberOfVisits', '', $tempo);