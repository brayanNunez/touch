<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');

        $sessionActual = $this->session->userdata('logged_in');
        if(!$sessionActual) {
            redirect(base_url());
        } elseif (!($sessionActual['administrador'])) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('inicio/index.php');
        $this->load->view('layout/default/footer');
    }

}
