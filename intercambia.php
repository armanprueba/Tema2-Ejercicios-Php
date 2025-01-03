<?php 
        function funcionReferencia (&$a, &$b){
            $copia = $a;
            $a = $b;
            $b = $copia;
        }

        $numero1 = 3;
        $numero2 = 6;

        echo "Antes de llamar a la función el número 1 vale: $numero1 y el número 2: $numero2 <br>";
        funcionReferencia ($numero1, $numero2);
        echo "Después de llamar a la función el número 1 vale: $numero1 y el número 2: $numero2 <br>";
        

?>