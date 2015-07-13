<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/servicios_lista');
        $this->load->view('layout/default/footer');
    }
    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/servicios');
        $this->load->view('layout/default/footer');
    }
    public function editar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/servicios_editar');
        $this->load->view('layout/default/footer');
    }
}

?>