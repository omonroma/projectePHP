<?php

class Transportista {
    private $id = null;
    private $nom = null;
    private $dni = null;
    
    
    function __construct($id, $nom, $dni) {
        $this->id = $id;
        $this->nom = $nom;
        $this->dni = $dni;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }
    
    
    /*Realització dels mètodes*/
        
    //Nom del transportista

    
    // Eliminar transportista
    
    
    // Número de comandes
    
    
    // Total de quilòmetres
    
    
    // Total de dietes
    
    
    // Total a pagar
    
    
    // Vehicle
    

}
