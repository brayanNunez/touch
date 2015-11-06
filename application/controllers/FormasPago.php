<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormasPago extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('FormaPago_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $lista = $this->FormaPago_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('formasPago/formaPago_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['formaPago'] =array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('formaPago_nombre'),
            'descripcion' => $this->input->post('formaPago_descripcion'),
            'eliminado' => '0'
        );

        $res = $this->FormaPago_model->insertar($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo encryptIt($res);
        }
    }

    public function editar()
    {
        $id = $_POST['idEditar'];
        $resultado = $this->FormaPago_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {
        $data['formaPago'] = array(
            'idFormaPago' => decryptIt($this->input->post('idFormaPago')),
            'nombre' => $this->input->post('formaPago_nombre'),
            'descripcion' => $this->input->post('formaPago_descripcion'),
            'eliminado' => '0'
        );
        // echo print_r($data); exit();

        if (!$this->FormaPago_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }

    }

    public function eliminar()
    {
        $id = $_POST['idEliminar'];
        if (!$this->FormaPago_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function verificarNombre(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $formaPago = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('formaPago_nombre'),
            'eliminado' => '0'
        );
        $data['formaPago'] = $formaPago;

        // echo print_r($impuesto); exit();
        $resultado = $this->FormaPago_model->verificarNombre($data);
        if ($resultado === false) {
            //Error en la transacción
            echo 0;
        } else {
            if ($resultado == 1) {
                //Ya existe esta identificacion
                echo 1;
            } else {
                //Identificacion Valida
                echo 2;
            }
        }
    }

}