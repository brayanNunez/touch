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

    
}

?>