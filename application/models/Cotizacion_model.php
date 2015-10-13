<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cotizacion_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get('plantilladiseno');
            if (!$query) throw new Exception("Error en la BD");   
            // $row = array();
            // if ($query->num_rows() > 0) {
                $array = $query->result_array();
                // $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el serv
            // }
            // print_r($array);exit();
            $this->db->trans_commit();
            return $array;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    
}

?>