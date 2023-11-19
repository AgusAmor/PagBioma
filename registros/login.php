<?php
session_start();
$_SESSION;
include_once("../archivos/header.php");
require_once("../connect/connect.php");
?>
    <form action="revisionLogin.php" method="post">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <div>
                <label for="user">Usuario</label>
                <input id="user" name="user" type="text" placeholder="biomaurquiza@gmial.com"/>
            </div>
            <div>
                <label for="pass">Contraseña</label>
                <input id="pass" name="pass" type="password"/>
                <?php
                    if(isset($_GET['error'])){
                        echo "
                        <p>El usuario o contraseña ingresados no son correctos.</p>
                        <button id=btn_signup>Registrarse</button>";
                    }
                    if(isset($_GET['alta'])){
                        echo "<p>Ya podés iniciar sesión.</p>";
                    }
                ?>
            </div>
            <input type="submit" value="Iniciar sesión"/>
        </fieldset>
    </form>
<?php
include_once("../archivos/footer.php");
?>