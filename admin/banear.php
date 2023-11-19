<?php
require_once("../connect/connect.php");

$id = $_GET['id'];

$consulta = "UPDATE usuario SET ESTADO = 'banneado' WHERE id = '$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: usuarios.php");

?>