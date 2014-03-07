<form name='comanda' method='post' action='comandes.php'>
	
	
	<table>
		
		<tr>
			<td id='nomCamp'><strong>ID comanda</strong></td>
			<td id='respostaCamp'><input id='campForm' type='text' value='<?php echo $comandes[sizeof($comandes)-1][0]+1; ?>' name='id' readonly>
					
			</td>
		</tr>
		
		
		<!-- Camp Conductor -->
		<tr>
			<td id='nomCamp'><strong>Conductor</strong></td>
			<td id='respostaCamp'>
				<select name='conductor' id='campForm'> 
				<?php
				for($i=0;$i<sizeof($transportistes);$i++){
					echo "<option value=".$transportistes[$i][0].">".$transportistes[$i][1]."</option>";
				}
				?>
				</select>		
			</td>
		</tr>

		<!-- Camp Vehicle Assignat-->	
		<tr>
			<td id='nomCamp'><strong>Vehicle</strong></td>
			<td id='respostaCamp'>
				<select name='vehicle'  id='campForm'>
					<?php
					for($i=0;$i<sizeof($vehicles);$i++){
						echo "<option value=".$vehicles[$i][0].">".$vehicles[$i][0]."</option>";
					}
					?>
				</select>	
			</td>
		</tr>
		
		<!-- Camp Zona destí -->	
		<tr>
			<td id='nomCamp'><strong>Zona destí</strong></td>
			<td id='respostaCamp'>
				<select name='zonaDesti'  id='campForm'>
					<?php
					for($i=0;$i<sizeof($zones);$i++){
						echo "<option value=".$zones[$i][0].">".$zones[$i][1]."</option>";
					}
					?>
				</select>	
			</td>
		</tr>
	
		<!-- Destí -->	
		<tr>
			<td id='nomCamp'><strong>Destí</strong></td>
			<td id='respostaCamp'><input type='text' name='desti' id='campForm'/></td>
		</tr>
		
		<!-- Data -->	
		<tr>
			<td id='nomCamp'><strong>Data</strong></td>
			<td id='respostaCamp'><input name='data' type='date' id='campForm'/></td>
		</tr>
		
		<!-- Camp quilometratge -->	
		<tr>
			<td id='nomCamp'><strong>Quilometratge</strong></td>
			<td id='respostaCamp'><input type='text' size='5' name='km' id='campForm'/> km</td>
		</tr>
		
		<tr>
			<td id='nomCamp'><strong>Volum</strong></td>
			<td id='respostaCamp'><input type='text' size='5' name='volum' id='campForm'/> m&sup3;</td>
		</tr>
		
		
		<!-- Enviar dades -->	
		<tr>
			<td colspan='2'><input type='submit' value='ENVIAR'  id='submitOk'/></td>
		</tr>
	
	</table>
	
</form>

