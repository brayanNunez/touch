<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financiamiento extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');

    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/financiamiento_lista');
        $this->load->view('layout/default/footer');
    }

    public function nuevo()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/financiamiento');
        $this->load->view('layout/default/footer');
    }

}