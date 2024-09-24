<?php  
    function cadenaAnalizadora($cadena){  
        $cantidad_letras = 0;  
        $letras_total = "";
        $palabra_separada[] = explode(" ", $cadena); 
        
        print_r($palabra_separada);
        for($i = 0; $i<strlen($palabra_separada); $i++){  
                $cantidad_letras++;
                $letras_total .= $palabra_separada[$i];     
                $tamaño_palabra = strlen($palabra_separada[$i]); 
                echo "Palabra: $palabra_separada[$i].  Tamaño de palabra: $tamaño_palabra."; 
            }       
        echo "Las letras que habían en esa palabra erán: $letras_total.  
        El total de palabras que habían en esa palabra era: $cantidad_letras<br>"; 
    }  
    include("analizador.view.php");

?> 