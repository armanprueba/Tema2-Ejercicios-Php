<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 10px;
        }
        table{
            margin: 20px;
        }
    </style>
</head>
    <body>
        <h1>Plantilla</h1>
            <?php
            // Iniciamos la tabla
                $concat_tabla = '<table border=1>';
                $concat_tabla .= '<tr>';
                $concat_tabla .= '<th> Dorsal</th>';
                $concat_tabla .= '<th> Nombre </th>';
                $concat_tabla .= '<th> Apellidos </th>';
                $concat_tabla .= '<th> Posicion </th>';
                $concat_tabla .= '<th> Equipo </th>';
                $concat_tabla .= '</tr>';
                
                
                $lista_atleti = array_filter($lista_jugadores, "ordenarAtleti");
                // Creamos la fila de encabezados
                foreach ($lista_jugadores as $jugador) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat_tabla .= '<tr>';
                    $concat_tabla .= '<td>' . $jugador['Dorsal'] .'</td>';
                    $concat_tabla .= '<td>' . $jugador['Nombre'] .'</td>';
                    $concat_tabla .= '<td>' . $jugador['Apellidos'] .'</td>';
                    $concat_tabla .= '<td>' . $jugador['Posicion'] .'</td>';
                    $concat_tabla .= '<td>' . $jugador['Equipo'].'</td>';
                    $concat_tabla .= '</tr>';
                }
                echo $concat_tabla;
        
                //Hacemos lo mismo con el atleti
                $concat_atleti = '<table border=1>';
                $concat_atleti .= '<tr>';
                $concat_atleti .= '<th> Dorsal</th>';
                $concat_atleti .= '<th> Nombre </th>';
                $concat_atleti .= '<th> Apellidos </th>';
                $concat_atleti .= '<th> Posicion </th>';
                $concat_atleti .= '<th> Equipo </th>';
                $concat_atleti .= '</tr>';
                usort($lista_atleti, "ordenDorsalAtleti");  /* 
                                                        $atleticOrden = usort($lista_atleti, function($a, $b) 
                                                        {return $a['Dorsal'] <=> $b['Dorsal']; } 
                                                        */
                foreach ($lista_atleti as $jug_atleti) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat_atleti .= '<tr>';
                    $concat_atleti .= '<td>' . $jug_atleti['Dorsal'] .'</td>';
                    $concat_atleti .= '<td>' . $jug_atleti['Nombre'] .'</td>';
                    $concat_atleti .= '<td>' . $jug_atleti['Apellidos'] .'</td>';
                    $concat_atleti .= '<td>' . $jug_atleti['Posicion'] .'</td>';
                    $concat_atleti .= '<td>' . $jug_atleti['Equipo'].'</td>';
                    $concat_atleti .= '</tr>';
                }
                $concat_atleti .= '</table>';
                echo $concat_atleti;
            ?>
        </table>
    </body>
</html>