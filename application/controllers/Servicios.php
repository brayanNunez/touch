<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Servicio_model');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('servicios/servicios_lista');
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        $sessionActual = $this->session->userdata('logged_in');

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('servicios/servicios');
        $this->load->view('layout/default/footer');
    }

    public function existeCodigo() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['codigo'] = $_POST['servicio_codigo'];
        $data['idEmpresa'] = $idEmpresa;
        //el codigo se puede repetir solo en diferentes empresas
        $resultado = $this->Servicio_model->existeCodigo($data);
        if ($resultado === false) {
            //Error en la transacción
            echo 0;
        } else {
            if ($resultado == 1) {
                //Ya existe el codigo
                echo 1;
            } else {
                //codigo valido
                echo 2;
            }
        }
    }

    public function insertar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['impuestos'] = $this->input->post('servicio_impuestos');
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'codigo' => $this->input->post('servicio_codigo'),
            'nombre' => $this->input->post('servicio_nombre'),
            'descripcion' => $this->input->post('servicio_descripcion'),
            'utilidad' => $this->input->post('servicio_utilidad'),
            'total' => $this->input->post('servicio_total'),
            'estado' => 0
        );

        $servicio = $this->Servicio_model->insertar($data);
        if(!$servicio) {
            //Error en la transaccion
            echo 0;
        } else {
            echo 1;
        }
    }

    public function editar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('servicios/servicios_editar');
        $this->load->view('layout/default/footer');
    }

}

?>