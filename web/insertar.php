<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO kits_arduino
(nombre,categoria,cantidad,observaciones)
VALUES
('$nombre','$categoria','$cantidad','$observaciones')";

if($conn->query($sql)){
    echo "Registro guardado correctamente";
}else{
    echo "Error";
}

?>
