<title>Comandes</title>

<?php
	include("cap.php");
?>

	<h1>Comandes</h1>
	
<?php 
	if (isset($_REQUEST['conductor'])){
            foreach ($_REQUEST as $camp => $valor) { 
            $a = "\$".$camp."='".$valor."';"; 
            eval($a);
	}
		
        $res=compFormComandes($id,$vehicle, $conductor, $zonaDesti, $desti, $data, $km, $volum);
        if($res=="ok"){	
	
?>
        <div id='confirmaComanda'>
	<h2>Comanda assignada!</h2>
	<b>Vehicle:</b> <?php $vehicle; ?>
        <hr><b>Conductor:</b> <?php nomConductor($conductor); ?>
	<hr><b>Destí:</b>  <?php $desti. " (".nomZona($zonaDesti).")"; ?>
	<hr><b>Data:</b> <?php $data; ?>
	<hr><b>Distància:</b> <?php $km." km."; ?>
	<hr><b>Volum:</b> <?php $volum." m&sup3;"; ?>
	<hr></div>
        
<?php
        } else {
        include("comandes_form.php");
?> 
        <div id='errors'> 
            <?php echo $res; ?> 
        </div> 
        
<?php
        }
            }else{
               include("comandes_form.php");
        }
        
        include("peu.php");
        		
?>
