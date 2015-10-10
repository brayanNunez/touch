<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registro_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function registrar($data) {
        try{
            $this->db->trans_begin();

            $queryE = $this->db->insert('empresa', $data['datos']);
            $idEmpresa = $this->db->insert_id();

            $data['direccion']['idEmpresa'] = $idEmpresa;
            $queryD = $this->db->insert('direccionempresa', $data['direccion']);

            $data['usuario']['idEmpresa'] = $idEmpresa;
            $queryU = $this->db->insert('usuario', $data['usuario']);

            if (!$queryE || !$queryD || !$queryU) {
                throw new Exception("Error en la BD");
            }

            $pathEmpresa = 'files/empresas/'.$idEmpresa;
            $pathUsuarios = 'files/empresas/'.$idEmpresa.'/usuarios';
            $pathClientes = 'files/empresas/'.$idEmpresa.'/clientes';
            $pathProveedores = 'files/empresas/'.$idEmpresa.'/proveedores';
            if(!is_dir($pathEmpresa)){
                mkdir($pathEmpresa);
                if(is_dir($pathEmpresa)){
                    mkdir($pathUsuarios);
                    mkdir($pathClientes);
                    mkdir($pathProveedores);
                }
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function existeIdentificacion($data) {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('empresa', array('cedula' => $data['cedula']));
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

}

?>