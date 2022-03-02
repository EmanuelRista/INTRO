<?php
declare(strict_types=1);
?>
<h1>
    <?php
/**
 * <h1>Dichiarazione di tipo
 <h2>Tipi parametri </h2>
 * <ul>
 * <li> CLASSI, INTERFACE, callable, array, string, int, bool,float</li>
 * </ul>
 * declare(strict_types=1);
 */
   class B {
       
   }
   function test(){
      echo "test<br>"; 
   }
    function somma(int $a, int $b, callable $c) : int {
        $c();
    return $a + $b;
    }
 $test = function(){
      echo "test variabile<br>"; 
 };
    echo somma(5,5, $test);

?>
</h1>