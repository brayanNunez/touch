<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');

        $this->load->model('Cotizacion_model');
    } 

    public function index()
    {

        verificarLogin();//helper

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        
        $data['cantidades'] = $this->Cotizacion_model->datosAccesosDirectos($idEmpresa); 
        $data['resultado'] = $this->Cotizacion_model->datosGrafica($idEmpresa); 
        if ($data['resultado'] === false || $data['cantidades'] === false) {
            echo "Error en la transacción";
        } else {
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('inicio/index.php', $data);
            $this->load->view('layout/default/footer');
        }
        
    }

}
