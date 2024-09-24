<?php

    //Array que contiene nuestros datos, imaginate que es una base de datos o similar...
    $data = [
        [
            'name' => 'Leire',
            'surname' => 'Bravo',
            'note' => 5.5,
        ],
        [
            'name' => 'Ainara',
            'surname' => 'Feijoo',
            'note' => 6.5,
        ],
        [
            'name' => 'Nancy',
            'surname' => 'Tomas',
            'note' => 4.5,
        ],
        
    ];
?>

<html>
    <body>
        <h1>Plantilla</h1>
        <table border="1">
            <tr>
                <th>Dorsal</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Posicion</th>
                <th>Equipo</th>
            </tr>

            <?php

                $concat = '';

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
            ?>

        </table>
    </body>
</html>