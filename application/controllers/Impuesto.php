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



    public function impuestosSugerencia()
    {
        //  $json = '[ { "value": 1 , "text": "Impuestos directos" },
        //           { "value": 2 , "text": "Impuestos indirectos"},
        //           { "value": 3 , "text": "Impuestos 3"},
        //           { "value": 4 , "text": "Impuestos 4"}
        //         ]';
        // echo $json; ;

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Impuesto_model->cargarTodos($idEmpresa); 
        // $impuestos = array();



        // foreach ($resultado as $v){
        //     array_push($impuestos,$v['nombre']);
        // }

        echo json_encode($resultado); 
    }

    public function eliminar()
    {
       $id = $_POST['idEliminar'];
        if (!$this->Impuesto_model->eliminar(decryptIt($id))) {
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

        $impuesto = array(
         'nombre' => $this->input->post('impuesto_nombre'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

         $data['impuesto'] = $impuesto;

         // echo print_r($impuesto); exit();
         $resultado = $this->Impuesto_model->verificarNombre($data);
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

      public function insertar(){

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['impuesto'] =array(
         'nombre' => $this->input->post('impuesto_nombre'),
         'descripcion' => $this->input->post('impuesto_descripcion'),
         'valor' => $this->input->post('impuesto_valor'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

         $res = $this->Impuesto_model->insertar($data);
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
        $resultado = $this->Impuesto_model->cargar(decryptIt($id)); 
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {


        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['impuesto'] =array(
         'idImpuesto' => decryptIt($this->input->post('idImpuesto')),
         'nombre' => $this->input->post('impuesto_nombre'),
         'descripcion' => $this->input->post('impuesto_descripcion'),
         'valor' => $this->input->post('impuesto_valor'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );
        // echo print_r($data); exit();


        if (!$this->Impuesto_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
        
    }

}