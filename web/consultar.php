<?php

include("conexion.php");

$sql = "SELECT * FROM kits_arduino";

$resultado = $conn->query($sql);

while($fila = $resultado->fetch_assoc()){
    echo json_encode($fila);
    echo "<br>";
}

?>
