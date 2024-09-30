<?php
    function convertirCani($cadena){  
        $cani = "";
        for($i = 0; $i<strlen($cadena); $i++){ /*Usamos strlen para poder usar la cadena como variable de longitud*/ 
            if ($i % 2 != 0) $cani .= strtoupper($cadena[$i]); 
            else $cani .= ($cadena[$i]);
        }
        return $cani;

    }  
    include("cani.view.php"); 
?>