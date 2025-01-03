<?php
    function convertirCani($cadena){  
        $cani = "";    /*Creamos la variable donde almacenaneremos la cadena pasada a cani */
        for($i = 0; $i<strlen($cadena); $i++){ /*Usamos strlen para poder usar la cadena como variable de longitud*/ 
            if ($i % 2 != 0) $cani .= strtoupper($cadena[$i]); /*Usamos strtoupper para poner en mayuscula cualquier palabra que este en una posicion par 
                                                                y la almacenamos en la variable cani */
            else $cani .= ($cadena[$i]); /*Las palabras no pares también las almacenamos como están para que se junten con las palabras pares*/
        }
        return $cani;

    }  
    include("cani.view.php"); 
?>