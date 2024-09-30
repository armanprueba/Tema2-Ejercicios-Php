<?php
    function cadenaPalindroma($cadena){  
        $cadena_separada = str_word_count($cadena, 1);
        $cadena_normal = "";
        $cadena_inversa = "";
        foreach($cadena_separada as $palabra){
            $cadena_normal .= $palabra;
        }          
        $cadena_normal = strtolower($cadena_normal);
        $cadena_inversa = strrev($cadena_normal);
        if ($cadena_normal === $cadena_inversa) return true;
        else return false;
    } 
    include("palindromo.view.php");
?> 

 