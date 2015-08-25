<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }


    function inserta_usuario($datos = array())
    {
        if (!$this->_required(array("email_usuario", "clave"), $datos)) {
            return FALSE;
        }
        //clave, encripto
        $datos['clave'] = md5($datos['clave']);

        $this->db->insert('usuario', $datos);
        return $this->db->insert_id();
    }


    public function insertar()
    {
        $datos = array(
            'idEmpresa' => '3',
            'codigo' => 'Juan68',
            'identificacion' => '202020202',
            'nombreCompleto' => 'juan perez rojas',
            'fechaNacimiento' => '2013-01-19',
            'fechaIngresoEmpresa' => '2013-01-19',
            'descripcion' => 'Pérez',
            'eliminado' => '0'
        );

        if (!$this->Empleado_model->insertar($datos)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto";
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

    public function modificar()
    {
        $data['datos'] = array(
            'identificacion' => '302020202',
            'fechaNacimiento' => '2015-01-19',
            'nombreCompleto' => 'Maria perez rojas'
        );
        $data['id'] = 109;
        if (!$this->Empleado_model->modificar($data)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }

    }

    public function eliminar()
    {
        if (!$this->Empleado_model->eliminar(99)) {
            echo "Error en la transaccion";
        } else {
            echo "Correcto";
        }
    }
}

?>