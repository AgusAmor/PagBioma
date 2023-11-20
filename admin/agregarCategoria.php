<?php
require_once("../connect/connect.php");
if($con){
    if (isset($con)){
        $nom = $_POST['nom'];
    }

    $consulta = "INSERT INTO categoria (nombre) VALUE ('$nom')";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        header ("Location: categorias.php");
    }
}
?>