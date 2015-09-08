<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Empleado_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $lista = $this->Empleado_model->cargarTodos();
                $data['lista'] = $lista;
                $this->load->view('layout/default/header');
                $this->load->view('layout/default/left-sidebar');
                $this->load->view('empleados/empleados_lista', $data);
                $this->load->view('layout/default/footer');
    }
    // public function index()
    // {

    //             $this->load->view('layout/default/header');
    //             $this->load->view('layout/default/left-sidebar');
    //             $this->load->view('empleados/empleados_lista');
    //             $this->load->view('layout/default/footer');
    // }

    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('empleados/empleados');
        $this->load->view('layout/default/footer');
    }

    //Metodo llamado mediante ajax
     public function insertar()
    {
        $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = [
            'idEmpresa' => '1',
            'codigo' => $this->input->post('empleado_codigo'),
            'identificacion' => $this->input->post('empleado_id'),
            'nombre' => $this->input->post('empleado_nombre'),
            'primerApellido' => $this->input->post('empleado_primerApellido'),
            'segundoApellido' => $this->input->post('empleado_segundoApellido'),
            'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('empleado_fechaNacimiento'))),
            'fechaIngresoEmpresa' => date("Y-m-d", strtotime($this->input->post('empleado_fechaIngreso'))),
            // 'fechaNacimiento' => $this->input->post('empleado_fechaNacimiento'),
            // 'fechaIngresoEmpresa' => $this->input->post('empleado_fechaIngreso'),
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        ];

        if (!$this->Empleado_model->insertar($data)) {
            //Error en la transaccion
            echo 0;
        } else {
            // correcto
            echo 1;
        }
        
    }

    public function editar($id)
    {
        $resultado = $this->Empleado_model->cargar(decryptIt($id)); 
        if ($resultado === false || $resultado === []) {
            echo "Error en la transaccion";
        } else {
                $data['resultado'] = $resultado;
                $this->load->view('layout/default/header');
                $this->load->view('layout/default/left-sidebar');
                $this->load->view('empleados/empleados_editar', $data);
                $this->load->view('layout/default/footer');
        }
    }


    //Metodo llamado mediante ajax
    public function modificar($id)
    {
        $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = array(
            'idEmpresa' => '1',
            'codigo' => $this->input->post('empleado_codigo'),
            'identificacion' => $this->input->post('empleado_id'),
            'nombre' => $this->input->post('empleado_nombre'),
            'primerApellido' => $this->input->post('empleado_primerApellido'),
            'segundoApellido' => $this->input->post('empleado_segundoApellido'),
            // 'fechaNacimiento' => $this->input->post('empleado_fechaNacimiento'),
            // 'fechaIngresoEmpresa' => $this->input->post('empleado_fechaIngreso'),
            'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('empleado_fechaNacimiento'))),
            'fechaIngresoEmpresa' => date("Y-m-d", strtotime($this->input->post('empleado_fechaIngreso'))),
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        );
        $data['id'] = decryptIt($id);
        if (!$this->Empleado_model->modificar($data)) {
            //Error en la transaccion
            echo 0;
        } else {
            //correcto
            echo 1;
        }
        
    }

    //este metodo es llamado mediante ajax
    public function eliminar()
    {

       $id = $_POST['idEliminar'];
        if (!$this->Empleado_model->eliminar(decryptIt($id))) {
            echo false; 
        } else {
            echo true; 
        }

    }

    //este metodo es llamado mediante ajax
    public function existeIdentificacion()
    {
        $identificacion = $_POST['empleado_id'];
        $resultado = $this->Empleado_model->existeIdentificacion($identificacion);
        if ($resultado === false) {
            //Error en la transaccion
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



    public function cargarTodos()
    {
        $resultado = $this->Empleado_model->cargarTodos();
        if ($resultado == false) {
            echo "Error en la transaccion";
        } else {
            foreach ($resultado as $fila) {
                $data[] = array(
                    'id_user' => $fila->identificacion,
                    'nombre' => $fila->nombreCompleto,
                    'email' => $fila->fechaNacimiento
                );

                echo $fila->identificacion . "<br><br>";
                echo $fila->nombreCompleto . "<br><br>";
                echo $fila->fechaNacimiento . "<br><br>";

            }
        }

    }

}

?>