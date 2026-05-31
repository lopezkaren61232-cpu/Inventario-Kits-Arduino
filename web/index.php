<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventario de Kits Arduino</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<h1>Inventario de Kits Arduino</h1>

<table>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Categoría</th>
<th>Cantidad</th>
<th>Observaciones</th>
<th>Fecha</th>
</tr>

<?php

$sql = "SELECT * FROM kits_arduino";
$resultado = $conn->query($sql);

while($fila = $resultado->fetch_assoc()){

echo "<tr>
<td>".$fila['id']."</td>
<td>".$fila['nombre']."</td>
<td>".$fila['categoria']."</td>
<td>".$fila['cantidad']."</td>
<td>".$fila['observaciones']."</td>
<td>".$fila['fecha_registro']."</td>
</tr>";

}

?>

</table>

</body>
</html>
