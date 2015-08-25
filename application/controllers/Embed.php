<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Embed extends CI_Controller
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
        $this->load->view('embed/generar');
        $this->load->view('layout/default/footer');
    }

    public function embedFormulario()
    {
        $this->load->view('embed/header');
        $this->load->view('embed/embed-formulario');
        $this->load->view('embed/footer');
    }

    public function embedCotizar()
    {
        $this->load->view('embed/header');
        $this->load->view('embed/embed-cotizar');
        $this->load->view('embed/footer');
    }

    public function embedProducto()
    {
        $this->load->view('embed/header');
        $this->load->view('embed/embed-producto');
        $this->load->view('embed/footer');
    }

}
