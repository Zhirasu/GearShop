<?php require_once('header.php')?>
    <main class="main_login">
        <header class="login_logo">
            <img src="../img/imaLogoGearShopblue.png" alt="">
        </header>

        <section class="content_main-login">
                <form>
                    <h2>Registrarse</h2>
                    <div>
                      <label for="nombre_apellido">Nombre y Apellido</label>
                      <input type="text" id="nombre" name="nombre" placeholder="Nombre Apellido" required>
                    </div>
                    <div>
                      <label for="number_ci">Numero de documento</label>
                      <input type="text" id="number_ci" name="number_ci" placeholder="12.456.789" required>
                    </div>
                    <div>
                        <label for="correo">Correo electrónico</label>
                        <input type="text" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>
                      </div>

                      <div>
                        <label for="number_tlf">Numero telefónico</label>
                        <input type="text" id="number_tlf" name="number_tlf" placeholder="58+ 123-4567-891" required>
                      </div>
    
                    <button class="btn_iniciar" type="submit">Registrarse</button>
                    <div>
                        <span>¿Ya tienes una cuenta? <b><a href="login.php">Iniciar sesión</a></b></span>

                      </div>
                  </form>
            </section>

            </main>


<?php require_once('footer.php')?>
