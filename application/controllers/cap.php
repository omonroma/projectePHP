<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<div id='contingut'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../img/transport.png" rel="icon" />

	<title>Menú</title>

</head>

	<body>
		<?php
                    include("../functions/creaObjectes.php");
                    include("../functions/funcions.php");
                    //include("arrays.php");
                    include("../functions/funcions_oscar.php");
                    include("../functions/funcions_arnau.php");
                ?>	
		<div id='menu'>
			<ul class="menu">
			<li> <a href="../index.php" >Inici</a></li>
                        <li> <a href="comandes.php">Comandes</a></li>
                        <li> <a href="pagaments.php">Pagaments</a></li>
			<li> <a href="#" >Altres</a>
				<ul>
                                    <li> <a href="gestioTreballadors.php">Gestió Treballadors</a></li>
                                    <li> <a href='gestioVehicles.php'>Gestió Vehicles</a></li>
				</ul> 
			</li>
		</ul>
		</div>
		<div id='imgCap'>
                        <a href='../index.php'><img src='../img/transport.png' /></a>
		</div>
		<hr>
	</body>
</html>
