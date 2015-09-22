<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
//        $this->load->model('Usuario_model');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('usuarios/usuarios_lista');
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('usuarios/usuarios');
        $this->load->view('layout/default/footer');
    }

    public function editar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('usuarios/usuarios_info');
        $this->load->view('layout/default/footer');
    }

    public function existeUsuario()
    {
        $usuario = "brayan22";
        echo $this->Usuario_model->usuario_login($usuario);
    }

    //Metodo llamado mediante ajax
    public function verificar() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        


        // $sess_array = array();
            // foreach ($result as $row) {
                $sess_array = array(
                    'idEmpresa' => 1,
                    'administrador' => true,
                    'aprobador' => true,
                    'cotizador' => true,
                    'contador' => true
                );
                $this->session->set_userdata('logged_in', $sess_array);
            // }
            echo $username.', '.$password;

        // $result = $this->Estudiante_model->validar_ingreso($username, $password);
        // if($result) {
        //     $sess_array = array();
        //     foreach ($result as $row) {
        //         $sess_array = array(
        //             'id' => $row->idEstudiante,
        //             'carnet' => $row->carnet,
        //             'tipo' => 1
        //         );
        //         $this->session->set_userdata('logged_in', $sess_array);
        //     }
        //     return true;
        // } else {
        //     $this->form_validation->set_message('check_database', 'Datos invalidos');
        //     return false;
        // }
    }
}

?>