<?php

class ArOsTrans {
    
    private $nomEmpresa = null;
    private $cifEmpresa = null;
    private $transportista = null;
    private $comanda = null;
    private $vehicle = null;
    private $zona = null;
    
    function __construct($nomEmpresa, $cifEmpresa) {
        $this->nomEmpresa = $nomEmpresa;
        $this->cifEmpresa = $cifEmpresa;
        $this->transportista = array();
        $this->comanda = array();
        $this->vehicle = array();
        $this->zona = array();
    }

    
    public function getNomEmpresa() {
        return $this->nomEmpresa;
    }

    public function getCifEmpresa() {
        return $this->cifEmpresa;
    }

    public function setNomEmpresa($nomEmpresa) {
        $this->nomEmpresa = $nomEmpresa;
    }

    public function setCifEmpresa($cifEmpresa) {
        $this->cifEmpresa = $cifEmpresa;
    }
    
    public function getTransportista() {
        return $this->transportista;
    }

    public function getComanda() {
        return $this->comanda;
    }

    public function getVehicle() {
        return $this->vehicle;
    }

    public function getZona() {
        return $this->zona;
    }

    public function setTransportista($transportista) {
        $this->transportista = $transportista;
    }

    public function setComanda($comanda) {
        $this->comanda = $comanda;
    }

    public function setVehicle($vehicle) {
        $this->vehicle = $vehicle;
    }

    public function setZona($zona) {
        $this->zona = $zona;
    }
    
    
    //Afegir transportista a la seva array
    public function inserirTransportista($idTransp,$nomTransp,$dniTransp){
            $tr = new Transportista($idTransp,$nomTransp,$dniTransp);
            array_push($this->transportista, $tr);
    }

    //el metode per veure els transportistes és un get
    public function veureTransportistes(){
            return $this->transportista; 
    }
    
    // Nom del transportista a partir de la seva ID
    public function nomTransportista($id){
        $nom = null;
        for($i = 0; $i < length($this->transportista);$i++){
            if ($this->transportista == $id) {
                $nom = $this->transportista($i).getNom();
            }
        }
        return $nom;
    }
    
    /*Retorna el nom de la zona a parir del seu número de zona*/
    public function nomZona($id){
        $zona = null;
        for($i = 0; $i < length($this->zona); $i++){
            if ($this->zona == $id){
                $zona = $this->zona($i).getZona();
            }
        }
        return $zona;
    }

}
