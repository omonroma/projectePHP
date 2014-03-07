<?php

/************************************************************
**
**
**				FUNCIONS a pagament.php
**
**
************************************************************/



// Funció que ens dóna la ID del transportista
function idTransportista(){
	if(isset($_REQUEST['transportista'])){
		$id = $_REQUEST['transportista'];
		echo "<input id='campForm' value='$id'>";
	}
}

// Funció que ens dóna el nom del transportista
function nomTransportista(){
	include("arrays.php");
	$transportista = 0;
	if(isset($_REQUEST['transportista'])){
		$id = $_REQUEST['transportista'];
		
		for($i = 0;$i < sizeof($transportistes); $i++){
			if($transportistes[$i][0] == $id){
				$transportista += 1;
				echo $transportistes[$i][1];
			}
		}
		if ($transportista == 0) echo "* Escull transportista";
	}
}

// Funció que ens dóna el vehicle assignat del transportista
function transportista(){
	include("arrays.php");
	echo "<select name='transportista' id='campForm'>";
		echo "<option value=\"\">-- TRANSPORTISTA --</option>";
		for($i = 0;$i < sizeof($transportistes); $i++){
			echo "<option value=" . $transportistes[$i][0] .">" . $transportistes[$i][1] ."</option>";
		}
	echo "</select>";
	}

// Funció que ens dóna el vehicle assignat del transportista
function vehicle(){
	include("arrays.php");
	if(isset($_REQUEST['transportista'])){
		for($i = 0;$i < sizeof($vehicles);$i++){
			if($vehicles[$i][2] == $_REQUEST['transportista']){
				$matricula = $vehicles[$i][0];
				echo "<input id='campForm' value='$matricula'>";
			}
		}
	}
}

// Funció que ens dóna el total de quilòmetres
function quilometres(){
	include("arrays.php");
	if(isset($_REQUEST['transportista'])){
		$quilometres = 0;
		for($i = 0;$i < sizeof($comandes);$i++){
			if($comandes[$i][6] == $_REQUEST['transportista']){
				$quilometres += $comandes[$i][5];
			}
		}
		$quilometres = number_format($quilometres, 2);
		$quilometres = $quilometres . " km";
		echo "<input id='campForm' value='$quilometres' />";
	}
}

// Funció que ens dóna el total de dietes a pagar
function dieta(){
	$dates = array();
	$comanda = 0;
	include("arrays.php");
	if(isset($_REQUEST['transportista'])){
		for($i = 0; $i < sizeof($comandes);$i++){
			if($comandes[$i][6] == $_REQUEST['transportista']){
				//$dates[$comanda] = $comandes[$i][4];
				$comanda++;
			}
		}
		echo "<input id='campForm' value='$comanda' readonly>";
	}
}


// Funció que dóna el total a pagar
function pagar(){
	include("arrays.php");
	if(isset($_REQUEST['transportista'])){
		$preuQuilometre = 4.06;
		$quilometres = 0;
		for($i = 0;$i < sizeof($comandes);$i++){
			if($comandes[$i][6] == $_REQUEST['transportista']){
				$quilometres += $comandes[$i][5];
			}
		}
		$pagar = $preuQuilometre * $quilometres;
		$pagar = number_format($pagar, 2);
		$pagar = $pagar." €";
		echo "<input id='campForm' value='$pagar'>";
	}
}


/************************************************************
**
**
**				FUNCIONS a treballadors.php
**
**
************************************************************/




// Funció per validar el NIF
function nif(){
	if(isset($_REQUEST['transportista["nif"]'])){
		$cadena = $_REQUEST['transportista["nif"]'];
		
		//Comprovació de la longitud
		if (strlen($cadena) != 9) return false;      
	 
		//Definició de les lletres
		$valoresLetra = array(
			0 => 'T', 1 => 'R', 2 => 'W', 3 => 'A', 4 => 'G', 5 => 'M',
			6 => 'Y', 7 => 'F', 8 => 'P', 9 => 'D', 10 => 'X', 11 => 'B',
			12 => 'N', 13 => 'J', 14 => 'Z', 15 => 'S', 16 => 'Q', 17 => 'V',
			18 => 'H', 19 => 'L', 20 => 'C', 21 => 'K',22 => 'E');

		//Comprovació del format del NIF
		if (preg_match('/^[0-9]{8}[A-Z]$/i', $cadena)){
			//Comprovació de la lletra
			if (strtoupper($cadena[strlen($cadena) - 1]) != $valoresLetra[((int) substr($cadena, 0, strlen($cadena) - 1)) % 23]){
				return false;
			}
			return true;
		}
	 
		//Comprovació si es un NIE
		else if (preg_match('/^[XYZ][0-9]{7}[A-Z]$/i', $cadena)){
			if (strtoupper($cadena[strlen($cadena) - 1]) != $valoresLetra[((int) substr($cadena, 1, strlen($cadena) - 2)) % 23]){
				return false;
			}
			return true;
		}
	   
		//Cadena no és correcte
		return false;
	}
}

//Funció que ens dóna el llistat de treballadors
function llistaTreballadors(){
include("arrays.php"); ?>
	<table>
            <tr>
                <td id='nomCamp'>ID</td>
                <td id='nomCamp'>Nom</td>
		<td id='nomCamp'>NIF</td>
	    </tr>
	<?php for ($i = 0;$i < sizeof($transportistes);$i++){ ?>
            <tr>
                <td id='respostaCamp'><input type='text' id='campForm' readonly value= <?php $transportistes[$i][0] ?> size='7%'></td> 
                <td id='respostaCamp'><input type='text' id='campForm' readonly value= <?php $transportistes[$i][1] ?> size='10%'></td>
                <td id='respostaCamp'><input type='text' id='campForm' readonly value= <?php $transportistes[$i][2] ?> size='10%'></td> 
                <td id='respostaCamp'><img src='../img/eliminar.png'></td>
            </tr>
	<?php } ?>
	</table>	
<?php }

//Funció de comprovació per donar d'alta un transportista
function compFormNouTreballador($nif,$nomTransportista){
	//El NIF no pot estar en blanc
	if($nif == ''){
		$res = '* El NIF no pot quedar en blanc!';
	}
			
	if($res){
		return $res;
	} else {
		
	//El NIF ha de tenir 8 números i una lletra
	if(strlen($nif) != '9'){
		$res='* El NIF ha de tenir 9 dígits';
	}	
	
	if($res){
		return $res;
	} else {
		//Comprovem que els 8 primers camps són números
		for ($i = 0;$i < 8;$i++){
			if(!is_numeric($nif[$i])){
				$res='* Els 8 primers dígits han de ser números!';
			}
		}
		
		if($res){
			return $res;
		} else {
			//Comprovem que els últims dígits són lletres
			for($i = 8;$i < strlen($nif);$i++){
				if(!ctype_alpha($nif[$i])){
					$res='* L\'últim caràcter ha de ser una lletra!';
				}
			}
						
			if($res){
				return $res;
			} else {
				$res = 'ok';
				return $res;
				}
			}
		}
	}
}



?>
