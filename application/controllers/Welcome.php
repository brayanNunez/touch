<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
       
    }

	public function index()
	{
        $this->load->view('home/header');
        $this->load->view('home/index');
        $this->load->view('home/footer_2');
	}

    public function que()
    {
        $this->load->view('home/header');
        $this->load->view('home/que-es');
        $this->load->view('home/footer');
    }

    public function quienes()
    {
        $this->load->view('home/header');
        $this->load->view('home/quienes-usan');
        $this->load->view('home/footer');
    }

    public function como()
    {
        $this->load->view('home/header');
        $this->load->view('home/como-funciona');
        $this->load->view('home/footer');
    }

    public function beneficios()
    {
        $this->load->view('home/header');
        $this->load->view('home/beneficios');
        $this->load->view('home/footer');
    }

    public function precios()
    {
        $this->load->view('home/header');
        $this->load->view('home/precios');
        $this->load->view('home/footer');
    }

    public function faq()
    {
        $this->load->view('home/header');
        $this->load->view('home/faq');
        $this->load->view('home/footer');
    }

    public function prensa()
    {
        $this->load->view('home/header');
        $this->load->view('home/prensa');
        $this->load->view('home/footer');
    }

    public function terminos()
    {
        $this->load->view('home/header');
        $this->load->view('home/terminos-condiciones');
        $this->load->view('home/footer');
    }
    public function registro() {
        $this->load->view('home/header_2');
        $this->load->view('mantenimiento/formularios/registro');
        $this->load->view('home/footer_2');
    }
}
