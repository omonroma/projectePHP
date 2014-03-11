<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <?php $this->load->view('includes/header'); ?>

        <!-- Títol de la pàgina -->
        <title>Formulari d'accés</title>
    </head>
    <body>
        <?php echo validation_errors(); ?>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="form-horizontal" role="form">
                <?php echo form_open('form'); ?>
                <!--<form class="form-signin" role="form">-->
                <h2 class="form-signin-heading">Validació</h2>
                <input type="text" class="form-control" placeholder="Usuari" required autofocus>
                <input type="password" class="form-control" placeholder="Contrasenya" required>
                <p><label class="checkbox">
                    <input type="checkbox" value="remember-me"> Recordar validació
                </label></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
            </div>
                </form>
            </div>
        </div>
    <?php $this->load->view('includes/footer'); ?>
    </body>
</html>
