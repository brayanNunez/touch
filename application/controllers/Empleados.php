<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Empleado_model');
    }

    public function index()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/empleados_lista');
        $this->load->view('layout/default/footer');
    }
    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/empleados');
        $this->load->view('layout/default/footer');
    }
    public function editar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('mantenimiento/formularios/empleados_editar');
        $this->load->view('layout/default/footer');
    }


    public function insertar(){
        $datos= array(
            'idEmpresa'       =>   '3',
            'codigo'       =>   'Juan68',
            'identificacion'          =>   '202020202',
            'nombreCompleto'          =>   'juan perez rojas',
            'fechaNacimiento'  =>    '2013-01-19',
            'fechaIngresoEmpresa'          =>   '2013-01-19',
            'descripcion'          =>   'Pérez',
            'eliminado'          =>   '0'
            );

        if (!$this->Empleado_model->insertar($datos)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }
    }
    public function cargar(){
        $resultado = $this->Empleado_model->cargar(97);
        if ($resultado == false) {
             echo "Error en la transaccion";
        } else{
            echo "Correcto<br>";
            if ($resultado === -1) {
            echo "No retorno nada";
            } else {
                 echo $resultado->nombreCompleto;
             }
        }
    }

    public function modificar(){
        $data['datos'] = array(
            'identificacion'          =>   '302020202',
            'fechaNacimiento'          =>   '2015-01-19',
            'nombreCompleto'          =>   'Maria perez rojas'
        );
        $data['id'] = 109; 
        if (!$this->Empleado_model->modificar($data)) {
             echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }

    }

    public function eliminar(){
       if (!$this->Empleado_model->eliminar(99)) {
             echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }
    }

    // public function pruebaTransacciones(){
    //     $datos= array(
    //         'idEmpresa'       =>   '1',
    //         'codigo'       =>   'Juan68',
    //         'identificacion'          =>   '202020202',
    //         'nombreCompleto'          =>   'juan perez rojas',
    //         'fechaNacimiento'  =>    '2013-01-19',
    //         'fechaIngresoEmpresa'          =>   '2013-01-19',
    //         'descripcion'          =>   'Pérez',
    //         'eliminado'          =>   '0'
    //         );
    //     if ($this->Empleado_model->pruebaTransacciones($datos)) {
    //         $this->index();
    //     } else{
    //      echo "Transaccion no efectuada";
    //     }
         
    // }
}

?>