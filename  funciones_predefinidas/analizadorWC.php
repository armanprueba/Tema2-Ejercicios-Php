<?php  
    function cadenaAnalizadora($cadena){  
        $letras_total = "";                                              
        $cantidad_palabras  = str_word_count($cadena, 0); //0: Devuelve el número de palabras encontradas
                                                            //1: Devuelve un array con todas las palabras encontradas en la cadena. 
        $palabra_separada = str_word_count($cadena, 2); //2: Devuelve un array asociativo donde las claves son las posiciones de inicio de cada palabra y los valores son las palabras. 
    
        foreach($palabra_separada as $palabra){  //Hago un foreach ya que es un array asociativo y no puedo recorrerlo por los indices
                $tamaño_palabra = strlen($palabra);
                $letras_total .= $palabra;
                echo "Palabra: $palabra.  Tamaño de palabra: $tamaño_palabra.<br>"; 
            }      
        $letras = strlen($letras_total);
        echo "<br><br>";
        echo "El total de letras que había en esa palabra era: $letras<br> y la de palabras era: $cantidad_palabras"; 
    }  
    include("analizadorWC.view.php"); 
?> 