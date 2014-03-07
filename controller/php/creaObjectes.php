<?php


// Creació de l'empresa
$empresa = new ArOsTrans("ArOsTrans", "G65983248");




// Creació dels transportistes
/* * * * * * * * * * * * * * * *
 * Camp 0: ID de conductor     *
 * Camp 1: Nom del conductor   *
 * Camp 2: DNI del conductor   *
 * * * * * * * * * * * * * * * */

$trans01 = new Transportista(1,"Pepe","42085230Z");
$trans02 = new Transportista(2,"Arnau","42701018N");
$trans03 = new Transportista(3,"Òscar","42799949P");
$trans04 = new Transportista(4,"Adri","42074002X");
$trans05 = new Transportista(5,"Ricard","78860383F");
$trans06 = new Transportista(6,"Olga","42840855B");
$trans07 = new Transportista(7,"Carles","42923183P");
$trans08 = new Transportista(8,"Javi","42908227W");
$trans09 = new Transportista(9,"Albert","42559252Y");
$trans10 = new Transportista(10,"Berta","41956456V");


// Creació de comandes
/* * * * * * * * * * * * * * * * * * * * * * * * 
 * Camp 0: ID comanda                          *
 * Camp 1: ID zona comanda                     *
 * Camp 2: Destí de la comanda                 *
 * Camp 3: Volum de la comanda                 *
 * Camp 4: Data de la comanda (AAAAMMDD)       *
 * Camp 5: km de la comanda                    *
 * Camp 6: Conductor assignat                  *
 * * * * * * * * * * * * * * * * * * * * * * * */

$com01 = new Comanda(0,1,"Granollers",7,"2013-11-22",23.20,1);
$com02 = new Comanda(1,1,"Terrassa",11,"2013-11-22",35.4,1);
$com03 = new Comanda(2,1,"Mataró",14,"2013-11-11",32.4,4);
$com04 = new Comanda(3,1,"Vic",5,"2013-11-11",72.2,5);
$com05 = new Comanda(4,2,"Tortosa",13,"2013-11-10",180,1);
$com06 = new Comanda(5,2,"Lleida",12,"2013-11-09",170,6);
$com07 = new Comanda(6,3,"Madrid",24,"2013-11-22",625,7);
$com08 = new Comanda(7,3,"Granada",17,"2013-11-01",886,10);
$com09 = new Comanda(8,3,"Lugo",17,"2013-11-01",995,3);
$com10 = new Comanda(9,3,"Santiago de Compostela",19,"2013-11-22",1104,9);


// Creació de zones
/* * * * * * * * * * * * * * * * 
 * Camp 0: ID zona             *
 * Camp 1: Nom de la zona      *
 * * * * * * * * * * * * * * * */		

$zona01 = new Zona(1,"BCN");
$zona02 = new Zona(2,"CAT");
$zona03 = new Zona(3,"ESP");


// Creació de vehicles
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * Camp 0: ID (matricula)                              *	
 * Camp 1: Tipus de vehicle (ZONA QUE POT COBRIR)      *
 * Camp 2: Conductor assignat                          *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */ 

$vehicle01 = new Vehicle("7049CTG",1,1);
$vehicle02 = new Vehicle("6798G",1,2);
$vehicle03 = new Vehicle("6987FGT",2,5);
$vehicle04 = new Vehicle("9813OT",2,8);
$vehicle05 = new Vehicle("7654EDF",3,10);
$vehicle06 = new Vehicle("5976FCB",3,6);
$vehicle07 = new Vehicle("4563GH",3,9);

?>
