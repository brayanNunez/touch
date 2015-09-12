<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function independiente()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('perfil/independiente');
        $this->load->view('layout/default/footer');
    }

    public function empresa()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('perfil/empresa');
        $this->load->view('layout/default/footer');
    }

    public function usuario()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('perfil/usuario');
        $this->load->view('layout/default/footer');
    }

}

?>