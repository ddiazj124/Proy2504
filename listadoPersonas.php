<?php
        $miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        
        $querySelect="SELECT * FROM datospersonales.persona;";
        $resultado = $miconn->query($querySelect);
        
        echo $resultado->num_rows;
        
?>  
<form action="consulta.php" method="POST">
<?php
        while($fila = $resultado->fetch_assoc()){
            $idPersona=$fila['idpersona'];
            echo "<input type=radio name='idPersona' value=$idPersona>";
            echo $fila["idpersona"]."/".$fila["nombre"]."\n <br>";
        }
        
?>

    <input type="submit" value="Borrar Persona">
</form>