<?php

try {

$conection = new PDO("mysql:host=localhost;dbname=juan_ronaldo","root","");
$conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conectado exitosamnete con PDO";
} catch (PDOException $e) {

echo "La conexion fallo: ".$e->getMessage();
}



?>
