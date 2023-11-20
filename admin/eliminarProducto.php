<?php
require_once("../connect/connect.php");

$id = $_GET['id'];

$consulta = "DELETE FROM producto WHERE id ='$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: productos.php");

?>