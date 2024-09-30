<?php
    function cadenaAnalizadora($cadena){  
        $cantidad_letras = 0;  
        $letras_total = "";
        $palabra_separada = explode(" ", $cadena);
        
        foreach($palabra_separada as $palabra){
                $cantidad_letras++;
                $letras_total .= $palabra;     
                $tamaño_palabra = strlen($palabra); 
                echo "Palabra: $palabra.  Tamaño de palabra: $tamaño_palabra."; 
                echo "<br>";
          }       
        echo "Las letras que habían en esa palabra erán: $letras_total (" 
        .strlen($letras_total)  ."). <br>El total de palabras que habían en esa palabra era: $cantidad_letras<br>"; 
    }  
    include("analizador.view.php");
?> 