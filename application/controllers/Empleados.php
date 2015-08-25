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
         $lista = $this->Empleado_model->cargarTodos();
        if ($lista == false) {
             echo "Error en la transaccion";
        } else{
            // echo "Correcto<br>";
            if ($lista === -1) {
            //No retorno nada 
            } else {
                $data['lista'] = $lista;
                // foreach($lista as $fila)
                // {
                    // $data[] = array(            
                    //     'id_user'       =>      $fila->identificacion,
                    //     'nombre'        =>      $fila->nombreCompleto,
                    //     'email'         =>      $fila->fechaNacimiento
                    //     );
                    // }
                    
                    $this->load->view('layout/default/header');
                    $this->load->view('layout/default/left-sidebar');
                    $this->load->view('empleados/empleados_lista', $data);
                    $this->load->view('layout/default/footer');
                
             }
        }
       
    }
    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('empleados/empleados');
        $this->load->view('layout/default/footer');
    }
    public function editar($id)
    {
        $resultado = $this->Empleado_model->cargar($id);
        if ($resultado == false) {
             echo "Error en la transaccion";
        } else{
            // echo "Correcto<br>";
            if ($resultado === -1) {
            //No retorno nada
                
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


    public function insertar(){
        $datos= array(
            'idEmpresa'       =>   '3',
            'codigo'       =>   $this->input->post('empleado_codigo'),
            'identificacion'          =>   $this->input->post('empleado_id'),
            'nombreCompleto'          =>   $this->input->post('empleado_nombre'),
            'fechaNacimiento'  =>    $this->input->post('empleado_fechaNacimiento'),
            'fechaIngresoEmpresa'          =>   $this->input->post('empleado_fechaIngreso'),
            'descripcion'          =>   $this->input->post('empleado_descripcion'),
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
            //No retorno nada
                
            } else {
                 echo $resultado->nombreCompleto;
             }
        }
    }


    public function cargarTodos(){
        $resultado = $this->Empleado_model->cargarTodos();
        if ($resultado == false) {
             echo "Error en la transaccion";
        } else{
            echo "Correcto<br>";
            if ($resultado === -1) {
            //No retorno nada 
            } else {
                foreach($resultado as $fila)
                {
                    $data[] = array(            
                        'id_user'       =>      $fila->identificacion,
                        'nombre'        =>      $fila->nombreCompleto,
                        'email'         =>      $fila->fechaNacimiento
                        );
                    
                    echo $fila->identificacion."<br><br>";
                    echo $fila->nombreCompleto."<br><br>";
                    echo  $fila->fechaNacimiento."<br><br>";
                }
             }
        }
    }

    public function modificar($id){
         $data['datos']= array(
            'idEmpresa'       =>   '3',
            'codigo'       =>   $this->input->post('empleado_codigo'),
            'identificacion'          =>   $this->input->post('empleado_id'),
            'nombreCompleto'          =>   $this->input->post('empleado_nombre'),
            'fechaNacimiento'  =>    $this->input->post('empleado_fechaNacimiento'),
            'fechaIngresoEmpresa'          =>   $this->input->post('empleado_fechaIngreso'),
            'descripcion'          =>   $this->input->post('empleado_descripcion'),
            'eliminado'          =>   '0'
            );
        $data['id'] = $id; 
        if (!$this->Empleado_model->modificar($data)) {
             echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }

    }

    public function eliminar($id){
       if (!$this->Empleado_model->eliminar($id)) {
             echo "Error en la transaccion";
        } else {
            echo "Correcto";
           $this->index();
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