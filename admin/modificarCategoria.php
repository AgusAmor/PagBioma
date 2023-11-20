<?php
session_start();
$_SESSION;
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");
if($con){
    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id']; 
    }

    $consulta = "SELECT * FROM categoria WHERE id = '$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        $fila=mysqli_fetch_array($resultado);
        echo "<h1>Modificación de categoría</h1>";
        echo "
        <form action=modificarCategoria2.php method=post >
            <fieldset>
                <legend>Modificar $fila[nombre]</legend>
                <div>
                    <h2>Codigo categoría: $fila[id]</h2>
                    <input type=hidden name=id value=$fila[id] />
                </div>
                <div>
                    <label for=nom >Nombre</label>
                    <input type=text id=nom name=nom value=$fila[nombre] />
                </div>
                <input class=enviarBtn type=submit />
                <a href=categorias.php class=enviarBtn>Volver</a>
            </fieldset>
        </form>
        ";
    }
}
?>