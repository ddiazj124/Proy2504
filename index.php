<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        echo $miconn->host_info . "\n";
        
        
        
        /* Consultas de selección que devuelven un conjunto de resultados */
        if ($resultado = $miconn->query("SELECT * FROM persona")) {
            echo "La selección devolvió ". $resultado->num_rows." Filas";

            /* liberar el conjunto de resultados */
            $resultado->close();
        }

        ?>
        <a href="formulario.php">Formulario</a><br>
        <a href="listadoPersonas.php">Listado Personas</a><br>
        <br>
    </body>
</html>
