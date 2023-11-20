<?php
require_once("../archivos/revisionAdmin.php");
require_once("../connect/connect.php");

$id = $_GET['id'];

$consulta = "DELETE FROM categoria WHERE id ='$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: categorias.php");

?>