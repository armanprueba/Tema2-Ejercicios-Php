<html>
    <body>
        <h1>Plantilla</h1>
            <?php
                $concat = '<table border=1>';
                $concat_tabla = '<table border=1>';
                $concat_tabla .= '<tr>';
                $concat_tabla .= '<th> Dorsal</th>';
                $concat_tabla .= '<th> Nombre </th>';
                $concat_tabla .= '<th> Apellidos </th>';
                $concat_tabla .= '<th> Posicion </th>';
                $concat_tabla .= '<th> Equipo </th>';
                $concat_tabla .= '</tr>';
                $concat_tabla .= '</table>';
                echo $concat_tabla;
                
                $lista_atleti = array_filter($lista_jugadores, "ordenarAtleti");
                foreach ($lista_jugadores as $jugador) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat .= '<tr>';
                    $concat .= '<td>' . $jugador['Dorsal'] .'</td>';
                    $concat .= '<td>' . $jugador['Nombre'] .'</td>';
                    $concat .= '<td>' . $jugador['Apellidos'] .'</td>';
                    $concat .= '<td>' . $jugador['Posicion'] .'</td>';
                    $concat .= '<td>' . $jugador['Equipo'].'</td>';
                    $concat .= '</tr>';
                }
               
                echo $concat;
                
                echo $concat_atleti= '<table border=1>';
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
                echo "<br><br>";
                echo $concat_atleti;
            ?>
        </table>
    </body>
</html>