<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horas_model extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('horas', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $insert_id = $this->db->insert_id();

            $this->db->trans_commit();
            return $insert_id;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargarDatos($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            $horasEmpresa = $this->db->get_where('horas', array('idEmpresa' => $idEmpresa));
            if (!$horasEmpresa) {
                throw new Exception("Error en la BD");
            }
            $array = $horasEmpresa->result_array();
            $resultado = array_shift($array);

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>