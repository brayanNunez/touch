<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/productos_lista');
        $this->load->view('layout/default/footer');
    }
    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/productos');
        $this->load->view('layout/default/footer');
    }
    public function editar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/productos_editar');
        $this->load->view('layout/default/footer');
    }
    public function formulario()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/solicitudes');
        $this->load->view('layout/default/footer');
    }
    public function tipos()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/tipos_moneda');
        $this->load->view('layout/default/footer');
    }
}

?>