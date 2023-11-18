<?php
    session_start();
    $_SESSION;
    require_once("../connect/connect.php");
    if ($con){
        $nom = $_POST['nom'];
        $apell = $_POST['apell'];
        $email = $_POST['user'];
        $contra = $_POST['pass'];
    
        $consulta ="INSERT INTO usuario (nombre, apellido, email, contra) 
        VALUE ('$nom', '$apell', '$email', MD5('$contra'))";
        
        mysqli_query($con, $consulta);
        header ("Location: ../index.php?alta=ok");
    }
?>