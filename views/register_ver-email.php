<?php require_once('header.php')?>

    <main class="main_login">
        <header class="login_logo">
            <img src="../img/imaLogoGearShopblue.png" alt="">
        </header>

        <section class="content_main-login">
                <form>
                    <h2>Registrarse</h2>
                    <div class="instruction_info">
                        <p>Por favor <b>ingresar</b> el código de verificación, el cual fue enviado al <b>correo electrónico</b>.</p>

                      </div>
                    <div>
                      <label for="codigo_veri">Código de Verificación</label>
                      <input type="text" id="codigo_veri" name="codigo_veri" placeholder="123456" required>
                    </div>
                    <button class="btn_iniciar" type="submit">Registrarse</button>
                    <div>
                        <span>¿Ya tienes una cuenta? <b><a href="login.php">Iniciar sesión</a></b></span>

                      </div>
                  </form>
            </section>

            </main>


<?php require_once('footer.php')?>
