<?php 
    function horaValida (string $hora){
        $partes = explode (":", $hora);  //separa la cadena por el carácter indicado y lo almacena en un array

  
          if (count($partes) < 3){
            return false;
        }
        else {
            $horas = intval($partes[0]);
            $minutos = intval($partes[1]);
            $segundos = intval($partes[2]);
          
          if ((24 > $horas && $horas > 0) && (60 > $minutos && $minutos > 0) && (60 > $segundos && $segundos > 0) ) 
                return true;
            else 
                return false; 
        }
    }
  
    $hora_verificable = "23:54:21";
    if (horaValida ($hora_verificable))
      echo "$hora_verificable es una hora correcta";
    else
        echo "$hora_verificable es una hora incorrecta";     

?>