<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('gastos/gastos_adicionales');
        $this->load->view('layout/default/footer');
    }

}

?>