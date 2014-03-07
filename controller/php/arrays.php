<?php

	/* * * * * * * * * * * * * * * *
	 * Array de transportistes	   *
	 * Camp 0: ID de conductor     *
	 * Camp 1: Nom del conductor   *
	 * Camp 2: DNI del conductor   *
	 * * * * * * * * * * * * * * * */
	$transportistes = array(array(1,"Pepe","42085230Z"),
				array(2,"Arnau","42701018N"),
        			array(3,"Òscar","42799949P"),
				array(4,"Adri","42074002X"),
                		array(5,"Ricard","78860383F"),
				array(6,"Olga","42840855B"),
				array(7,"Carles","42923183P"),
                    		array(8,"Javi","42908227W"),
				array(9,"Albert","42559252Y"),
				array(10,"Berta","41956456V"));
							
	/* * * * * * * * * * * * * * * * * * * * * * * * 
	 * Array de Comandes                           *
	 * Camp 0: ID comanda                          *
	 * Camp 1: ID zona comanda                     *
	 * Camp 2: Destí de la comanda                 *
	 * Camp 3: Volum de la comanda                 *
	 * Camp 4: Data de la comanda (AAAAMMDD)       *
	 * Camp 5: km de la comanda                    *
	 * Camp 6: Conductor assignat                  *
	 * * * * * * * * * * * * * * * * * * * * * * * */
	$comandes = array(	array(0,1,"Granollers",7,"2013-11-22",23.20,1),
						array(1,1,"Terrassa",11,"2013-11-22",35.4,1),
						array(2,1,"Mataró",14,"2013-11-11",32.4,4),
						array(3,1,"Vic",5,"2013-11-11",72.2,5),
						array(4,2,"Tortosa",13,"2013-11-10",180,1),
						array(5,2,"Lleida",12,"2013-11-09",170,6),
						array(6,3,"Madrid",24,"2013-11-22",625,7),
						array(7,3,"Granada",17,"2013-11-01",886,10),
						array(8,3,"Lugo",17,"2013-11-01",995,3),
						array(9,3,"Santiago de Compostela",19,"2013-11-22",1104,9));
	
	
	/* * * * * * * * * * * * * * * * 
	 * Array de zones              *
	 * Camp 0: ID zona             *
	 * Camp 1: Nom de la zona      *
	 * * * * * * * * * * * * * * * */		
	$zones = array ( array (1,"BCN"),
					 array (2,"CAT"),
					 array (3,"ESP"));
						
						
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * 
	 * Array de vehicles                                   *
	 * Camp 0: ID (matricula)                              *	
	 * Camp 1: Tipus de vehicle (ZONA QUE POT COBRIR)      *
	 * Camp 2: Conductor assignat                          *
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * */ 
	$vehicles = array ( array("7049CTG",1,1),
						array("6798G",1,2),
						array("6987FGT",2,5),
						array("9813OT",2,8),
						array("7654EDF",3,10),
						array("5976FCB",3,6),
						array("4563GH",3,9));

?>
