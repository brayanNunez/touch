<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    

    function existeIdentificacion($data)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('empleado', array('identificacion' => $data['identificacion'],  'eliminado' => 0, 'idEmpresa' => $data['idEmpresa']));
            if (!$query) throw new Exception("Error en la BD");   
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


    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('cliente', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");   
            $insert_id = $this->db->insert_id();
            $gustos = explode(",", $data['gustos']); ;
            foreach ($gustos as $gusto) {
                $row = array(
                'idCliente' => $insert_id,
                'nombre' => $gusto
                );
                $query = $this->db->insert('gusto', $row);
                if (!$query) throw new Exception("Error en la BD");   
            }

            $medios = explode(",", $data['medios']); ;
            foreach ($medios as $medio) {
                $row = array(
                'idCliente' => $insert_id,
                'nombre' => $medio
                );
                $query = $this->db->insert('medio', $row);
                if (!$query) throw new Exception("Error en la BD");   
            }

            $contactos = $data['contactos'];
            // echo print_r($contactos); exit();
            foreach ($contactos as $contacto) {
                $contacto['idCliente'] = $insert_id;
                $query = $this->db->insert('personacontacto', $contacto);
                if (!$query) throw new Exception("Error en la BD");   
            }
            $pathCliente = 'files/empresas/'.$data['datos']['idEmpresa'].'/clientes/'.$insert_id;
            if(!is_dir($pathCliente)) {
                mkdir($pathCliente);
            }
            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }




    //Retorna los gustos que tienen los clientes en la misma 
    //empresa para ser sugeridos a la hora de agregar nuevos gustos
    function gustosSugerencia($idEmpresa){
        try {
            $this->db->trans_begin();
            $this->db->distinct();
            $this->db->select('gu.nombre');
            $this->db->from('gusto gu');
            $this->db->join('cliente cl', 'cl.idCliente = gu.idCliente');
            $this->db->join('empresa em', 'cl.idEmpresa = em.idEmpresa');
            $this->db->where('em.idEmpresa', $idEmpresa);
            $query = $this->db->get();
            if (!$query) throw new Exception("Error en la BD");   
            $this->db->trans_commit();
            return $query->result_array();
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    //Retorna los medios que tienen los clientes en la misma 
    //empresa para ser sugeridos a la hora de agregar nuevos medios
    function mediosSugerencia($idEmpresa){
        try {
            $this->db->trans_begin();
            $this->db->distinct();
            $this->db->select('me.nombre');
            $this->db->from('medio me');
            $this->db->join('cliente cl', 'cl.idCliente = me.idCliente');
            $this->db->join('empresa em', 'cl.idEmpresa = em.idEmpresa');
            $this->db->where('em.idEmpresa', $idEmpresa);
            $query = $this->db->get();
            if (!$query) throw new Exception("Error en la BD");   
            $this->db->trans_commit();
            return $query->result_array();
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('cliente', array('idCliente' => $id,  'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");   
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server

                $this->db->select('nombre');
                $gustos = $this->db->get_where('gusto', array('idCliente' => $id));
                if (!$gustos) throw new Exception("Error en la BD");   
                $row['gustos'] = $gustos->result_array();

                $this->db->select('nombre');
                $medios = $this->db->get_where('medio', array('idCliente' => $id));
                if (!$medios) throw new Exception("Error en la BD");   
                $row['medios'] = $medios->result_array();

                $contactos = $this->db->get_where('personacontacto', array('idCliente' => $id,  'eliminado' => 0));
                if (!$contactos) throw new Exception("Error en la BD");   
                $row['contactos'] = $contactos->result_array();

                $archivos = $this->db->get_where('archivo', array('idCliente' => $id));
                if (!$archivos) throw new Exception("Error en la BD");
                $row['archivos'] = $archivos->result_array();
            }
            // print_r ($row);exit();
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

            $this->db->where('idCliente', $data['id']);
            $query = $this->db->update('cliente', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");   
            
            $gustos = explode(",", $data['gustos']); ;
            $this->db->where('idCliente', $data['id']);
            $query = $this->db->delete('gusto');
            if (!$query) throw new Exception("Error en la BD"); 
            foreach ($gustos as $gusto) {
                $row = array(
                'idCliente' => $data['id'],
                'nombre' => $gusto
                );
                $query = $this->db->insert('gusto', $row);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $medios = explode(",", $data['medios']); ;
            $this->db->where('idCliente', $data['id']);
            $query = $this->db->delete('medio');
            if (!$query) throw new Exception("Error en la BD"); 
            foreach ($medios as $medio) {
                $row = array(
                'idCliente' => $data['id'],
                'nombre' => $medio
                );
                $query = $this->db->insert('medio', $row);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $nuevos = $data['nuevos'];

            foreach ($nuevos as $nuevo) {
                $query = $this->db->insert('personacontacto', $nuevo);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $editados = $data['editados'];

            foreach ($editados as $editado) {
                $this->db->where('idPersonaContacto', $editado['idPersonaContacto']);
                $query = $this->db->update('personacontacto', $editado);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $eliminados = $data['eliminados'];

            foreach ($eliminados as $eliminado) {
                $this->db->where('idPersonaContacto', $eliminado['idPersonaContacto']);
                $query = $this->db->update('personacontacto', $eliminado);
                if (!$query) throw new Exception("Error en la BD"); 
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
            
            $clientes = $this->db->get_where('cliente', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$clientes) throw new Exception("Error en la BD"); 
            $clientes = $clientes->result_array();
            // $resultado = array();
            //  foreach ($clientes as $row)
            // {
            //     $idEmpleado = $row['idEmpleado'];
            //     $this->db->select('descripcion');
            //     $query = $this->db->get_where('palabraClaveEmpleado', array('idEmpleado' => $idEmpleado));
            //     if (!$query) throw new Exception("Error en la BD"); 
            //     $row['palabras'] = $query->result_array();
            //     array_push($resultado, $row);
            // }


            $this->db->trans_commit();
            return $clientes;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }

    public function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idEmpleado', $id);
            $query = $this->db->update('empleado', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function agregarArchivo($data) {
        try{
            $this->db->trans_begin();
            $query = $this->db->insert('archivo', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");

            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function eliminarArchivo($id) {
        try{
            $this->db->trans_begin();

            $this->db->select('nombre');
            $this->db->where('idArchivo', $id);
            $this->db->from('archivo');
            $query1 = $this->db->get();
            if (!$query1) {
                throw new Exception("Error en la BD");
            }
            if($query1->num_rows() > 0) {
                $datos = $query1->result_array();
                $file = $datos[0]['nombre'];
                if(!$file) {
                    $file = 'noArchivo';
                }
            } else {
                $file = 'noArchivo';
            }

            $this->db->where('idArchivo', $id);
            $query = $this->db->delete('archivo');
            if (!$query) throw new Exception("Error en la BD");

            $this->db->trans_commit();
            return $file;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    
}

?>