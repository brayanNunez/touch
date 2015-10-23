<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model
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

            $query = $this->db->insert('proveedor', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $insert_id = $this->db->insert_id();
            $palabras = explode(",", $data['palabras']);
            foreach ($palabras as $palabra) {
                $row = array(
                    'idProveedor' => $insert_id,
                    'descripcion' => $palabra
                );
                $query = $this->db->insert('palabraclaveproveedor', $row);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }
            $contactos = $data['contactos'];
//            echo print_r($contactos); exit();
            foreach ($contactos as $contacto) {
                $contacto['idProveedor'] = $insert_id;
                $query = $this->db->insert('proveedorcontacto', $contacto);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }

            $pathProveedor = 'files/empresas/'.$data['datos']['idEmpresa'].'/proveedores/'.$insert_id;
            if(!is_dir($pathProveedor)) {
                mkdir($pathProveedor);
            }
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

            $proveedores = $this->db->get_where('proveedor', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$proveedores) throw new Exception("Error en la BD");
            $proveedores = $proveedores->result_array();

            $this->db->trans_commit();
            return $proveedores;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('proveedor', array('idProveedor' => $id,  'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server

                $this->db->select('nombre');
                $nacionalidad = $this->db->get_where('pais', array('idPais' => $row['nacionalidad']));
                if (!$nacionalidad) {
                    throw new Exception("Error en la BD");
                }
                $paisNacionalidad = $nacionalidad->result_array();
                $row['paisNacionalidad'] = array_shift($paisNacionalidad)['nombre'];

                $this->db->select('descripcion');
                $palabras = $this->db->get_where('palabraclaveproveedor', array('idProveedor' => $id));
                if (!$palabras) {
                    throw new Exception("Error en la BD");
                }
                $row['palabras'] = $palabras->result_array();

                $contactos = $this->db->get_where('proveedorcontacto', array('idProveedor' => $id,  'eliminado' => 0));
                if (!$contactos) {
                    throw new Exception("Error en la BD");
                }
                $row['contactos'] = $contactos->result_array();

//                $archivos = $this->db->get_where('archivo', array('idCliente' => $id));
//                if (!$archivos) throw new Exception("Error en la BD");
//                $row['archivos'] = $archivos->result_array();
            }
//             print_r ($row);exit();
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function modificar($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idProveedor', $data['id']);
            $query = $this->db->update('proveedor', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $palabras = explode(",", $data['palabras']); ;
            $this->db->where('idProveedor', $data['id']);
            $query = $this->db->delete('palabraclaveproveedor');
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            foreach ($palabras as $palabra) {
                $row = array(
                    'idProveedor' => $data['id'],
                    'descripcion' => $palabra
                );
                $query = $this->db->insert('palabraclaveproveedor', $row);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }

            $nuevos = $data['nuevos'];
            foreach ($nuevos as $nuevo) {
                $query = $this->db->insert('proveedorcontacto', $nuevo);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }

            $editados = $data['editados'];
            foreach ($editados as $editado) {
                $this->db->where('idProveedorContacto', $editado['idProveedorContacto']);
                $query = $this->db->update('proveedorcontacto', $editado);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }

            $eliminados = $data['eliminados'];
            foreach ($eliminados as $eliminado) {
                $this->db->where('idProveedorContacto', $eliminado['idProveedorContacto']);
                $query = $this->db->update('proveedorcontacto', $eliminado);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idProveedor', $id);
            $query = $this->db->update('proveedor', array('eliminado' => 1));
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>