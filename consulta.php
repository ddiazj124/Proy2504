<?php

$idpersona = $_POST["idPersona"];

        $miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        
        $querySelect="SELECT * FROM datospersonales.persona where idpersona=$idpersona;";
        $resultado = $miconn->query($querySelect);
        
?>       
        
<?php
        while($fila = $resultado->fetch_assoc()){
            echo $fila["idpersona"]."/".$fila["nombre"]."\n <br>";
        }
        
        
?>

<br>
