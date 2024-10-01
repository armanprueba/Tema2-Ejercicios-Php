<?php 
$fp = fopen("plantillas.csv", "r"); 
while (!feof($fp)){ //Hacemos la condición de que se haga mientras haya fichero
    $linea[] = explode(",",fgets($fp)); //no olvidarse el array
                                        //Lo almacenamos por el separador coma
    
    }
    
    $header = array_shift($linea); //Guardamos la primera línea como header
    foreach($linea as $players)
        $lista_jugadores[] = array_combine($header, $players);  //combinamos cada columna del header con el valor respectivo de los jugadores de esa fila
    

    function ordenarAtleti($jug_atleti){
        return $jug_atleti["Equipo"] === 'Atlético de Madrid';
    }

    function ordenDorsalAtleti($a, $b){   /* usa el operador nave espacial para ordenar el array de menor a mayor 
                                            según el número de dorsal*/
        return $a['Dorsal'] <=> $b['Dorsal'];
    }


fclose($fp); ///Cerramos el fichero
include("plantillas.view.php");
?>