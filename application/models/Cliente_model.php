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

    function busquedaCotizacion($idEmpresa, $busqueda)
    {
        try{
            $this->db->trans_begin();


            $desde = date("Y-m-d", strtotime($busqueda["desde"]));
            $hasta = date("Y-m-d", strtotime($busqueda["hasta"]));

            $hasta = strtotime('+1 day', strtotime($hasta));
            $hasta = date('Y-m-d', $hasta); 

            $where = '(co.fechaCreacion BETWEEN "'.$desde.'" AND "'.$hasta.'")';
            if ($busqueda["busquedaCotizacion_estado"] != 0) {
                $where = 'co.idEstadoCotizacion = '.$busqueda["busquedaCotizacion_estado"].' AND (co.fechaCreacion BETWEEN "'.$desde.'" AND "'.$hasta.'")';
            }
            
            // $where = 'co.idEstadoCotizacion = '.$busqueda["busquedaCotizacion_estado"].' AND (co.fechaCreacion BETWEEN "'.$desde.'" AND "'.$hasta.'")';

            // echo $where; exit();

            $this->db->distinct();
            $this->db->select('cl.idCliente, cl.identificacion, cl.nombre, cl.juridico, cl.primerApellido, cl.segundoApellido, cl.telefonoFijo, cl.correo');
            $this->db->from('cliente as cl');
            $this->db->join('cotizacion as co', 'co.idCliente = cl.idCliente');
            $this->db->where($where);

            $clientes = $this->db->get();


            if (!$clientes) throw new Exception("Error en la BD"); 
            // echo 'jola'; exit();
            $clientes = $clientes->result_array();
            $resultado = array();
            foreach ($clientes as $cliente) {
                $cliente['idCliente'] = encryptIt($cliente['idCliente']);
                array_push($resultado, $cliente);
            }
            // echo print_r($resultado);exit();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }

    function busqueda($idEmpresa, $busqueda)
    {
        try{
            $this->db->trans_begin();

            $arrayJoinUsuarios = array();
            $arrayWhereUsuarios = array();
            if ($busqueda['cliente_vendedores'] != '') {
                $vendedores = explode(",", $busqueda['cliente_vendedores']);
                $contador = 0;
                foreach ($vendedores as $vendedor) {
                    $join = ' left join usuario_cliente as uc'.$contador.' on uc'.$contador.'.idCliente = cl.idCliente ';
                    $where = ' AND uc'.$contador.'.idUsuario = '.$vendedor.' ';
                    array_push($arrayJoinUsuarios, $join);
                    array_push($arrayWhereUsuarios, $where);
                    $contador++;
                }
            }
            $queryWhereUsuarios = '';
            if ($busqueda['cliente_vendedores'] != '') {
                $queryWhereUsuarios = " and ((true";
                foreach ($arrayWhereUsuarios as $where) {
                     $queryWhereUsuarios .= $where;
                }
                $queryWhereUsuarios .= ") OR cl.todosVendedores = 1)";
            }

            

            // echo $queryWhereUsuarios; exit();


            $arrayJoinGustos = array();
            $arrayWhereGustos = array();
            if ($busqueda['cliente_gustos'] != '') {
                $gustos = explode(",", $busqueda['cliente_gustos']);
                $contador = 0;
                foreach ($gustos as $gusto) {
                    $join = ' inner join gusto as gu'.$contador.' on gu'.$contador.'.idCliente = cl.idCliente ';
                    $where = ' AND gu'.$contador.'.nombre = "'.$gusto.'" ';
                    array_push($arrayJoinGustos, $join);
                    array_push($arrayWhereGustos, $where);
                    $contador++;
                }
            }

            $arrayJoinMedios = array();
            $arrayWhereMedios = array();
            if ($busqueda['cliente_medios'] != '') {
                $medios = explode(",", $busqueda['cliente_medios']);
                $contador = 0;
                foreach ($medios as $medio) {
                    $join = ' inner join medio as me'.$contador.' on me'.$contador.'.idCliente = cl.idCliente ';
                    $where = ' AND me'.$contador.'.nombre = "'.$medio.'" ';
                    array_push($arrayJoinMedios, $join);
                    array_push($arrayWhereMedios, $where);
                    $contador++;
                }
            }

            $query = 'SELECT cl.idCliente, cl.identificacion, cl.nombre, cl.juridico, cl.primerApellido, cl.segundoApellido, cl.telefonoFijo, cl.correo from cliente as cl';
            foreach ($arrayJoinGustos as $join) {
                $query .= $join;
            }
            foreach ($arrayJoinMedios as $join) {
                $query .= $join;
            }
            foreach ($arrayJoinUsuarios as $join) {
                $query .= $join;
            }
            $query .= ' WHERE cl.idEmpresa = '.$idEmpresa;
            foreach ($arrayWhereGustos as $where) {
                $query .= $where;
            }
            foreach ($arrayWhereMedios as $where) {
                $query .= $where;
            }
            $query .= $queryWhereUsuarios;
            // echo $query; exit();

            $clientes = $this->db->query($query);



            if (!$clientes) throw new Exception("Error en la BD"); 
            // echo 'jola'; exit();
            $clientes = $clientes->result_array();
            $resultado = array();
            foreach ($clientes as $cliente) {
                $cliente['idCliente'] = encryptIt($cliente['idCliente']);
                array_push($resultado, $cliente);
            }
            // echo print_r($resultado);exit();

            $this->db->trans_commit();
            return $resultado;
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
    function formasPago($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idFormaPago, nombre');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            $formasPago = $this->db->get('formapago');
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
    function monedas($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idMoneda, nombre');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            $monedas = $this->db->get('moneda');
            if (!$monedas) {
                throw new Exception("Error en la BD");
            }
            $resultado = $monedas->result_array();

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
                $nacionalidad = $this->db->get_where('pais', array('idPais' => $row['nacionalidad']));
                if (!$nacionalidad) {
                    throw new Exception("Error en la BD");
                }
                $paisNacionalidad = $nacionalidad->result_array();
                $row['paisNacionalidad'] = array_shift($paisNacionalidad)['nombre'];

                $this->db->select('nombre');
                $formaPago = $this->db->get_where('formaPago', array('idFormaPago' => $row['idFormaPagoDefecto']));
                if (!$formaPago) throw new Exception("Error en la BD");
                $resultado = $formaPago->result_array();
                $row['nombre_formaPago'] = array_shift($resultado)['nombre'];

                $this->db->select("CONCAT(nombre, ' (', signo, ') ') as nombreMoneda", false);
                $moneda = $this->db->get_where('moneda', array('idMoneda' => $row['idMonedaDefecto']));
                if (!$moneda) throw new Exception("Error en la BD");
                $resultado = $moneda->result_array();
                $row['nombre_moneda'] = array_shift($resultado)['nombreMoneda'];

                $this->db->select('nombre');
                $nombrePais = $this->db->get_where('pais', array('idPais' => $row['pais']));
                if (!$nombrePais) throw new Exception("Error en la BD");
                $resultado = $nombrePais->result_array();
                $row['nombrePais'] = array_shift($resultado)['nombre'];

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
            
            $this->db->select('idCliente, identificacion, nombre, juridico, primerApellido, segundoApellido, telefonoFijo, correo');
            $clientes = $this->db->get_where('cliente', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$clientes) throw new Exception("Error en la BD"); 
            $data['lista'] =  $clientes->result_array();

            $estado = $this->db->get('estadocotizacion');
            if (!$estado) throw new Exception("Error en la BD"); 
            $data['estados'] = $estado->result_array();

            $this->db->select('MIN(fechaCreacion) as fecha');
            $fecha = $this->db->get_where('cotizacion', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$fecha) throw new Exception("Error en la BD"); 
            $fecha = $fecha->result_array();
            $fecha = array_shift($fecha);
            $data['fechaMinima'] = $fecha['fecha'];


            $this->db->trans_commit();
            return $data;
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