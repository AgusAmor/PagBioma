<?php
include_once("archivos/header.php");

if(isset($_GET['nom'])){
    $nom =$_GET['nom'];
}
if(isset($_GET['apell'])){
    $apell =$_GET['apell'];
}
if(isset($_GET['mail'])){
    $mail =$_GET['mail'];
}
if(isset($_GET['cel'])){
    $cel =$_GET['cel'];
}
if(isset($_GET['bolsa'])){
    $bolsa =$_GET['bolsa'];
}
if(isset($_GET['pago'])){
    $pago =$_GET['pago'];
}
if(isset($_GET['env'])){
    $env =$_GET['env'];
}


if($env == 'envio'){
    echo "
    <form action=enviado.php method=get>
        <fieldset>
        <legend>Envios</legend>
            <div>
                <label for=domicilio>Dirección <strong>*</strong></label>
                <input type=text id=domicilio name=domicilio required/>
            </div>
            <div>
                <label for=timbre>Casa/Timbre <strong>*</strong></label>
                <input type=text id=timbre name=timbre required/>
            </div>
            <div>
                <label for=local>Barrio <strong>*</strong></label>
                <input type=text id=local name=local required/>
            </div>
            <div>
                <label for=acla>Aclaraciones</label>
                <textarea id=acla name=acla placeholder='Si tenés aclaraciones van acá'></textarea>
            </div>
            <div>
                <input class=enviarBtn type=submit />
            </div>
        </fieldset>
    </form>";
}else{
    header ("Location: enviado.php?nom=$nom&apell=$apell&mail=&cel=$cel&bolsa=$bolsa&pago=$pago&env=$env");
}

include_once("archivos/footer.php");
?>