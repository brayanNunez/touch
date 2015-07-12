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
        $this->load->view('home/header.php');
        $this->load->view('home/index.php');
        $this->load->view('home/footer.php');
	}

    public function que()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/que_es.php');
        $this->load->view('home/footer.php');
    }

    public function como()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/como_funciona.php');
        $this->load->view('home/footer.php');
    }

    public function beneficios()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/beneficios.php');
        $this->load->view('home/footer.php');
    }

    public function precios()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/precios.php');
        $this->load->view('home/footer.php');
    }

    public function faq()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/faq.php');
        $this->load->view('home/footer.php');
    }

    public function prensa()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/prensa.php');
        $this->load->view('home/footer.php');
    }

    public function terminos()
    {
        $this->load->view('home/header.php');
        $this->load->view('home/terminos_condiciones.php');
        $this->load->view('home/footer.php');
    }
}
