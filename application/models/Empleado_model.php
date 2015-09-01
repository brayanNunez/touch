<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Empleado_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }


    function insertar($datos)
    {


        $this->db->trans_begin();

        $this->db->insert('empleado', $datos);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    function cargar($id)
    {

        $this->db->trans_begin();

        $query = $this->db->get_where('empleado', array('idEmpleado' => $id));

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return -1;
            }
        }
    }

    function cargarTodos()
    {
        $this->db->trans_begin();

        $query = $this->db->get('empleado');

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return -1;
            }
        }
    }

    public function eliminar($id)
    {

        $this->db->trans_begin();

        $this->db->delete('empleado', array('idEmpleado' => $id));

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    //actualizamos los datos del usuario con id = 3
    public function modificar($data)
    {

        $this->db->trans_begin();

        $this->db->where('idEmpleado', $data['id']);
        $this->db->update('empleado', $data['datos']);


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }


    }

    public function pruebaTransacciones($datos)
    {

        //empezamos una transacción
        $this->db->trans_begin();


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;

        } else {
            $this->db->trans_commit();
            return true;
        }

    }

}

?>