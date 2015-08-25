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
}

?>