<?php require_once('header.php')?>
    <main class="main_login">
        <header class="login_logo">
            <img src="../img/imaLogoGearShopblue.png" alt="">
        </header>

        <section class="content_main-login">
                <form>
                    <h2>Recuperación de contraseña</h2>
                    <div class="instruction_info">
                        <p>Para <b>recuperar la contraseña</b> necesitamos que ingrese el <b>correo electrónico</b> o el <b>número telefónico</b> afiliado a la cuenta.</p>

                      </div>
                    <div>
                      <label for="codigo_veri">Correo o teléfono</label>
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
