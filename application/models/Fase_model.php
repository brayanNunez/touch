<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fase_model extends CI_Model
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
            
            $fases = $this->db->get_where('fase', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$fases) throw new Exception("Error en la BD"); 
            $fases = $fases->result_array();
            // $resultado = array();
            //  foreach ($fases as $row)
            // {
            //     $idEmpleado = $row['idEmpleado'];
            //     $this->db->select('descripcion');
            //     $query = $this->db->get_where('palabraClaveEmpleado', array('idEmpleado' => $idEmpleado));
            //     if (!$query) throw new Exception("Error en la BD"); 
            //     $row['palabras'] = $query->result_array();
            //     array_push($resultado, $row);
            // }


            $this->db->trans_commit();
            return $fases;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }


    
}

?>