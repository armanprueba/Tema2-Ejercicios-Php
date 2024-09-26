<?php 
$fp = fopen("casas_rurales.csv", "r");
while (!feof($fp)){
    $linea[] = explode(";",fgets($fp)); //no olvidarse el array
    
    }
    
    $header = array_shift($linea);

    

    foreach($linea as $casas){
        /*
        Hacemos esto ya que el archivo de casas rurales 
        tiene errores con la cabecera y las líneas, por lo que
        comprobamos que hacemos la comparación de count para que
        las dos líneas coincidan.
        */
        if(count($header)==count($casas))  
            $lista_viviendas[] = array_combine($header,$casas);
    } 

    function casaConTelefono($casa_rural){
        return $casa_rural["telefono"];
    }

    function casaSinTelefono($casa_rural){
        return !$casa_rural["telefono"];
    }



fclose($fp); ///Cerramos el fichero
include("CasasRuralesTelefonos.view.php");
?>