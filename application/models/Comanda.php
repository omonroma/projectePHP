<?php

class Comanda {
    
    private $idComanda = null;
    private $idZonaComanda = null;
    private $desti = null;
    private $volumComanda = null;
    private $data = null;
    private $quilometres = null;
    private $conductorAssignat = null;
    
    
    function __construct($idComanda, $idZonaComanda, $desti, $volumComanda, $data, $quilometres, $conductorAssignat) {
        $this->idComanda = $idComanda;
        $this->idZonaComanda = $idZonaComanda;
        $this->desti = $desti;
        $this->volumComanda = $volumComanda;
        $this->data = $data;
        $this->quilometres = $quilometres;
        $this->conductorAssignat = $conductorAssignat;
        
    }
    
    
    public function getIdComanda() {
        return $this->idComanda;
    }

    public function getIdZonaComanda() {
        return $this->idZonaComanda;
    }

    public function getDesti() {
        return $this->desti;
    }

    public function getVolumComanda() {
        return $this->volumComanda;
    }

    public function getData() {
        return $this->data;
    }

    public function getQuilometres() {
        return $this->quilometres;
    }

    public function getConductorAssignat() {
        return $this->conductorAssignat;
    }

    public function setIdComanda($idComanda) {
        $this->idComanda = $idComanda;
    }

    public function setIdZonaComanda($idZonaComanda) {
        $this->idZonaComanda = $idZonaComanda;
    }

    public function setDesti($desti) {
        $this->desti = $desti;
    }

    public function setVolumComanda($volumComanda) {
        $this->volumComanda = $volumComanda;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setQuilometres($quilometres) {
        $this->quilometres = $quilometres;
    }

    public function setConductorAssignat($conductorAssignat) {
        $this->conductorAssignat = $conductorAssignat;
    }
    
    
    // Mètodes
    
    // Afegir comanda
    
    
    
    // Total comandes
    
    
    
    
}
