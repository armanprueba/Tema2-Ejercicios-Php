<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                $concat = '<table border=1>';
                $concat_tabla = '<table border=1>';
                $concat_tabla .= '<tr>';
                $concat_tabla .= '<th> ID</th>';
                $concat_tabla .= '<th> Localidad </th>';
                $concat_tabla .= '<th> Nombre </th>';
                $concat_tabla .= '<th> Teléfono </th>';
                $concat_tabla .= '</tr>';
                $concat_tabla .= '</table>';
                echo $concat_tabla;

                $casa_telefono = array_filter($lista_viviendas, "casaConTelefono");
                $casa_sin_telefono = count(array_filter($lista_viviendas, "casaSinTelefono"));
                
                foreach ($casa_telefono as $casa) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat .= '<tr>';
                    $concat .= '<td>' . $casa['id'] .'</td>';
                    $concat .= '<td>' . $casa['localidad'] .'</td>';
                    $concat .= '<td>' . $casa['nombre'] .'</td>';
                    $concat .= '<td>' . $casa['telefono'] .'</td>';
                    $concat .= '</tr>';
                }
                 $concat.="</table>";
                echo $concat;

                echo "<br><br>";

                echo "El número de casas sin teléfono es: $casa_sin_telefono";

            ?>
</body>
</html>