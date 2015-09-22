<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function index($login = false)
    {
        $data['login'] = $login;
        // echo $this->session->userdata('inicialURL'); exit();

        if ($login) {
            $data['inicialURL'] = $this->session->userdata('inicialURL'); 
        } 
        $this->load->view('home/header');
        $this->load->view('home/index', $data);
        $this->load->view('home/footer_2');

    }

    public function que()
    {
        $this->load->view('home/header');
        $this->load->view('home/que-es');
        $this->load->view('home/footer_2');
    }

    public function quienes()
    {
        $this->load->view('home/header');
        $this->load->view('home/quienes-usan');
        $this->load->view('home/footer_2');
    }

    public function como()
    {
        $this->load->view('home/header');
        $this->load->view('home/como-funciona');
        $this->load->view('home/footer_2');
    }

    public function beneficios()
    {
        $this->load->view('home/header');
        $this->load->view('home/beneficios');
        $this->load->view('home/footer_2');
    }

    public function precios()
    {
        $this->load->view('home/header');
        $this->load->view('home/precios');
        $this->load->view('home/footer_2');
    }

    public function faq()
    {
        $this->load->view('home/header');
        $this->load->view('home/faq');
        $this->load->view('home/footer_2');
    }

    public function prensa()
    {
        $this->load->view('home/header');
        $this->load->view('home/prensa');
        $this->load->view('home/footer_2');
    }

    public function terminos()
    {
        $this->load->view('home/header');
        $this->load->view('home/terminos-condiciones');
        $this->load->view('home/footer_2');
    }

    public function registro()
    {
        $this->load->view('home/header_2');
        $this->load->view('home/registro-nuevo');
        $this->load->view('home/footer_2');
    }

}
