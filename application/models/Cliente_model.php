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
            $query = $this->db->get_where('cliente', array('identificacion' => $data['identificacion'],  'eliminado' => 0, 'idEmpresa' => $data['idEmpresa']));
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

    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('cliente', $data['datos']);
            if (!$query) throw new Exception("Error en la BD");   
            $insert_id = $this->db->insert_id();

            if($data['extension'] != '' && $data['extension'] != null) {
                $nombreFotografia = 'profile_picture_' . $insert_id . '.' . $data['extension'];
                $this->db->where('idCliente', $insert_id);
                $query = $this->db->update('cliente', array('fotografia' => $nombreFotografia));
            }

            if ($data['gustos'] != '') {
                $gustos = explode(",", $data['gustos']); ;
                foreach ($gustos as $gusto) {
                    $row = array(
                    'idCliente' => $insert_id,
                    'nombre' => $gusto
                    );
                    $query = $this->db->insert('gusto', $row);
                    if (!$query) throw new Exception("Error en la BD");   
                }
            }

            if ($data['medios'] != '') {
                $medios = explode(",", $data['medios']); ;
                foreach ($medios as $medio) {
                    $row = array(
                    'idCliente' => $insert_id,
                    'nombre' => $medio
                    );
                    $query = $this->db->insert('medio', $row);
                    if (!$query) throw new Exception("Error en la BD");   
                }
            }

            if ($data['vendedores'] != '') {
                $vendedores = explode(",", $data['vendedores']);
                foreach ($vendedores as $vendedor) {
                    $row = array(
                        'idCliente' => $insert_id,
                        'idUsuario' => $vendedor
                    );
                    $query = $this->db->insert('usuario_cliente', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
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
            return $insert_id;
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

                $this->db->select('nombre');
                $nombrePais = $this->db->get_where('pais', array('idPais' => $row['pais']));
                if (!$nombrePais) throw new Exception("Error en la BD");
                $resultado = $nombrePais->result_array();
                $row['nombrePais'] = array_shift($resultado)['nombre'];

                $this->db->select('nombre');
                $medios = $this->db->get_where('medio', array('idCliente' => $id));
                if (!$medios) throw new Exception("Error en la BD");   
                $row['medios'] = $medios->result_array();

                $contactos = $this->db->get_where('personacontacto', array('idCliente' => $id,  'eliminado' => 0));
                if (!$contactos) throw new Exception("Error en la BD");   
                $row['contactos'] = $contactos->result_array();

                $this->db->select("CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as nombre, us.idUsuario", false);
                $this->db->from('usuario us');
                $this->db->join('usuario_cliente uc', 'uc.idUsuario = us.idUsuario');
                $this->db->join('cliente cl', 'cl.idCliente = uc.idCliente');
                $this->db->where('cl.idCliente', $id);
                $vendedores = $this->db->get();
                if (!$vendedores) throw new Exception("Error en la BD");   
                $row['vendedores'] = $vendedores->result_array();


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
            
            $this->db->where('idCliente', $data['id']);
            $query = $this->db->delete('gusto');
            if ($data['gustos'] != '') {
                $gustos = explode(",", $data['gustos']); ;
                if (!$query) throw new Exception("Error en la BD"); 
                foreach ($gustos as $gusto) {
                    $row = array(
                    'idCliente' => $data['id'],
                    'nombre' => $gusto
                    );
                    $query = $this->db->insert('gusto', $row);
                    if (!$query) throw new Exception("Error en la BD"); 
                }
            }

            $this->db->where('idCliente', $data['id']);
            $query = $this->db->delete('medio');
            if ($data['medios'] != '') {
                $medios = explode(",", $data['medios']); ;
                if (!$query) throw new Exception("Error en la BD"); 
                foreach ($medios as $medio) {
                    $row = array(
                    'idCliente' => $data['id'],
                    'nombre' => $medio
                    );
                    $query = $this->db->insert('medio', $row);
                    if (!$query) throw new Exception("Error en la BD"); 
                }
            }

            $this->db->where('idCliente', $data['id']);
            $query = $this->db->delete('usuario_cliente');
            if (!$query) throw new Exception("Error en la BD"); 

            if ($data['vendedores'] != '') {
                $vendedores = explode(",", $data['vendedores']);
                foreach ($vendedores as $vendedor) {
                    $row = array(
                        'idCliente' =>  $data['id'],
                        'idUsuario' => $vendedor
                    );
                    $query = $this->db->insert('usuario_cliente', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
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

            $this->db->where('idCliente', $id);
            $query = $this->db->update('cliente', array('eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 

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

            $this->db->select('fotografia');
            $this->db->where('idCliente', $data['id']);
            $this->db->from('cliente');
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
                $this->db->where('idCliente', $data['id']);
                $query2 = $this->db->update('cliente', $data['datos']);
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
            $query = $this->db->insert('archivo', $data['datos']);
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
            $this->db->where('idArchivo', $id);
            $this->db->from('archivo');
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
    public function cargarArchivo($id)
    {
        try {
            $this->db->trans_begin();

            $query = $this->db->get_where('archivo', array('idArchivo' => $id));
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