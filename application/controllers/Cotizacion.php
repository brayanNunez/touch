<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizacion extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
       
    }

        public function index($lang = '')
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/lista');
        $this->load->view('layout/default/footer');
    }

    public function form()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/paso1');
        $this->load->view('layout/default/footer');
    }


}
