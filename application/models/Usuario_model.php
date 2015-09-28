<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function existeCorreo($data) {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('usuario', array('correo' => $data['correo'],  'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $existe = 0;
            if ($query->num_rows() > 0) {
                $existe = 1;
            }
            $this->db->trans_commit();
            return $existe;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function insertarUsuario($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('usuario', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $insert_id = $this->db->insert_id();
            $roles = $data['roles'];
//            $idRol = 1;
            foreach ($roles as $rol=>$valor) {
                if($valor) {
                    $row = array(
                        'idUsuario' => $insert_id,
                        'idPrivilegio' => $valor,
                    );
                    $query = $this->db->insert('privilegio_usuario', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
//                $idRol++;
            }
            $this->db->trans_commit();
            $path = 'files/'.$data['datos']['idEmpresa'].'/'.$insert_id;
            if(!is_dir($path)){
                mkdir($path);
            }
            return $insert_id;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarUsuario($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('usuario', array('idUsuario' => $id,  'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server

                $idUsuario = $row['idUsuario'];
                $roles = array(
                    'rolAdministrador' => '',
                    'rolAprobador' => '',
                    'rolCotizador' => '',
                    'rolContador' => ''
                );
                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $idUsuario));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                foreach ($privilegios as $pr) {
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = 'checked';
                            break;
                        case 2:
                            $roles['rolAprobador'] = 'checked';
                            break;
                        case 3:
                            $roles['rolCotizador'] = 'checked';
                            break;
                        case 4:
                            $roles['rolContador'] = 'checked';
                            break;
                    }
                }
                $row['roles'] = $roles;
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarUsuarios($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            $usuarios = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$usuarios) {
                throw new Exception("Error en la BD");
            }
            $usuarios = $usuarios->result_array();
            $resultado = array();
            foreach ($usuarios as $row)
            {
                $idUsuario = $row['idUsuario'];
                $roles = array(
                    'rolAdministrador' => '',
                    'rolAprobador' => '',
                    'rolCotizador' => '',
                    'rolContador' => ''
                );
                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $idUsuario));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                foreach ($privilegios as $pr) {
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = 'checked';
                            break;
                        case 2:
                            $roles['rolAprobador'] = 'checked';
                            break;
                        case 3:
                            $roles['rolCotizador'] = 'checked';
                            break;
                        case 4:
                            $roles['rolContador'] = 'checked';
                            break;
                    }
                }

                $row['roles'] = $roles;
                array_push($resultado, $row);
            }

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function modificarUsuario($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idUsuario', $data['id']);
            $query = $this->db->update('usuario', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function eliminarUsuario($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idUsuario', $id);
            $query = $this->db->update('usuario', array('eliminado' => 1));
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    //----------------------------------------Metodos viejos----------------------------

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