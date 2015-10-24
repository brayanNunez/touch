<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fase_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

     public function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idFase', $id);
            $query = $this->db->update('fase', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    

    function verificarCodigos($data)
    {
        try{
            $this->db->trans_begin();

            $fases = $data['fases'];
            $existe = 0;
            $codigoRepetido = '';
            // echo print_r($fases); exit();
            foreach ($fases as $fase) {
                $query = $this->db->get_where('fase', $fase);
                if (!$query) throw new Exception("Error en la BD");  
                if ($query->num_rows() > 0) {
                    $existe = 1;
                    $codigoRepetido = $fase['codigo'];
                } 
            }
            $this->db->trans_commit();
            if ($existe) {
                return $codigoRepetido;
            } else {
                return true;
            }
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('fase', $data['fasePadre']);
            if (!$query) throw new Exception("Error en la BD");   
            $insert_id = $this->db->insert_id();
            $fases = $data['subFases'];
            // echo print_r($fases); exit();
            foreach ($fases as $fase) {
                $fase['idFasePadre'] = $insert_id;
                $query = $this->db->insert('fase', $fase);
                if (!$query) throw new Exception("Error en la BD");   
            }
            $this->db->trans_commit();
            return $insert_id;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }
    

    function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();
            
            $fases = $this->db->get_where('fase', array('eliminado' => 0,'idEmpresa' => $idEmpresa, 'idFasePadre' => null));
            if (!$fases) throw new Exception("Error en la BD"); 
            $fases = $fases->result_array();
            $this->db->trans_commit();
            return $fases;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }


    
}

?>