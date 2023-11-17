<?php
include_once("archivos/header.php");
?>
    <section>
        <form action="bolsonEnviado.php" method="get">
            <fieldset>
                <legend><h1>Bolsón Orgánico</h1></legend>
                <div>
                    <label for="nom">Nombre <strong>*</strong></label>
                    <input type="text" name="nom" id="nom" required/>
                </div>
                <div>
                    <label for="apell">Apellido <strong>*</strong></label>
                    <input type="text" name="apell" id="apell" required/>
                </div>
                <div>
                    <label for="mail">Correo electrónico</label>
                    <input type="email" name="mail" id="mail"/>
                </div>
                <div>
                    <label for="cel">Número de teléfono <strong>*</strong></label>
                    <input type="num" name="cel" id="cel" required/>
                </div>
                <div>
                    <label for="bolsa">¿Tenés tu bolsa BIOMA? <strong>*</strong></label>
                    <label>
                        <input type="radio" name="bolsa" id="bolsa" value="si" required/> Si
                    </label>
                    <label>
                        <input type="radio" name="bolsa" id="bolsa" value="no" required/> No
                    </label>
                </div>
                <div>
                    <label for="pago">¿Cómo abonás tu bolsón? <strong>*</strong></label>
                    <label>
                        <input type="radio" name="pago" id="pago" value="eft" required/> Efectivo
                    </label>
                    <label>
                        <input type="radio" name="pago" id="pago" value="mp" required/> MercadoPago (QR)
                    </label>
                    <label>
                        <input type="radio" name="pago" id="pago" value="tj" required/> Tarjeta
                    </label>
                </div>
                <div>
                    <label for="env">Elegí si pasas a retirar o preferís que te lo enviemos a tu domicilio. <strong>*</strong></label>
                    <label>
                        <input type="radio" name="env" id="env" value="retiro" required/> Retiro
                    </label>
                    <label>
                        <input type="radio" name="env" id="env" value="envio" required/> Envio
                    </label>
                </div>
                <div>
                    <input type="submit"/>
                </div>
            </fieldset>
        </form>
    </section>
    <script src="js/script.js"></script>
<?php
include_once("archivos/footer.php");
?>