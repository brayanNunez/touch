<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasPersona extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Categoriapersona_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $lista = $this->Categoriapersona_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('categorias/categoriasPersona_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['datos'] =array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('categoriaPersona_nombre'),
            'descripcion' => $this->input->post('categoriaPersona_descripcion'),
            'eliminado' => '0'
        );

        $res = $this->Categoriapersona_model->insertar($data);
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
        $resultado = $this->Categoriapersona_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {
        $data['idCategoria'] = decryptIt($this->input->post('idCategoriaPersona'));
        $data['datos'] = array(
            'nombre' => $this->input->post('categoriaPersona_nombre'),
            'descripcion' => $this->input->post('categoriaPersona_descripcion'),
            'eliminado' => '0'
        );
//        echo print_r($data); exit();

        if (!$this->Categoriapersona_model->modificar($data)) {
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
        if (!$this->Categoriapersona_model->eliminar(decryptIt($id))) {
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

        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('categoriaPersona_nombre'),
            'eliminado' => '0'
        );

        // echo print_r($impuesto); exit();
        $resultado = $this->Categoriapersona_model->verificarNombre($data);
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