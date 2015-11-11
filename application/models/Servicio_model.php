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
            $insert_id = $this->db->insert_id();

            if ($data['impuestos'] != '') {
                $impuestos = explode(",", $data['impuestos']);
                foreach ($impuestos as $impuesto) {
                    $row = array(
                        'idServicio' => $insert_id,
                        'idImpuesto' => $impuesto
                    );
                    $query = $this->db->insert('impuesto_servicio', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
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

    function cargar($id, $idEmpresa)
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

                // $this->db->select('idImpuesto');
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


                $this->db->select('fs.cantidadTiempo, fa.*, fpadre.codigo as p_codigo, fpadre.nombre as p_nombre,fpadre.notas as p_notas');
                $this->db->from('fase fa');
                $this->db->join('fase fpadre', 'fa.idFasePadre= fpadre.idFase');
                $this->db->join('fase_servicio fs', 'fs.idFase = fa.idFase');
                $this->db->join('servicio se', 'se.idServicio = fs.idServicio');
                $this->db->where('se.idServicio', $id);
                $fases = $this->db->get();

                if (!$fases) {
                    throw new Exception("Error en la BD");
                }
                $row['misFases'] = $fases->result_array();



                
                $fasesPadre = $this->db->get_where('fase',array('idEmpresa' => $idEmpresa, 'eliminado' => 0, 'idFasePadre' => null));
                if (!$fasesPadre) {
                    throw new Exception("Error en la BD");
                }

                $fasesPadre = $fasesPadre->result_array();
                $resultado = array();
                 foreach ($fasesPadre as $fase)
                {
                    $idFase = $fase['idFase'];
                    $query = $this->db->get_where('fase', array('idFasePadre' => $idFase));
                    if (!$query) throw new Exception("Error en la BD"); 
                    $fase['subfases'] = $query->result_array();
                    array_push($resultado, $fase);
                }

                $row['fases'] = $resultado;



                
                // echo  print_r($fases); exit();
            }

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

            $this->db->where('idServicio', $data['id']);
            $query = $this->db->update('servicio', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }

            $this->db->where('idServicio', $data['id']);
            $query = $this->db->delete('impuesto_servicio');
            if (!$query) throw new Exception("Error en la BD"); 

            if ($data['impuestos'] != '') {
                $impuestos = explode(",", $data['impuestos']);
                foreach ($impuestos as $impuesto) {
                    $row = array(
                        'idServicio' => $data['id'],
                        'idImpuesto' => $impuesto
                    );
                    $query = $this->db->insert('impuesto_servicio', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
            }

            $this->db->where('idServicio', $data['id']);
            $query = $this->db->delete('fase_servicio');
            if (!$query) throw new Exception("Error en la BD");
            foreach ($data['fases'] as $fase) {
                $query = $this->db->insert('fase_servicio', $fase);
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

            $this->db->where('idServicio', $id);
            $query = $this->db->update('servicio', array('estado' => 1));
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

    function gastosVariables($idEmpresa) {
        try{
            $this->db->trans_begin();

            $gastos = $this->db->get_where('gasto', array('idEmpresa' => $idEmpresa, 'gastoFijo' => 0, 'eliminado' => 0));
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
    function personas($idEmpresa) {
        try{
            $this->db->trans_begin();

            $personas = $this->db->get_where('proveedor', array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            if (!$personas) {
                throw new Exception("Error en la BD");
            }
            $resultado = $personas->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    function categorias($idEmpresa) {
        try{
            $this->db->trans_begin();

            $categorias = $this->db->get_where('categoriagasto', array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            if (!$categorias) {
                throw new Exception("Error en la BD");
            }
            $resultado = $categorias->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarGasto($id)
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
            $this->db->where('idFormaPago', $row['formaPago']);
            $query2 = $this->db->get('formaPago');
            $this->db->select('nombre');
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
                $valor = array_shift($valores_query3);
                $persona = $valor['nombre'];
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

}

?>