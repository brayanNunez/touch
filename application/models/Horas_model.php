<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horas_model extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function guardarCambios($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idEmpresa', $data['idEmpresa']);
            $query = $this->db->update('horas', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            echo $e;
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