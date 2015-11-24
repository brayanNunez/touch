<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Horas_model');
    } 

    public function index() { }

    public function guardarCambios() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $incluirFestivosNoObligatorios = $this->input->post('checkbox_festivosNoObligatorios');
        if($incluirFestivosNoObligatorios) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'diasAnno' => $this->input->post('horas_diasAnno'),
                'finesSemana' => $this->input->post('horas_finesSemana'),
                'festivosObligatorios' => $this->input->post('horas_festivosObligatorios'),
                'incluirNoObligatorios' => 1,
                'festivosNoObligatorios' => $this->input->post('horas_festivosNoObligatorios'),
                'vacaciones' => $this->input->post('horas_vacaciones'),
                'promedioBajas' => $this->input->post('horas_promedioBajas'),
                'diasFacturables' => $this->input->post('horas_diasFacturables'),
                'promedioHorasDiarias' => $this->input->post('horas_promedioHorasDiarias'),
                'cantidadManoObra' => $this->input->post('horas_cantidadManoObra')
            );
        } else {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'diasAnno' => $this->input->post('horas_diasAnno'),
                'finesSemana' => $this->input->post('horas_finesSemana'),
                'festivosObligatorios' => $this->input->post('horas_festivosObligatorios'),
                'incluirNoObligatorios' => 0,
//                'festivosNoObligatorios' => $this->input->post('horas_festivosNoObligatorios'),
                'vacaciones' => $this->input->post('horas_vacaciones'),
                'promedioBajas' => $this->input->post('horas_promedioBajas'),
                'diasFacturables' => $this->input->post('horas_diasFacturables'),
                'promedioHorasDiarias' => $this->input->post('horas_promedioHorasDiarias'),
                'cantidadManoObra' => $this->input->post('horas_cantidadManoObra')
            );
        }

        $resultado = $this->Horas_model->insertar($data);
        if (!$resultado) {
            //Error en la transacci�n
            echo 0;
        } else {
            // correcto
            echo 1;
        }
    }

    public function cargarDatos() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Horas_model->cargarDatos($idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

}
