<form name='pagaments' method='post' action='pagaments.php'>

	<table>
		<tr><!-- ID del Conductor -->
			<td id='nomCamp'><strong>ID Conductor</strong></td>
			<td id='respostaCamp'> <?php idTransportista(); ?> </td>

			<!-- Nom del conductor-->
			<td id='nomCamp'><strong>Nom</strong></td>
			<td id='respostaCamp'> <?php transportista(); ?> </td>
		</tr>
		
		<tr><!-- Vehicle -->
			<td id='nomCamp'><strong>Vehicle</strong></td>
			<td id='respostaCamp'> <?php vehicle(); ?> </td>
	
			<!-- Quilòmetres-->
			<td id='nomCamp'><strong>Quilòmetres</strong></td>
			<td id='respostaCamp'> <?php quilometres(); ?> </td>
		</tr>
		
		<tr>
			<!-- Dietes-->
			<td id='nomCamp'><strong>Dietes</strong></td>
			<td id='respostaCamp'> <?php dieta(); ?> </td>			
			
			<!-- Pagar -->
			<td id='nomCamp'><strong>Total a pagar</strong></td>
			<td id='respostaCamp'> <?php pagar(); ?> </td>
		</tr>
		
		<!-- Enviar dades -->
		<tr>
			<td colspan="2"><input type='submit' value='ENVIAR' id='submitOk'></td>
		</tr>
</table>

<div id="errors">
	<?php nomTransportista(); ?>
</div>
	
</form>

