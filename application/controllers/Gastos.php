<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Gasto_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Gasto_model->cargarTodos($idEmpresa);
        $categorias = $this->Gasto_model->categoriasGasto();
        $formasPago = $this->Gasto_model->formasPago($idEmpresa);
        $personas = $this->Gasto_model->proveedores($idEmpresa);

        $data['lista'] = $lista;
        $data['categoriasGasto'] = $categorias;
        $data['formasPago'] = $formasPago;
        $data['personas'] = $personas;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('gastos/gastos_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $gastoFijo = $this->input->post('gasto_tipo');
        if($gastoFijo == 1) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 1,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        } else {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 0,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        }

        $res = $this->Gasto_model->insertar($data);
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
        $resultado = $this->Gasto_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {
        $data['idGasto'] = decryptIt($this->input->post('idGasto'));
        $gastoFijo = $this->input->post('gasto_tipo');
        if($gastoFijo == 1) {
            $data['datos'] = array(
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 1,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        } else {
            $data['datos'] = array(
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 0,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        }
        // echo print_r($data); exit();

        if (!$this->Gasto_model->modificar($data)) {
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
        if (!$this->Gasto_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0; 
        } else {
            //correcto
            echo 1; 
        }
    }

    public function verificarCodigo(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $gasto = array(
            'idEmpresa' => $idEmpresa,
            'codigo' => $this->input->post('gasto_codigo'),
            'eliminado' => '0'
        );
        $data['gasto'] = $gasto;

        // echo print_r($impuesto); exit();
        $resultado = $this->Gasto_model->verificarCodigo($data);
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

?>