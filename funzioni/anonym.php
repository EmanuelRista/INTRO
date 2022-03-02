<h1>
<?php

/* 
 FUNZIONI VARIABILI E ANONIME
 */
 
 $somma = function ($val1, $val2 ){
      echo $val1 + $val2;
 }; 
 
 function test( Closure $func){
     $func(5,5);
 }
 $arr = [2, 4, 6];
 function double(&$val){
     $val *= 2;
 };
 array_walk($arr, 'double');
 var_dump($arr);
  
  
   

?>
</h1>
