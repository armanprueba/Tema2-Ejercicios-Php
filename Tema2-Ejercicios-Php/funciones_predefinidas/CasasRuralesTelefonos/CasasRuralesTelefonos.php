<?php 
$fp = fopen("casas_rurales.csv", "r");
while (!feof($fp)){ //Hacemos la condición de que se haga mientras haya fichero
    $linea[] = explode(";",fgets($fp)); //no olvidarse el array
                                        //Lo almacenamos por el separador punto y coma
    }  
   
    $header = array_shift($linea); //Guardamos la primera línea como header
    
    foreach($linea as $casas){
        /*
        Hacemos esto ya que el archivo de casas rurales 
        tiene errores con la cabecera y las líneas, por lo que
        comprobamos que hacemos la comparación de count para que
        las dos líneas coincidan.
        */
        if(count($header)==count($casas))  
            $lista_viviendas[] = array_combine($header,$casas); //combinamos cada columna del header con el valor respectivo de los jugadores de esa fila
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