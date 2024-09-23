<?php 
    function digitos (int $num){
        $string_num = strval($num);  //pasa el entero a cadena
        return strlen($string_num);  //contamos la longitud de la cadena para saber cuántos dígitos tiene
    }
    function digitoN (int $num, int $pos){
        $string_num = strval($num);
        $string_pos = substr($string_num, $pos-1, 1);   //le resta 1 a la posición para que empieze para que empiece por la anterior 
                                                        //y devuela 1 letra (en la que está la posición original)
        return $string_pos;
    }
    function quitaPorDetras (int $num, int $cant){
        $string_num = strval($num);
        $pos_correcta = strlen($string_num) - $cant;    //Para que quite los números que queramos a la izquierda tenemos que restar 
                                                        //esa cantidad por el número de dígitos
        $string_pos = substr($string_num, 0, $pos_correcta);   //Se empieza desde la posición 0 y se cogen los números que no hemos quitado de la izquierda
        return $string_pos;
    }
    function quitaPorDelante (int $num, int $cant){
        $string_num = strval($num);
        $string_pos = substr($string_num, $cant);  //Para quitar los números que queramos a la izquierda simplemente pasamos la cantidad como posición para
                                                   // que arranque desde esa posición
        return $string_pos;
    }

    echo digitos(21);
    echo "<br>";
    echo digitoN (4834535, 2);
    echo "<br>";
    echo quitaPorDetras(458797, 4);
    echo "<br>";
    echo quitaPorDelante(458797, 4);
   
?>