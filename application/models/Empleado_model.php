<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Empleado_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    

    function existeIdentificacion($identificacion)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('empleado', array('identificacion' => $identificacion,  'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");   
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


    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('empleado', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");   
            $insert_id = $this->db->insert_id();
            $palabras = explode(",", $data['palabras']); ;
            foreach ($palabras as $palabra) {
                $row = array(
                'idEmpleado' => $insert_id,
                'descripcion' => $palabra
                );
                $query = $this->db->insert('palabraClaveEmpleado', $row);
                if (!$query) throw new Exception("Error en la BD");   
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('empleado', array('idEmpleado' => $id,  'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");   
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
                $this->db->select('descripcion');
                $palabras = $this->db->get_where('palabraClaveEmpleado', array('idEmpleado' => $id));
                if (!$palabras) throw new Exception("Error en la BD");   
                $row['palabras'] = $palabras->result_array();
            }
            // print_r ($row);exit();
             $this->db->trans_commit();
             return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function modificar($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idEmpleado', $data['id']);
            $query = $this->db->update('empleado', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");   
            $palabras = explode(",", $data['palabras']); ;
            $this->db->where('idEmpleado', $data['id']);
            $query = $this->db->delete('palabraClaveEmpleado');
            if (!$query) throw new Exception("Error en la BD"); 
            foreach ($palabras as $palabra) {
                $row = array(
                'idEmpleado' => $data['id'],
                'descripcion' => $palabra
                );
                $query = $this->db->insert('palabraClaveEmpleado', $row);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargarTodos()
    {
        try{
            $this->db->trans_begin();
            
            $empleados = $this->db->get_where('empleado', array('eliminado' => 0));
            if (!$empleados) throw new Exception("Error en la BD"); 
            $empleados = $empleados->result_array();
            $resultado = array();
             foreach ($empleados as $row)
            {
                $idEmpleado = $row['idEmpleado'];
                $this->db->select('descripcion');
                $query = $this->db->get_where('palabraClaveEmpleado', array('idEmpleado' => $idEmpleado));
                if (!$query) throw new Exception("Error en la BD"); 
                $row['palabras'] = $query->result_array();
                array_push($resultado, $row);
            }


            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }

    public function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idEmpleado', $id);
            $query = $this->db->update('empleado', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    
}

?>