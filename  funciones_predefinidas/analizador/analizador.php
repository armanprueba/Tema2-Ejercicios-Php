<?php
    function cadenaAnalizadora($cadena){  
        $cantidad_palabras = 0;  
        $letras_total = "";
        $palabra_separada = explode(" ", $cadena);  // Convertimos la cadena en array para poder recorrerla sin los espacios
        
        foreach($palabra_separada as $palabra){
                $cantidad_palabras++;   //Por cada palabra del vector se suma 1 al contador 
                $letras_total .= $palabra; //Juntamos todas las letras de la cadena sin espacios
                $tamaño_palabra = strlen($palabra);     
                echo "Palabra: $palabra.  Tamaño de palabra: $tamaño_palabra."; 
                echo "<br>";
          }       
        echo "Las letras que habían en esa palabra erán: $letras_total (" //Contamos con strln el número de letras sin los espacios
        .strlen($letras_total)  ."). <br>El total de palabras que habían en esa palabra era: $cantidad_palabras<br>"; 
    }  
    include("analizador.view.php");
?> 