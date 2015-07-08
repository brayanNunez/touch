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
        // $this->load->view('layout/default/header.php');
        $this->load->view('index');
        // $this->load->view('layout/default/footer.php');
	}
}
