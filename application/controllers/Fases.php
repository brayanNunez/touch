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

    public function verificarCodigos(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $fases = array();

        $fase = array(
         'codigo' => $this->input->post('fase_codigo'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

        array_push($fases, $fase);
        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadSubfases');
        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                  $fase = array(
                 'codigo' => $this->input->post('fase_codigo'.$contador),
                 'idEmpresa' => $idEmpresa,
                 'eliminado' => '0'
                 );
                array_push($fases, $fase);
                $fasesObtenidos++;
            }
            $contador++;
         }

         $data['fases'] = $fases;
         $res = $this->Fase_model->verificarCodigos($data);
         echo $res;
    }


    public function insertar(){

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['fasePadre'] =array(
         'codigo' => $this->input->post('fase_codigo'),
         'nombre' => $this->input->post('fase_nombre'),
         'notas' => $this->input->post('fase_notas'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

        $fases = array();
        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadSubfases');
        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                  $fase = array(
                 'codigo' => $this->input->post('fase_codigo'.$contador),
                 'nombre' => $this->input->post('fase_nombre'.$contador),
                 'notas' => $this->input->post('fase_notas'.$contador),
                 'idEmpresa' => $idEmpresa,
                 'eliminado' => '0'
                 );
                array_push($fases, $fase);
                $fasesObtenidos++;
            }
            $contador++;
         }

         $data['subFases'] = $fases;
         $res = $this->Fase_model->insertar($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo encryptIt($res);
        }
    }

}

?>