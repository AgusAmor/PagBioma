<?php
require_once("../connect/connect.php");

$id = $_GET['id'];

$consulta = "DELETE FROM usuario WHERE id ='$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: usuarios.php");

?>