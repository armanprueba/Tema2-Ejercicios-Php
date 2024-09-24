<?php 
$fp = fopen("plantillas.csv", "r");
while (!feof($fp)){
    $linea[] = explode(",",fgets($fp)); //no olvidarse el array
    
    }
    
    $header = array_shift($linea);
    foreach($linea as $players)
        $lista_jugadores[] = array_combine($header, $players);
        


    $claves = array_keys($lista_jugadores);

    function ordenarAtleti($jug_atleti){
        return $jug_atleti=='Atlético de Madrid';
    }

fclose($fp); ///Cerramos el fichero
include("plantillas.view.php");
?>