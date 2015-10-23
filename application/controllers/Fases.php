<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fases extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Fase_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Fase_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('fases/fases', $data);
        $this->load->view('layout/default/footer');
    }

    public function eliminar()
    {
       $id = $_POST['idEliminar'];
        if (!$this->Fase_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0; 
        } else {
            //correcto
            echo 1; 
        }
    }



    public function nuevaFase(){
        echo '0';
    }

}

?>