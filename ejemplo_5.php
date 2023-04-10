<?php

// cadean de conexiones al servidor y base de datos 
$conection = mysqli_connect("localhost","root","","juan_ronaldo");



// para verificar si hay algun error 
if (!$conection) {
    die("La conexion fallo: ".$conection->connect_error());

}

echo "Conectado  exitosamnete con objetos";

// cerrar la conexion 
mysqli_close($conection);


?>