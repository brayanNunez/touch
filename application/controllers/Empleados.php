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

        // $data["transaccionCorrecta"] = true;
        // if ($lista == false) {
        //    $data["transaccionCorrecta"] = false;
        // }
        // } else {

                
            // // echo "Correcto<br>";
            // if ($lista === -1) {
            //      $this->load->view('layout/default/header');
            //     $this->load->view('layout/default/left-sidebar');
            //     $this->load->view('empleados/empleados_lista');
            //     $this->load->view('layout/default/footer');
            //     //No retorno nada
            // } 
                $data['lista'] = $lista;
                $this->load->view('layout/default/header');
                $this->load->view('layout/default/left-sidebar');
                $this->load->view('empleados/empleados_lista', $data);
                $this->load->view('layout/default/footer');

            // }
        // }

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

     public function insertar()
    {
        // echo "bien"; exit;

        // $this->form_validation->set_rules('empleado_codigo', 'Codigo', 'required');
        //  $this->form_validation->set_rules('empleado_id', 'Identificacion', 'required');
        // // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        // // $this->form_validation->set_rules('email', 'Email', 'required');

        // if ($this->form_validation->run() == FALSE)
        // {
        // $this->load->view('layout/default/header');
        // $this->load->view('layout/default/left-sidebar');
        // $this->load->view('empleados/empleados');
        // $this->load->view('layout/default/footer');
        // }
        // else
        // {
        //     echo "bien"; exit;
        // }

         
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
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        ];

        if (!$this->Empleado_model->insertar($data)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }
        redirect('empleados/index');
    }

    public function editar($id)
    {
        $resultado = $this->Empleado_model->cargar(decryptIt($id)); 
        if ($resultado == false) {
            echo "Error en la transaccion";
        } else {
            // echo "Correcto<br>";
            if ($resultado === -1) {
                echo 'No retorno nada';

            } else {
                // echo $resultado->codigo;exit();
                $data['resultado'] = $resultado;
                $this->load->view('layout/default/header');
                $this->load->view('layout/default/left-sidebar');
                $this->load->view('empleados/empleados_editar', $data);
                $this->load->view('layout/default/footer');
            }
        }


    }

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
            'fechaNacimiento' => $this->input->post('empleado_fechaNacimiento'),
            'fechaIngresoEmpresa' => $this->input->post('empleado_fechaIngreso'),
            'descripcion' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        );
        // echo $id; exit();
        $data['id'] = decryptIt($id);
        if (!$this->Empleado_model->modificar($data)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto"; 
        }
        redirect('empleados/index');
    }

    public function eliminar()
    {

       $id = $_POST['idEliminar'];
        if (!$this->Empleado_model->eliminar(decryptIt($id))) {
            echo false; 
        } else {
            echo true; 
            // $this->index();
        }

    }


   

    public function cargar()
    {
        $resultado = $this->Empleado_model->cargar(97);
        if ($resultado == false) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto<br>";
            if ($resultado === -1) {
                //No retorno nada

            } else {
                echo $resultado->nombreCompleto;
            }
        }
    }


    public function cargarTodos()
    {
        $resultado = $this->Empleado_model->cargarTodos();
        if ($resultado == false) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto<br>";
            if ($resultado === -1) {
                //No retorno nada
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