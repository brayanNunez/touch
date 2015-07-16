<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
       
    }

        public function index()
    {
        
    }

    public function listaAsignar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('solicitud/solicitudSinCliente');
        $this->load->view('layout/default/footer');
    }

    public function listaPendientes()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('solicitud/solicitudConCliente');
        $this->load->view('layout/default/footer');
    }


}
