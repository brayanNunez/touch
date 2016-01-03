<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function tiposPresupuesto()
    {
        try{
            $this->db->trans_begin();

            $tipos = $this->db->get('tipopresupuesto');
            if (!$tipos) {
                throw new Exception("Error en la BD");
            }
            $tipos = $tipos->result_array();

            $this->db->trans_commit();
            return $tipos;
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
    function NombresGasto($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idGasto, codigo');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            $gastos = $this->db->get('gasto');
            if (!$gastos) {
                throw new Exception("Error en la BD");
            }
            $resultado = $gastos->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
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

            $gastos = $data['gastos'];
            foreach ($gastos as $gasto) {
                $gasto['idProveedor'] = $insert_id;
                $query = $this->db->insert('gasto', $gasto);
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

                $this->db->select('nombre');
                $nombrePais = $this->db->get_where('pais', array('idPais' => $row['pais']));
                if (!$nombrePais) throw new Exception("Error en la BD");
                $resultado = $nombrePais->result_array();
                $row['nombrePais'] = array_shift($resultado)['nombre'];

                $this->db->select('descripcion');
                $palabras = $this->db->get_where('palabraclaveproveedor', array('idProveedor' => $id));
                if (!$palabras) {
                    throw new Exception("Error en la BD");
                }
                $row['palabras'] = $palabras->result_array();

                $this->db->select('cp.*');
                $this->db->from('categoriapersona cp');
                $this->db->join('categoriapersona_persona cpp', 'cpp.idCategoriaPersona = cp.idCategoriaPersona');
                $this->db->join('proveedor pr', 'pr.idProveedor = cpp.idPersona');
                $this->db->where('pr.idProveedor', $id);
                $categoriasPersona = $this->db->get();
                if (!$categoriasPersona) {
                    throw new Exception("Error en la BD");
                }
                $row['categorias'] = $categoriasPersona->result_array();

                $this->db->select('im.*');
                $this->db->from('impuesto im');
                $this->db->join('impuesto_servicio is', 'is.idImpuesto = im.idImpuesto');
                $this->db->join('servicio se', 'se.idServicio = is.idServicio');
                $this->db->where('se.idServicio', $id);
                $impuestos = $this->db->get();

                if (!$impuestos) {
                    throw new Exception("Error en la BD");
                }
                $row['impuestos'] = $impuestos->result_array();

                $contactos = $this->db->get_where('proveedorcontacto', array('idProveedor' => $id,  'eliminado' => 0));
                if (!$contactos) {
                    throw new Exception("Error en la BD");
                }
                $row['contactos'] = $contactos->result_array();

                $gastos = $this->db->get_where('gasto', array('idProveedor' => $id,  'eliminado' => 0));
                if (!$gastos) {
                    throw new Exception("Error en la BD");
                }
                $row['gastos'] = $gastos->result_array();
                $contador = 0;
                foreach ($row['gastos'] as $gasto) {
                    $this->db->select('nombre');
                    $this->db->where('idCategoriaGasto' , $gasto['idCategoriaGasto']);
                    $query1 = $this->db->get('categoriagasto');
                    $this->db->select('nombre');
                    $this->db->where('idTiempo', $gasto['formaPago']);
                    $query2 = $this->db->get('tiempo');
                    if (!$query1 || !$query2) {
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
                    $row['gastos'][$contador]['datosAdicionales'] = array(
                        'categoria' => $categoria,
                        'formaPago' => $formaPago
                    );
                    if($gasto['gastoFijo']) {
                        $row['gastos'][$contador++]['datosAdicionales']['tipo'] = 'Fijo';
                    } else {
                        $row['gastos'][$contador++]['datosAdicionales']['tipo'] = 'Variable';
                    }
                }

                $paises = $this->db->get('pais');
                if (!$paises) {
                    throw new Exception("Error en la BD");
                }
                $row['paises'] = $paises->result_array();

                $archivos = $this->db->get_where('archivopersona', array('idPersona' => $id));
                if (!$archivos) {
                    throw new Exception("Error en la BD");
                }
                $row['archivos'] = $archivos->result_array();
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

            $this->db->where('idProveedor', $data['id']);
            $query = $this->db->delete('palabraclaveproveedor');
            if ($data['palabras'] != '') {
                $palabras = explode(",", $data['palabras']); 
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
            }

            $this->db->where('idPersona', $data['id']);
            $query = $this->db->delete('categoriapersona_persona');
            if ($data['categorias'] != '') {
                $categorias = explode(",", $data['categorias']);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                foreach ($categorias as $categoria) {
                    $row = array(
                        'idPersona' => $data['id'],
                        'idCategoriaPersona' => $categoria
                    );
                    $query = $this->db->insert('categoriapersona_persona', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
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

            $gastosEliminados = $data['gastosEliminados'];
            foreach ($gastosEliminados as $gastosEliminado) {
                $this->db->where('idGasto', $gastosEliminado['idGasto']);
                $query = $this->db->update('gasto', $gastosEliminado);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }
            $gastosEditados = $data['gastosEditados'];
            foreach ($gastosEditados as $gastosEditado) {
                $this->db->where('idGasto', $gastosEditado['idGasto']);
                $query = $this->db->update('gasto', $gastosEditado);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
            }
            $gastosNuevos = $data['gastosNuevos'];
            foreach ($gastosNuevos as $gastosNuevo) {
                $query = $this->db->insert('gasto', $gastosNuevo);
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

    function verificarIdentificacion($data)
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

    function cambiar_imagen($data) {
        try{
            $photo = '';
            $this->db->trans_begin();

            $this->db->select('fotografia');
            $this->db->where('idProveedor', $data['id']);
            $this->db->from('proveedor');
            $query1 = $this->db->get();
            if (!$query1) {
                throw new Exception("Error en la BD");
            }
            if($query1->num_rows() > 0) {
                $datos = $query1->result_array();
                $photo = $datos[0]['fotografia'];
                if(!$photo) {
                    $photo = 'sinFoto';
                }
            } else {
                $photo = 'sinFoto';
            }
            if($photo) {
                $this->db->where('idProveedor', $data['id']);
                $query2 = $this->db->update('proveedor', $data['datos']);
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

    public function agregarArchivo($data) {
        try{
            $this->db->trans_begin();

            $this->db->set('fecha', 'NOW()', FALSE);
            $query = $this->db->insert('archivopersona', $data['datos']);
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
    public function eliminarArchivo($id) {
        try{
            $this->db->trans_begin();

            $this->db->select('nombreOriginal');
            $this->db->where('idArchivoPersona', $id);
            $this->db->from('archivopersona');
            $query1 = $this->db->get();
            if (!$query1) {
                throw new Exception("Error en la BD");
            }
            if($query1->num_rows() > 0) {
                $datos = $query1->result_array();
                $file = $datos[0]['nombreOriginal'];
                if(!$file) {
                    $file = 'noArchivo';
                }
            } else {
                $file = 'noArchivo';
            }

            $this->db->where('idArchivoPersona', $id);
            $query = $this->db->delete('archivopersona');
            if (!$query) throw new Exception("Error en la BD");

            $this->db->trans_commit();
            return $file;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    public function cargarArchivo($id)
    {
        try {
            $this->db->trans_begin();

            $query = $this->db->get_where('archivopersona', array('idArchivoPersona' => $id));
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

    public function cambiarContactoPrincipal($idContacto, $idPersona) {
        try{
            $this->db->trans_begin();

            $this->db->where('idProveedor', $idPersona);
            $query = $this->db->update('proveedorcontacto', array('principal' => 0));
            if (!$query) throw new Exception("Error en la BD");

            $this->db->where('idProveedorContacto', $idContacto);
            $query = $this->db->update('proveedorcontacto', array('principal' => 1));
            if (!$query) throw new Exception("Error en la BD");

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

}

?>