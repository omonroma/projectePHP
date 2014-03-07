<title>Treballadors</title>

<?php
	include("cap.php");
?>
	<h1>Gestió de Treballadors</h1>
	<form method='post' name='nouTransportista'>
		<input type='submit' value='Nou transportista' name='nouTransportista' id='submitOk'/>
	</form>
<?php

	llistaTreballadors();
        	if(($_REQUEST['nomTransportista']) || ($_REQUEST['nouTransportista'])){
                	echo "<br />";
			include("gestioTreballadors_form.php");
                	$res = compFormNouTreballador($nif,$nomTransportista);
			if (isset($_REQUEST['nif'])){
				foreach ($_REQUEST as $camp => $valor){ 
					$a = "\$" . $camp . "='" . $valor . "';"; 
					eval($a);
				}
				$res = compFormNouTreballador($nif,$nomTransportista);
				if($res == 'ok'){
?>
                                    <div id = "treballadorConfirmat" >
                                        <h2>Nou Treballador</h2>
                                        <strong>NIF: </strong> <?php $nif; ?>
                                        <hr />
                                        <strong>Nom: </strong> <?php nomTransportista($nomTransportista); ?>
                                        <hr />
                                    </div>
				
				<?php } else { ?>

					<div id='errors'> 
						<?php echo $res; ?>
					</div> 
<?php
				}
			}
		}
	
	include("peu.php");
?>
