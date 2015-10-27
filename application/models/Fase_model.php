<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fase_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function modificar($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idFase', $data['fasePadre']['idFase']);
            $query = $this->db->update('fase', $data['fasePadre']);
            if (!$query) throw new Exception("Error en la BD"); 

            $nuevos = $data['nuevos'];
            foreach ($nuevos as $nuevo) {
                $query = $this->db->insert('fase', $nuevo);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $editados = $data['editados'];

            foreach ($editados as $editado) {
                $this->db->where('idFase', $editado['idFase']);
                $query = $this->db->update('fase', $editado);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $eliminados = $data['eliminados'];

            foreach ($eliminados as $eliminado) {
                $this->db->where('idFase', $eliminado['idFase']);
                $query = $this->db->update('fase', $eliminado);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

     public function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idFase', $id);
            $query = $this->db->update('fase', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->where('idFasePadre', $id);
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

        function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('fase', array('idFase' => $id,  'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");   
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server

                $subfases = $this->db->get_where('fase', array('idFasePadre' => $id,  'eliminado' => 0));
                if (!$subfases) throw new Exception("Error en la BD");   
                $row['subfases'] = $subfases->result_array();

            }
            // print_r ($row);exit();
             $this->db->trans_commit();
             return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }


    
}

?>