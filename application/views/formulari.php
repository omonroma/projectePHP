<!DOCTYPE html>
<html>
    <head>
        <title>Formulari d'accés</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php echo validation_errors(); ?>

        <div class="container">
        <?php echo form_open('form'); ?>




            <form class="form-signin" role="form">
                <h2 class="form-signin-heading">Validació</h2>
                <input type="text" class="form-control" placeholder="Usuari" required autofocus>
                <input type="password" class="form-control" placeholder="Contrasenya" required>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Recordar validació
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
            </form>
        </div>





        <!--
        <h5>Usuari:</h5>
        <input type="text" name="username" value="" size="50" />
        <h5>Contrasenya:</h5>
        <input type="text" name="password" value="" size="50" />
        <h5>Password Confirm</h5>
        <input type="text" name="passconf" value="" size="50" />
        <h5>Email Address</h5>
        <input type="text" name="email" value="" size="50" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Validar</button>
        <div><input type="submit" value="Submit" /></div>
        </form> -->
    </body>
</html>