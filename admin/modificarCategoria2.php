<?php
require_once("../connect/connect.php");
if($con){
    if (isset($_POST['nom'])){
        $nom = $_POST['nom'];
    }
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
        $consulta = "UPDATE categoria SET nombre = '$nom' WHERE id = '$id'";
        $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        header ("Location: categorias.php");
    }
}
?>