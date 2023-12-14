<?php
    session_start();
    $_SESSION;
    require_once("../connect/connect.php");
    if (isset($_POST['user'])){
        $email = $_POST['user'];
    }
    if (isset($_POST['pass'])){
        $contra = $_POST['pass'];
    }
    
    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND contra = MD5('$contra')";

    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila['acceso'] == 'admin'){
        if ($fila['estado'] == 'banneado'){
            header("Location: login.php?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: ../admin/index.php");
        }
    }else{
        if ($fila['estado'] == 'banneado'){
            header("Location: login.php?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: ../index.php");
        }
    }

    if($fila == NULL){
        header("Location: login.php?error=error");
    }

?>