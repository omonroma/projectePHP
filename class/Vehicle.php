<?php

class Vehicle {
    private $matricula = null;
    private $tipus = null;
    private $conductor = null;

    function __construct($matricula, $tipus, $conductor) {
        $this->matricula = $matricula;
        $this->tipus = $tipus;
        $this->conductor = $conductor;
        
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getTipus() {
        return $this->tipus;
    }

    public function getConductor() {
        return $this->conductor;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setTipus($tipus) {
        $this->tipus = $tipus;
    }

    public function setConductor($conductor) {
        $this->conductor = $conductor;
    }


    // Mètodes
    
    
    // Afegir vehicles
    
        
    // Eliminar vehicle

    
}
