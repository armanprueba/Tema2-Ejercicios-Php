<?php
    function numeroMayor() {
        if (func_num_args() == 0) {
            return false;
        }else{
            $maxnumero = func_get_arg(0);
            for ($i=0; $i<func_num_args(); $i++){
                if (func_get_arg($i)>$maxnumero) $maxnumero = func_get_arg($i);
            }
            return $maxnumero;
        }
    }
    $numeroMayor = numeroMayor(4,2,3,9,34,1);
    echo "El número más grande pasado a la función es: $numeroMayor";


?>