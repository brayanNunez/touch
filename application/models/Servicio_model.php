<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Servicio_model extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function existeCodigo($data) {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('servicio', array('codigo' => $data['codigo'],  'estado' => 0));
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

    public function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('servicio', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

//            $impuestos = explode(",", $data['impuestos']);
//            foreach ($impuestos as $impuesto) {
//                $row = array(
//                    'idServicio' => $insert_id,
//                    'idImpuesto' => $impuesto
//                );
//                $query = $this->db->insert('impuestoServicio', $row);
//                if (!$query) {
//                    throw new Exception("Error en la BD");
//                }
//            }

            $this->db->trans_commit();

            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            $servicios = $this->db->get_where('servicio', array('estado' => 0,'idEmpresa' => $idEmpresa));
            if (!$servicios) {
                throw new Exception("Error en la BD");
            }
            $servicios = $servicios->result_array();

            $this->db->trans_commit();
            return $servicios;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('servicio', array('idServicio' => $id, 'estado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>