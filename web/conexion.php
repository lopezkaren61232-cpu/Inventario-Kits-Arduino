<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "inventario_arduino";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("Error de conexión");
}

?>
