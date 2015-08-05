<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/clientes_lista');
        $this->load->view('layout/default/footer');
    }
    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/clientes');
        $this->load->view('layout/default/footer');
    }
    public function editar()
    {
        $data['archivos'] = array();
        $data['archivos'][] = array('file_name' => 'archivo1', 'file_ext' => '.jpg','file_date' => '2015/08/04',
            'file_description' => 'Primer archivo del cliente', 'file_size' => '55 KB');
        $data['archivos'][] = array('file_name' => 'archivo2', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Segundo archivo del cliente', 'file_size' => '505 KB');
        $data['archivos'][] = array('file_name' => 'archivo3', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Tercer archivo del cliente', 'file_size' => '40 KB');
        $data['archivos'][] = array('file_name' => 'archivo4', 'file_ext' => '.docx', 'file_date' => '2015/08/04',
            'file_description' => 'Cuarto archivo del cliente', 'file_size' => '14 KB');
        $data['archivos'][] = array('file_name' => 'archivo5', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Quinto archivo del cliente', 'file_size' => '15 KB');
        $data['archivos'][] = array('file_name' => 'archivo6', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Sexto archivo del cliente', 'file_size' => '79 KB');

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/cliente_info', $data);
        $this->load->view('layout/default/footer');
    }
    public function reporte()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('reportes/reporte_cliente');
        $this->load->view('layout/default/footer');
    }
}

?>