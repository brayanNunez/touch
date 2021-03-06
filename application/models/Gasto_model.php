<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gasto_model extends CI_Model
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

//            print_r($data); exit();
            $query = $this->db->insert('gasto', $data['datos']);
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

    function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();
            
            $gastos = $this->db->get_where('gasto', array('idEmpresa' => $idEmpresa ,'eliminado' => 0));
            if (!$gastos) {
                throw new Exception("Error en la BD");
            }
            $resultado = $gastos->result_array();
            $contador = 0;
            foreach ($resultado as $gasto) {
                $this->db->select('nombre');
                $this->db->where('idCategoriaGasto' , $gasto['idCategoriaGasto']);
                $query1 = $this->db->get('categoriagasto');
                $this->db->select('nombre');
                $this->db->where('idTiempo', $gasto['formaPago']);
                $query2 = $this->db->get('tiempo');
                $this->db->select('juridico, nombre, primerApellido, segundoApellido');
                $this->db->where('idProveedor', $gasto['idProveedor']);
                $query3 = $this->db->get('proveedor');
                if (!$query1 || !$query2 || !$query3) {
                    throw new Exception("Error en la BD");
                }

                $categoria = '';
                if($query1->num_rows() > 0) {
                    $valores_query1 = $query1->result_array();
                    $valor = array_shift($valores_query1);
                    $categoria = $valor['nombre'];
                }
                $formaPago = '';
                if($query2->num_rows() > 0) {
                    $valores_query2 = $query2->result_array();
                    $valor = array_shift($valores_query2);
                    $formaPago = $valor['nombre'];
                }
                $persona = '';
                if($query3->num_rows() > 0) {
                    $valores_query3 = $query3->result_array();
                    $valores = array_shift($valores_query3);
                    $persona = $valores['nombre'];
                    if($valores['juridico'] == 0) {
                        $persona .= ' '.$valores['primerApellido'].' '.$valores['segundoApellido'];
                    }
                }
                $resultado[$contador]['datosAdicionales'] = array(
                    'categoria' => $categoria,
                    'formaPago' => $formaPago,
                    'persona' => $persona
                );
                if($gasto['gastoFijo']) {
                    $resultado[$contador++]['datosAdicionales']['tipo'] = 'Fijo';
                } else {
                    $resultado[$contador++]['datosAdicionales']['tipo'] = 'Variable';
                }
            }

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();

            $query = $this->db->get_where('gasto', array('idGasto' => $id, 'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
            }

            $this->db->select('nombre');
            $this->db->where('idCategoriaGasto' , $row['idCategoriaGasto']);
            $query1 = $this->db->get('categoriagasto');
            $this->db->select('nombre');
            $this->db->where('idTiempo', $row['formaPago']);
            $query2 = $this->db->get('tiempo');
            $this->db->select('juridico, nombre, primerApellido, segundoApellido');
            $this->db->where('idProveedor', $row['idProveedor']);
            $query3 = $this->db->get('proveedor');
            if (!$query1 || !$query2 || !$query3) {
                throw new Exception("Error en la BD");
            }

            $categoria = '';
            if($query1->num_rows() > 0) {
                $valores_query1 = $query1->result_array();
                $valor = array_shift($valores_query1);
                $categoria = $valor['nombre'];
            }
            $formaPago = '';
            if($query2->num_rows() > 0) {
                $valores_query2 = $query2->result_array();
                $valor = array_shift($valores_query2);
                $formaPago = $valor['nombre'];
            }
            $persona = '';
            if($query3->num_rows() > 0) {
                $valores_query3 = $query3->result_array();
                $valores = array_shift($valores_query3);
                $persona = $valores['nombre'];
                if($valores['juridico'] == 0) {
                    $persona .= ' '.$valores['primerApellido'].' '.$valores['segundoApellido'];
                }
            }
            $row['datosAdicionales'] = array(
                'categoria' => $categoria,
                'formaPago' => $formaPago,
                'persona' => $persona
            );
            if($row['gastoFijo']) {
                $row['datosAdicionales']['tipo'] = 'Fijo';
            } else {
                $row['datosAdicionales']['tipo'] = 'Variable';
            }
//            print_r ($row);exit();

            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function modificar($data)
    {
        try{
            $this->db->trans_begin();

//            print_r($data);exit();
            $this->db->where('idGasto', $data['idGasto']);
            $query = $this->db->update('gasto', $data['datos']);
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

    public function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idGasto', $id);
            $query = $this->db->update('gasto', array('eliminado' => 1));
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

    function verificarCodigo($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('gasto', $data['gasto']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
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

    function categoriasGasto($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idCategoriaGasto, nombre');
            $this->db->where('idEmpresa', $idEmpresa);
            $categoriasGasto = $this->db->get('categoriagasto');
            if (!$categoriasGasto) {
                throw new Exception("Error en la BD");
            }
            $resultado = $categoriasGasto->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    function verificarNombreCategoria($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('categoriagasto', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
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
    function insertarCategoria($data)
    {
        try{
            $this->db->trans_begin();

//            print_r($data); exit();
            $query = $this->db->insert('categoriagasto', $data['datos']);
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

    function formasPago() {
        try{
            $this->db->trans_begin();

            $formasPago = $this->db->get('tiempo');
            if (!$formasPago) {
                throw new Exception("Error en la BD");
            }
            $resultado = $formasPago->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    //Metodos ya no se usan
    function verificarNombreFormaPago($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('formapago', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
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
    function insertarFormaPago($data)
    {
        try{
            $this->db->trans_begin();

//            print_r($data); exit();
            $query = $this->db->insert('formapago', $data['datos']);
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

    function proveedores($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idProveedor, juridico, nombre, primerApellido, segundoApellido');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            $proveedores = $this->db->get('proveedor');
            if (!$proveedores) {
                throw new Exception("Error en la BD");
            }
            $resultado = $proveedores->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    function verificarIdentificacionPersona($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('proveedor', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
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
    function insertarPersona($data)
    {
        try{
            $this->db->trans_begin();

//            print_r($data); exit();
            $query = $this->db->insert('proveedor', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $insert_id = $this->db->insert_id();

            if($data['extension'] != '' && $data['extension'] != null) {
                $nombreFotografia = 'profile_picture_' . $insert_id . '.' . $data['extension'];
                $this->db->where('idProveedor', $insert_id);
                $query = $this->db->update('proveedor', array('fotografia' => $nombreFotografia));
            }

            if ($data['palabras'] != '') {
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
            }
            if ($data['categorias'] != '') {
                $categorias = explode(",", $data['categorias']);
                foreach ($categorias as $categoria) {
                    $row = array(
                        'idPersona' => $insert_id,
                        'idCategoriaPersona' => $categoria
                    );
                    $query = $this->db->insert('categoriaPersona_persona', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
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
            return $insert_id;
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

    function gastosFijos($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idGasto, monto, formaPago');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'gastoFijo' => 1, 'eliminado' => 0));
            $gastosFijos = $this->db->get('gasto');
            if (!$gastosFijos) {
                throw new Exception("Error en la BD");
            }
            $resultado = $gastosFijos->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>