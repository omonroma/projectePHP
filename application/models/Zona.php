<?php

class Zona {
    
    private $idZona = null;
    private $nomZona = null;

    function __construct($idZona, $nomZona) {
        $this->idZona = $idZona;
        $this->nomZona = $nomZona;
    }
    
    public function getIdZona() {
        return $this->idZona;
    }

    public function getNomZona() {
        return $this->nomZona;
    }

    public function setIdZona($idZona) {
        $this->idZona = $idZona;
    }

    public function setNomZona($nomZona) {
        $this->nomZona = $nomZona;
    }

}
