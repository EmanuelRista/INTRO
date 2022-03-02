<h1>
    <?php

    /* 
 *  function mathOp ($op , ...$args){
       $res =0;
       switch ($op){
           
           case '+':
              $res = array_sum($args);
              break;
          
           case '-':
               
           $res = $args[0];
           $vals = array_slice($args,1);
           foreach ($vals as $val){
               $res -= $val;
           }
               break;
               
                case '*':
               $res = 1;
          
           foreach ($args as $val){
               $res *= $val;
           }
               break;
               
                 case '/':
               $res = $args[0];
           $vals = array_slice($args,1);
          
           foreach ($vals as $val){
               $res /= $val;
           }
               break;
       }
       return $res;
   }
  echo mathOp('/', 3,4,5,3);
 */


    function mathOp($op, ...$args)
    {

        if (empty($args)) {
            return null;
        }
        $ret = 0;
        switch ($op) {

            case '+':
                $ret = array_sum($args);
                break;

            case '*':
                $ret = 1;
                foreach ($args as $arg) {
                    $ret *= $arg;
                }
                break;

            case '-':
                $ret = $args[0];
                $vals = array_slice($args, 1);
                foreach ($vals as $val) {
                    $ret -= $val;
                }
                break;
            case '/':
                $ret = $args[0];
                $vals = array_slice($args, 1);
                foreach ($vals as $val) {
                    $ret /= $val;
                }
                break;

            default:
                $ret = null;
        }
        return $ret;
    }
    $vals = [2, 5, 6, 8];
    var_dump(mathOp('*', ...$vals));
    ?>
</h1>