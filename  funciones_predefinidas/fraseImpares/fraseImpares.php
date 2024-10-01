<?php
    function cadenaImpar($cadena){  
        $cadenaimpar = "";  
        for($i = 0; $i<strlen($cadena); $i++){ /*Usamos strlen para poder usar la cadena como variable de longitud*/ 
                if ($i % 2 != 0){   /* Calculamos las posiciones impares del vector*/
                    $cadenaimpar .= $cadena[$i];  /*Usamos la autococantenación para formar la cadena impar*/ 
                }  
            }  
        return $cadenaimpar;         
    } 
    include("fraseImpares.view.php"); 

?> 

 