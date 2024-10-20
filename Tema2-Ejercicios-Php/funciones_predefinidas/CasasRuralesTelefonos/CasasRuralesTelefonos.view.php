<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasasRuralesTelefonos.view</title>
</head>
<body>
<?php           
                // Iniciamos la tabla
                $concat_tabla = '<table border=1>';
                
                // Creamos la fila de encabezados
                $concat_tabla .= '<tr>';
                $concat_tabla .= '<th> ID</th>';
                $concat_tabla .= '<th> Localidad </th>';
                $concat_tabla .= '<th> Nombre </th>';
                $concat_tabla .= '<th> Teléfono </th>';
                $concat_tabla .= '</tr>';

                // Añadimos la fila con los datos
                $casa_telefono = array_filter($lista_viviendas, "casaConTelefono");
                $casa_sin_telefono = count(array_filter($lista_viviendas, "casaSinTelefono"));
                
                foreach ($casa_telefono as $casa) {

                    //concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat_tabla .= '<tr>';
                    $concat_tabla .= '<td>' . $casa['id'] .'</td>';
                    $concat_tabla .= '<td>' . $casa['localidad'] .'</td>';
                    $concat_tabla .= '<td>' . $casa['nombre'] .'</td>';
                    $concat_tabla .= '<td>' . $casa['telefono'] .'</td>';
                    $concat_tabla .= '</tr>';
                }
                 $concat_tabla.="</table>";

                echo $concat_tabla;

                echo "<br><br>";

                echo "El número de casas descartadas por no tener teléfono son: $casa_sin_telefono";

            ?>
</body>
</html>