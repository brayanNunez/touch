<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impuesto extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
         $this->load->model('Impuesto_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Impuesto_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('impuestos/impuesto_lista', $data);
        $this->load->view('layout/default/footer');
    }

}