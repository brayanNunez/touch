<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiposMoneda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Tipomoneda_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $lista = $this->Tipomoneda_model->cargarTodos($idEmpresa);
        $tipoDefecto = $this->Tipomoneda_model->tipoPrincipal($idEmpresa);
        $data['lista'] = $lista;
        $data['monedaDefecto'] = $tipoDefecto;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('monedas/tipoMoneda_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['moneda'] =array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('tipoMoneda_nombre'),
            'signo' => $this->input->post('tipoMoneda_signo'),
            'tipoCambio' => $this->input->post('tipoMoneda_tipoCambio'),
            'eliminado' => '0'
        );

        $res = $this->Tipomoneda_model->insertar($data);
        if (!$res) {
            //Error en la transacci�n
            echo 0;
        } else {
            // correcto
            echo encryptIt($res);
        }
    }

    public function editar()
    {
        $id = $_POST['idEditar'];
        $resultado = $this->Tipomoneda_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {
        $data['moneda'] = array(
            'idMoneda' => decryptIt($this->input->post('idTipoMoneda')),
            'nombre' => $this->input->post('tipoMoneda_nombre'),
            'signo' => $this->input->post('tipoMoneda_signo'),
            'tipoCambio' => $this->input->post('tipoMoneda_tipoCambio'),
            'eliminado' => '0'
        );
        // echo print_r($data); exit();

        if (!$this->Tipomoneda_model->modificar($data)) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }

    }

    public function eliminar()
    {
        $id = $_POST['idEliminar'];
        if (!$this->Tipomoneda_model->eliminar(decryptIt($id))) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function verificarNombre(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $moneda = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('tipoMoneda_nombre'),
            'eliminado' => '0'
        );
        $data['moneda'] = $moneda;

        // echo print_r($impuesto); exit();
        $resultado = $this->Tipomoneda_model->verificarNombre($data);
        if ($resultado === false) {
            //Error en la transacci�n
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

    public function tiposMoneda() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Tipomoneda_model->tiposMoneda($idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function cambiarTipoPrincipal()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['idEmpresa'] = $idEmpresa;
        $idMoneda = $_POST['idMoneda'];
        $data['datos'] = array(
            'idMoneda' => $idMoneda
        );
        $resultado = $this->Tipomoneda_model->cambiarTipoPrincipal($data);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function datosMonedaPrincipal() {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $tipoDefecto = $this->Tipomoneda_model->tipoPrincipal($idEmpresa);
        $resultado = $this->Tipomoneda_model->cargar($tipoDefecto);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

}

?>