<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Impuesto_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }



    function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();
            
            $impuestos = $this->db->get_where('impuesto', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$impuestos) throw new Exception("Error en la BD"); 
            $resultado = $impuestos->result_array();
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

            $this->db->where('idImpuesto', $id);
            $query = $this->db->update('impuesto', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function verificarNombre($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;
            
            $query = $this->db->get_where('impuesto', $data['impuesto']);
            if (!$query) throw new Exception("Error en la BD");  
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

            $query = $this->db->insert('impuesto', $data['impuesto']);
            if (!$query) throw new Exception("Error en la BD");   
            $insert_id = $this->db->insert_id();
            $this->db->trans_commit();
            return $insert_id;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('impuesto', array('idImpuesto' => $id,  'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");   
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
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

            $this->db->where('idImpuesto', $data['impuesto']['idImpuesto']);
            $query = $this->db->update('impuesto', $data['impuesto']);
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