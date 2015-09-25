<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Cliente_model');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/clientes_lista');
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/clientes_crear');
        $this->load->view('layout/default/footer');
    }

        //Metodo llamado mediante ajax
     public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa, 
            'juridico' => $this->input->post('cliente_tipo'),
            'identificacion' => $this->input->post('cliente_id'),
            'nombre' => $this->input->post('cliente_nombre'),
            'primerApellido' => $this->input->post('cliente_apellido1'),
            'segundoApellido' => $this->input->post('cliente_apellido2'),
            'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
            'correo' => $this->input->post('cliente_correo'),
            'activo' => '1',
            'eliminado' => '0'
        );
        if (!$this->Cliente_model->insertar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }
        
    }

    public function editar()
    {
        $data['archivos'] = array();
        $data['archivos'][] = array('file_name' => 'archivo1', 'file_ext' => '.png', 'file_date' => '2015/08/04',
            'file_description' => 'Imagen del cliente', 'file_size' => '13 KB');
        $data['archivos'][] = array('file_name' => 'archivo2', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato individual de trabajo', 'file_size' => '187 KB');
        $data['archivos'][] = array('file_name' => 'archivo3', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Planta de trabajo', 'file_size' => '152 KB');
        $data['archivos'][] = array('file_name' => 'archivo4', 'file_ext' => '.docx', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato en formato .docx', 'file_size' => '24 KB');
        $data['archivos'][] = array('file_name' => 'archivo5', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Productos ofrecidos', 'file_size' => '48 KB');
        $data['archivos'][] = array('file_name' => 'archivo6', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato por tiempo determinado', 'file_size' => '48 KB');

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/cliente_info', $data);
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