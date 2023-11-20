<?php
require_once("../archivos/revisionAdmin.php");
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");
?>
    <section>
        <h1>Bienvenido a la ABM de BIOMA</h1>
        <p>Desde acá podés administrar:</p>
        <ul>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="categorias.php">Categorias</a></li>
        </ul>
    </section>
<?php
include_once("../archivos/footerAdmin.php");
?>