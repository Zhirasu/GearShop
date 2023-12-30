<?php require_once('header.php') ?>
<main class="main_login">
    <header class="login_logo">
        <img src="../img/imaLogoGearShopblue.png" alt="">
    </header>

    <section class="content_main-login">
        <form>
            <h2>Recuperación de contraseña</h2>
            <div class="instruction_info">
                <p>Ingrese una <b>contraseña segura nueva</b> para terminar de restablecer la contraseña.</p>

            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="************" required>
            </div>
            <div>
                <label for="contrasena_2">Repetir contraseña</label>
                <input type="password" id="contrasena_2" name="contrasena_2" placeholder="************" required>
            </div>
            <button class="btn_iniciar" type="submit">Registrarse</button>
            <div>
                <span>¿Ya tienes una cuenta? <b><a href="login.php">Iniciar sesión</a></b></span>

            </div>
        </form>
    </section>

    </main>


    <?php require_once('footer.php') ?>