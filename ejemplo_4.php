<?php

// cadean de conexiones al servidor y base de datos 
$conection = mysqli_connect("localhost","root","","juan_ronaldo");



// para verificar si hay algun error 
if (!$conection) {
    die("La conexion fallo: ".mysqli_connect_error());

}

echo "Conectado  exitosamnete con procedimiento";

// cerrar la conexion 
mysqli_close($conection);


?>