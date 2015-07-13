<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');

    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/general');
        $this->load->view('layout/default/footer');
    }

    public function monedas()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/monedas');
        $this->load->view('layout/default/footer');
    }

    public function listaMonedas()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/lista-monedas');
        $this->load->view('layout/default/footer');
    }

    public function listaPagos()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/lista-pagos');
        $this->load->view('layout/default/footer');
    }

    public function listaPlanes()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/lista-planes');
        $this->load->view('layout/default/footer');
    }

    public function planes()
    {
        $this->load->view('layout/default/header');
        $this->load->view('administrador/left-sidebar');
        $this->load->view('administrador/planes');
        $this->load->view('layout/default/footer');
    }
}
