<?php
session_start();
$_SESSION;
$ruta = '/Parcial2_AmorAgustin';
if(!isset($_SESSION['acceso']) OR $_SESSION['acceso'] != 'admin'){
    die("Sin permisos para acceder <a href=$ruta/index.php>Volver</a>");
}
?>