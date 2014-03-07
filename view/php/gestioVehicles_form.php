<form name='creaNouVehicle' method='get' action='gestioVehicles.php'>
hola
	<table>
		
		<!-- Matrícula -->
		<tr>
			<td id='nomCamp'><strong>Matrícula</strong></td>
			<td id='respostaCamp'><input id='campForm' type='text' name='matricula'>
					
			</td>
		</tr>
		
		<!-- Camp Zona destí -->	
		<tr>
			<td id='nomCamp'><strong>Zona Vehicle</strong></td>
			<td id='respostaCamp'>
				<select name='zonaVehicle'  id='campForm'>
					<?php
					for($i=0;$i<sizeof($zones);$i++){
						echo "<option value=".$zones[$i][0].">".$zones[$i][1]."</option>";
					}
					?>
				</select>	
			</td>
		</tr>
			
		<!-- Enviar dades -->	
		<tr>
			<td colspan='2'><input type='submit' value='ENVIAR'  id='submitOk'/></td>
		</tr>
	
	</table>
	
</form>


