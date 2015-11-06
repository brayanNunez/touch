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

}

?>