<?php

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this -> is_logged_in())
            redirect("login");
    }

    public function index()
    {

    }

    public function add()
    {
        $this -> load -> view('add');
    }






}
?>