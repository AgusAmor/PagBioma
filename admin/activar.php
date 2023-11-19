<?php
require_once("../connect/connect.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$consulta = "UPDATE usuario SET estado = 'activo' WHERE id = '$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: usuarios.php");
?>