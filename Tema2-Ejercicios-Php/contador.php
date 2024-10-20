
<?php 
    function mifuncion($a, $b){
        if ($a<$b){
        for($a; $a < $b; $a++){
            echo "$a,";
        }
        echo $b;
        }
        elseif ($b<$a){
            for($b; $b < $a; $b++){
                echo "$b,";
            }
            echo $a;
            }
    }

    mifuncion(20, 10);

?>
