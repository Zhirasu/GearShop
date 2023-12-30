<?php require_once('header.php')?>


    <main class="main_login">
        <header class="login_logo">
            <img src="../img/imaLogoGearShopblue.png" alt="">
        </header>

        <section class="content_main-login">
                <form>
                    <h2>Iniciar Sesión</h2>
                    <div>
                      <label for="usuario">Correo electrónico o Teléfono</label>
                      <input type="text" id="usuario" name="usuario" placeholder="ejemplo@gmail.com" required>
                    </div>
                    <div>
                      <label for="contrasena">Contraseña</label>
                      <input type="password" id="contrasena" name="contrasena" placeholder="************" required>
                    </div>
                    <a class="recuperar_contraseña" href="recovery_password.php">Recuperar <b>contraseña</b></a>
                    <!-- <a class="recuperar_contraseña" href="">Recuperar <b>Correo electrónico</b></a> -->
                    <button class="btn_iniciar" type="submit">Iniciar sesión</button>
                    <div>
                        <span>¿No tienes una cuenta? <b><a href="register.php">Registrarse</a></b></span>

                      </div>
                  </form>
            </section>
            </main>



<?php require_once('footer.php')?>
