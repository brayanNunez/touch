<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Empleado_model');
        // $this->load->library('simple_html_dom');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Empleado_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('empleados/empleados_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        verificarLogin();//helper
        $lista = $this->Empleado_model->cargarSalarios();
        $data['resultado'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('empleados/empleados', $data);
        $this->load->view('layout/default/footer');
    }

    //Metodo llamado mediante ajax
     public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa, 
            'codigo' => $this->input->post('empleado_codigo'),
            'identificacion' => $this->input->post('empleado_id'),
            'nombre' => $this->input->post('empleado_nombre'),
            'primerApellido' => $this->input->post('empleado_primerApellido'),
            'segundoApellido' => $this->input->post('empleado_segundoApellido'),
            'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('empleado_fechaNacimiento'))),
            'fechaIngresoEmpresa' => date("Y-m-d", strtotime($this->input->post('empleado_fechaIngreso'))),
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        );
        if (!$this->Empleado_model->insertar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }
        
    }

    public function editar($id)
    {
        verificarLogin();//helper
        $resultado = $this->Empleado_model->cargar(decryptIt($id)); 
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacción";
        } else {
                $data['resultado'] = $resultado;
                $this->load->view('layout/default/header');
                $this->load->view('layout/default/left-sidebar');
                $this->load->view('empleados/empleados_info', $data);
                $this->load->view('layout/default/footer');
        }
    }


    //Metodo llamado mediante ajax
    public function modificar($id)
    {
        $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = array(
            'idEmpresa' => '1',//Obtener de la variable de sesión
            'codigo' => $this->input->post('empleado_codigo'),
            'identificacion' => $this->input->post('empleado_id'),
            'nombre' => $this->input->post('empleado_nombre'),
            'primerApellido' => $this->input->post('empleado_primerApellido'),
            'segundoApellido' => $this->input->post('empleado_segundoApellido'),
            'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('empleado_fechaNacimiento'))),
            'fechaIngresoEmpresa' => date("Y-m-d", strtotime($this->input->post('empleado_fechaIngreso'))),
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        );
        $data['id'] = decryptIt($id);
        if (!$this->Empleado_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
        
    }

    //Metodo es llamado mediante ajax
    public function eliminar()
    {
       $id = $_POST['idEliminar'];
        if (!$this->Empleado_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0; 
        } else {
            //correcto
            echo 1; 
        }
    }

    //Metodo es llamado mediante ajax
    public function existeIdentificacion()
    {
        $data['identificacion'] = $_POST['empleado_id'];
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] =  $sessionActual['idEmpresa'];
        $resultado = $this->Empleado_model->existeIdentificacion($data);
        if ($resultado === false) {
            //Error en la transacción
            echo 0; 
        } else {
            if ($resultado == 1) {
                //Ya existe esta identificacion
                echo 1;
            } else {
                //Identificacion Valida
                echo 2;
            }
        }

    }

}

?>