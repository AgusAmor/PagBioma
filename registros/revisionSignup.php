<?php
    session_start();
    $_SESSION;
    require_once("../connect/connect.php");
    if ($con){
        $nom = $_POST['nom'];
        $apell = $_POST['apell'];
        $email = $_POST['user'];
        $contra = $_POST['pass'];
    
        $consulta = "INSERT INTO usuario SET nombre = '$nom', apellido = '$apell', 
        email = '$email', contra = MD5('$contra'), acceso = 'usuario', estado = 'activo'";
        
        mysqli_query($con, $consulta);
        header ("Location: login.php?alta=ok");
    }
?>