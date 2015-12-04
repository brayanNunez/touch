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

            $this->db->query("CALL insertarValoresPredeterminados('$idEmpresa')");

            $pathEmpresa = 'files/empresas/'.$idEmpresa;
            $pathUsuarios = 'files/empresas/'.$idEmpresa.'/usuarios';
            $pathClientes = 'files/empresas/'.$idEmpresa.'/clientes';
            $pathProveedores = 'files/empresas/'.$idEmpresa.'/proveedores';
            $pathCotizaciones = 'files/empresas/'.$idEmpresa.'/cotizaciones';
            if(!is_dir($pathEmpresa)){
                mkdir($pathEmpresa);
                if(is_dir($pathEmpresa)){
                    mkdir($pathUsuarios);
                    mkdir($pathClientes);
                    mkdir($pathProveedores);
                    mkdir($pathCotizaciones);
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

    function cargar($id) {
        try {
            $this->db->trans_begin();

            $query = $this->db->get_where('empresa', array('idEmpresa' => $id,  'activa' => 1));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server

                $query2 = $this->db->get_where('direccionempresa', array('idEmpresa' => $id));
                if (!$query2) {
                    throw new Exception("Error en la BD");
                }
                $arrayDireccion = $query2->result_array();
                $row['direccion'] = array_shift($arrayDireccion);

                $this->db->where('idEmpresa', $id);
                $this->db->order_by("idUsuario", "asc");
                $query3 = $this->db->get('usuario');
                if (!$query3) {
                    throw new Exception("Error en la BD");
                }
                $arrayUsuario = $query3->result_array();
                $row['usuario'] = array_shift($arrayUsuario);
            }
            // print_r ($row);exit();
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

            $this->db->where('idEmpresa', $data['id']);
            $query = $this->db->update('empresa', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->where('idEmpresa', $data['id']);
            $query = $this->db->update('direccionempresa', $data['direccion']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->where('idUsuario', $data['usuario']['idUsuario']);
            $query = $this->db->update('usuario', $data['usuario']);
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

    function cambiar_imagen($data) {
        try{
            $photo = '';
            $this->db->trans_begin();

            $this->db->select('logo');
            $this->db->where('idEmpresa', $data['id']);
            $this->db->from('empresa');
            $query1 = $this->db->get();
            if (!$query1) {
                throw new Exception("Error en la BD");
            }
            if($query1->num_rows() > 0) {
                $datos = $query1->result_array();
                $photo = $datos[0]['logo'];
                if(!$photo) {
                    $photo = 'sinFoto';
                }
            } else {
                $photo = 'sinFoto';
            }
            if($photo) {
                $this->db->where('idEmpresa', $data['id']);
                $query2 = $this->db->update('empresa', $data['datos']);
                if (!$query2) {
                    throw new Exception("Error en la BD");
                }
            }
            $this->db->trans_commit();
            return $photo;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cambiar_imagenFirma($data) {
        try{
            $photo = '';
            $this->db->trans_begin();

            $this->db->select('firma');
            $this->db->where('idEmpresa', $data['id']);
            $this->db->from('empresa');
            $query1 = $this->db->get();
            if (!$query1) {
                throw new Exception("Error en la BD");
            }
            if($query1->num_rows() > 0) {
                $datos = $query1->result_array();
                $photo = $datos[0]['firma'];
                if(!$photo) {
                    $photo = 'sinFoto';
                }
            } else {
                $photo = 'sinFoto';
            }
            if($photo) {
                $this->db->where('idEmpresa', $data['id']);
                $query2 = $this->db->update('empresa', $data['datos']);
                if (!$query2) {
                    throw new Exception("Error en la BD");
                }
            }
            $this->db->trans_commit();
            return $photo;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function completar($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idEmpresa', $data['id']);
            $query = $this->db->update('empresa', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            if(isset($data['usuario'])) {
                $this->db->where('idUsuario', $data['usuario']['idUsuario']);
                $query = $this->db->update('usuario', $data['usuario']);
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

    function paises()
    {
        try{
            $this->db->trans_begin();

            $paises = $this->db->get('pais');
            if (!$paises) {
                throw new Exception("Error en la BD");
            }
            $paises = $paises->result_array();

            $this->db->trans_commit();
            return $paises;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>