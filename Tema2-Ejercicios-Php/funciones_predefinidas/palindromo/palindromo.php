<?php
    function cadenaPalindroma($cadena){  
        $cadena_separada = str_word_count($cadena, 1);
        $cadena_normal = "";
        $cadena_inversa = "";
        foreach($cadena_separada as $palabra){
            $cadena_normal .= $palabra; 
            /*recoremos la cadena convertida en array para conseguir almacenar 
            la cadena sin espacios en variable cadena normal*/    
        }          
        $cadena_normal = strtolower($cadena_normal); /*Lo pasamos a minusculas para que haga bien la comparación de palabras iguales */
        $cadena_inversa = strrev($cadena_normal);/*Invertimos la cadena y la almacenamos en la variable con la que veremos si es palindroma */
        if ($cadena_normal === $cadena_inversa) return true; /* Hacemos la comprobación de si es palíndroma */
        else return false;
    } 
    include("palindromo.view.php");
?> 

 