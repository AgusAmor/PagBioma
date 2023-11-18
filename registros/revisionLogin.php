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
    
    $consulta ="SELECT email, contra, acceso FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_array($resultado);

    if($fila['contra'] != $contra){
        header ("Location: login.php?error=error");
    }elseif($fila == NULL){
        header("Location: login.php?error=error");
    }

    if ($fila['acceso'] == 'admin'){
        if ($fila['estado'] == 'banneado'){
            header("Location: login.php?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: ../admin/index.php");
        }
    }

    if ($fila['acceso'] == 'usuario'){
        if ($fila['estado'] == 'banneado'){
            header("Location: login.php?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: ../index.php");
        }
    }

?>