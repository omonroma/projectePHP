<title>Vehicles</title>

<?php
	include("cap.php");
?>
	<h1>Gestió de Vehicles</h1>
	<form method='post' name='nouVehicle'>
		<input type='submit' value='Nou Vehicle' name='nouVehicle' id='submitOk'/>
	</form>
	
	<?php 
	llistaVehicles(); 
	
	if(($_GET['zonaVehicle'])||($_POST['nouVehicle'])){ ?>
		<br />
		<?php include("gestioVehicles_form.php");
		
		$res=compFromNouVehicle($matricula,$zonaVehicle);
		if (isset($_REQUEST['zonaVehicle'])){
			foreach ($_REQUEST as $camp => $valor) { 
				$a = "\$".$camp."='".$valor."';"; 
				eval($a);
			}
		
		$res=compFromNouVehicle($matricula,$zonaVehicle);
		
		if($res=='ok'){ ?>
			<div id="confirmaComanda">
                            <h2>Vehicle Creat!</h2>
                            Matrícula:  <?php $matricula; ?>
                            <hr>
                            Zona vehicle:  <?php nomZona($zonaVehicle); ?>
                            <hr>
                        </div>
		<?php } else { ?>
			<div id='errors'> 
                        <?php echo $res; ?> 
                        </div> 
                <?php }
	}
				
	}
		
	include("peu.php");
?>
