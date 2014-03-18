<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <?php $this->load->view('includes/header'); ?>

        <!-- Títol de la pàgina -->
        <title>Comandes</title>
    </head>
    <body>
    <?php require_once('includes/menu.php'); ?>

        <?=form_open('altaComanda')?>
        <?=form_dropdown('conductor',$conductors)?>
        <?=form_dropdown('vehicle',$vehicles)?>
        <?=form_dropdown('zona',$zona)?>
        <?=form_input('destí')?>
        <?=form_input('quilometratge')?>
        <?=form_input('volum')?>

        <table>
            <tr>
                <td id='nomCamp'><strong>Data</strong></td>
                <td id='respostaCamp'><input name='data' type='date' id='campForm'/></td>
            </tr>
        </table>

        <?=form_submit('botonSubmit', 'Enviar')?>
        <?=form_close()?>

        <?php require_once('includes/footer.php'); ?>
    </body>
</html>