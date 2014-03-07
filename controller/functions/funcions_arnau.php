<?php
	
/****************************************************************************
 * 
 * FUNCIONS PER A COMANDES.PHP
 * 
 *****************************************************************************/

/*Retorna la zona màxima on pot anar un vehicle*/
function getZonaMaxVehicle($zona){
include("arrays.php");
    $trobat=null;
    $i=0;
    do{
        if($vehicles[$i][0]==$zona){ 
                $trobat=$vehicles[$i][1];
        }			
        $i++;
    } while($trobat==null);
    return $trobat;
}


/*
//Retorna el nom de la zona a partir del seu número de zona
function nomZona($zonaDesconeguda){
include("php/arrays.php");
    $trobat=null;
    for ($i=0;$i<sizeof($zones);$i++) {
        if($zones[$i][0]==$zonaDesconeguda){
            $trobat=$zones[$i][1];
        }			
    }
    return $trobat;
}

//Retorna el nom d'un conductor a partir del seu id
function nomConductor($idConductor){
include("arrays.php");
        $trobat=null;
        $i=0;
        do{
                if($transportistes[$i][0]==$idConductor){
                        $trobat=$transportistes[$i][1];
                }			
                $i++;

        } while($trobat==null);

        return $trobat;

}*/

/*Retorna els KM que ha fet un conductor en un dia*/
function kmConductorDia($data,$conductor){
include("arrays.php");
        $total=0;
        for($i=0; $i<sizeof($comandes);$i++){
                if(($comandes[$i][4]==$data)&&($comandes[$i][6]==$conductor)){
                        $total = $total + $comandes[$i][5];
                }
        }
        return $total;
}

/*Funció en la que comprovem el formulari de comandes*/
function compFormComandes($id,$vehicle,$conductor,$zonaDesti,$desti,$data,$km, $volum){
        include("arrays.php");

        //Comprovarem que no hi hagui camps en blanc al formulari
        $arguments=func_num_args();
        $i=0;
        $res=null;
        while ($i<$arguments){
                if (func_get_arg($i)==""){
                        switch($i){

                                case 3:
                                        $temp='Destí';
                                break;

                                case 4:
                                        $temp='Data';
                                break;

                                case 5:
                                        $temp='Quilometratge';
                                break;

                                case 6:
                                        $temp='volum';
                                break;

                                default:
                                        $temp=" * ";
                                break;
                        }
                        $res=$res."* El camp ".$temp." no pot estar en blanc!<br>";
                }
                $i++;
        }
        if($res){
                return $res;
        } else {
                /*Comprovarem si l'avast del vehichle assignat és correcte*/
                $zonaMaxDesti=getZonaMaxVehicle($vehicle);
                if($zonaDesti>$zonaMaxDesti){	

                        $res="* El vehicle ".$vehicle." només pot anar a la zona ".nomZona($zonaMaxDesti)."!";
                        return $res;

                } else {		

                        switch ($zonaDesti){

                                case 1:
                                        if($km>151){
                                                $res="* Els Km. màxims a la zona de ".nomZona($zonaMaxDesti)." són 150! N'has introduït ".$km. "!";
                                        }
                                break;

                                case 2:
                                        if($km>401){
                                                $res="* Els Km. màxims a la zona de ".nomZona($zonaMaxDesti)." són 400! N'has introduït ".$km. "!";
                                        }
                                break;

                                case 3:
                                        if($km>12001){
                                                $res="Els Km. màxims a la zona de ".nomZona($zonaMaxDesti)." són 1.200! N'has introduït ".$km. "!";
                                        }
                                break;
                        }

                        if($res){
                                return $res;
                        } else {

                                //Comprovem que un conductor no fa més de 1500 Km en un mateix dia			
                                $kmConductorDia=kmConductorDia($data,$conductor);
                                $kmTotalsDia=$km*2;
                                $kmTotalsDia=$kmTotalsDia + $kmConductorDia;				

                                if($kmTotalsDia>=1500){
                                        $res="* El conductor ".nomConductor($conductor)." ja ha fet el máxim de 1500 km en el dia d'avui";
                                }

                                if($res){
                                        return $res;
                                } else {

                                        //Comprovem que el volum de la comanda no sigui superior a la que pot dur el vehicle
                                        switch($zonaMaxDesti){
                                                case 1:
                                                        if($volum>0.5){
                                                                $res="* El vehicle ". $vehicle ." només pot dur 0,5 m3!";
                                                        }							
                                                break;

                                                case 2:
                                                        if($volum>15){
                                                                $res="* El vehicle ". $vehicle ." només pot dur 15 m3!";
                                                        }
                                                break;

                                                case 3:
                                                        if($volum>24){
                                                                $res="* El vehicle ". $vehicle ." només pot dur 24 m3!";
                                                        }
                                                break;
                                        }
                                if($res){

                                        return $res;
                                } else {
                                        $res = "ok";
                                        return $res;
                                }

                                }
                        }
                }
        }
}

/****************************************************************************
 * 
 * FUNCIONS GESTIO VEHICLES
 * 
 *****************************************************************************/

/*Funció que escriu una taula dels nostres vehicles*/
function llistaVehicles(){
include("arrays.php");

        echo "<table>";
        echo "<tr>";
                echo "<td id='nomCamp'>Matrícula</td>";
                echo "<td id='nomCamp'>Zona</td>";
                echo "<td id='nomCamp'>Volum</td>";
        echo "</tr>";
        for ($i=0;$i<sizeof($vehicles);$i++){

                echo "<tr>";
                        echo "<td id='respostaCamp'><input type='text' id='campForm' readonly value= ".$vehicles[$i][0]." size='15%'></td>";
                        echo "<td id='respostaCamp'><input type='text' id='campForm' readonly value= ".nomZona($vehicles[$i][1])." size='10%'></td>";
                        switch($vehicles[$i][1]){
                                case 1:
                                        echo "<td id='respostaCamp'><input type='text' id='campForm' readonly value='0,5 m3' size='10%'></td>";				
                                break;

                                case 2:
                                        echo "<td id='respostaCamp'><input type='text' id='campForm' readonly value='15 m3' size='10%'></td>";	
                                break;

                                case 3:
                                        echo "<td id='respostaCamp'><input type='text' id='campForm' readonly value='24 m3' size='10%'></td>";	
                                break;
                        }
                        echo "<td id='respostaCamp'><img src='../img/eliminar.png'></td>";	
                echo "</tr>";
        }

        echo "</table>";	
}

/*Funció que comprova els camps del formulari per donar alta vehicles*/
function compFromNouVehicle($matricula,$zonaVehicle){
        //Comprovem que la matrícula no estigui en blanc
        if($matricula==''){
                $res='* El camp matícula no pot estar en blanc!';
        }

        if($res){
                return $res;
        } else {

        //Comprovem que la matrícula tingui la mida correcte (entre 5 i 7 dígits)
        if(strlen($matricula)>'7'){
                $res='* La matrícula no pot tenir més de 7 dígits!';
        } else {
                if(strlen($matricula)<'5'){
                        $res='* La matrícula no pot tenir menys de 5 dígits!';
                }
        }	

        if($res){
                return $res;
        } else {
                //Comprovem que els 4 primers camps són números
                for ($i=0;$i<4;$i++){
                        if(!is_numeric($matricula[$i])){
                                $res='* Els 4 primers caràcters han de ser dígits!';
                        }
                }

        if($res){
                return $res;
        } else {
                //Comprovem que els últims dígits són lletres
                for($i=4;$i<strlen($matricula);$i++){
                        if(!ctype_alpha($matricula[$i])){
                                $res='* Els últims caràcters han de ser lletres!';
                        }
                }

        if($res){
                return $res;
        } else {
                $res='ok';
                return $res;
        }
        }
        }
        }
}

?>
