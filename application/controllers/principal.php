<?php

class Principal extends CI_Controller {
 
    function __construct() 
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
        //$this->load->model('comanda_model');
    }
    
    function index()
    {
        $this->load->view('index');
    }
    function novacomanda(){
        $data['conductors'] = array('1' => 'PEPE', '2'=>'fulano');//$this->transportista_model->getTransportistes();
        $data['vehicles'] = array('1' => 'PEPE', '2'=>'fulano');//$this->vehicle_model->getVehicle();
        $data['zona'] = array('1' => 'PEPE', '2'=>'fulano');//$this->zona_model->getZona();
        $this->load->view('novaComanda_view',$data);
    }
    function altaComanda(){
   //     $zona = $this->input->post('zona');
     //   $this->comanda_model->novaComanda(dafasd,df,asdfds,af,asd);
    }
}
?>