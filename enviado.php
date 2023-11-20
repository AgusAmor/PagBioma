<?php
$title = "BIOMA - Enviado con Éxito";
include_once("archivos/header.php");
require_once("connect/connect.php");
    if (isset($_GET['nom']) && isset($_GET['apell']) && isset($_GET['mail']) 
        && isset($_GET['cel']) && isset($_GET['bolsa']) && isset($_GET['pago']) && isset($_GET['env']) 
        && isset($_GET['domicilio']) && isset($_GET['timbre']) && isset($_GET['local']) && isset($_GET['acla'])){

        $nom = $_GET['nom'];
        $apell = $_GET['apell'];
        $mail = $_GET['mail'];
        $cel = $_GET['cel'];
        $bolsa = $_GET['bolsa'];
        $pago = $_GET['pago'];
        $env = $_GET['env'];
        $domicilio = $_GET['domicilio'];
        $timbre = $_GET['timbre'];
        $local = $_GET['local'];
        $acla = $_GET['acla'];

        $destino = "biomaurquiza@gmail.com";
        $asunto = "Pedido de bolson";
        if($env == 'envio'){
            $cuerpo = "
                    <p>Pedido de bolsón de $nom $apell: </p>
                    <p>Telefono: $cel </p>
                    <p>Tene bolsa?: $bolsa </p>
                    <p>Como paga?: $pago </p>
                    <p>Envios: $env </p>
                    <p>Direccion: $domicilio | $timbre | $local </p>
                    <p>Aclaraciones: $acla </p>
                ";
        }else{
            $cuerpo = "
                        <p>Pedido de bolsón de $nom $apell: </p>
                        <p>Telefono: $cel </p>
                        <p>Tene bolsa?: $bolsa </p>
                        <p>Como paga?: $pago </p>
                        <p>Envios: $env </p>
                        <p>Aclaraciones: $acla </p>
                    ";
        }
        $remitente = "From: agustinwamor@gmail.com";

        echo "$cuerpo";
        

        // if (mail($destino, $asunto, $cuerpo, $remitente)) {
        //     echo "Correo enviado con éxito. Gracias por tu pedido.";
        // } else {
        //     echo "Error al enviar el correo. Por favor, inténtalo de nuevo.";
        // }



        }
?>