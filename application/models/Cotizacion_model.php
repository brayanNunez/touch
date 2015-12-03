<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cotizacion_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

     function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            // $this->db->from('cotizacion');

            
            $cotizaciones = $this->db->query("SELECT co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado FROM cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario where co.idEmpresa = ".$idEmpresa." AND co.eliminado=0;");
            // $this->db->select("co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado");
            // $this->db->from('');
            // $this->db->join( FROM touch.cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario where co.idEmpresa = ".$idEmpresa." AND co.eliminado=0;");
            




            if (!$cotizaciones) throw new Exception("Error en la BD"); 
            $cotizaciones = $cotizaciones->result_array();

            $this->db->trans_commit();
            return $cotizaciones;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }

    function editarEstado($data){
        try {
            $this->db->trans_begin();

            $this->db->where('idCotizacion', $data['idCotizacion']);
            $query = $this->db->update('cotizacion', array('idEstadoCotizacion' => $data['estado']));
            if (!$query) throw new Exception("Error en la BD"); 

            $this->db->trans_commit();
            return 1;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return 0;
        }

    }

    function guardarCambios($data){
        try {
            $this->db->trans_begin();
            $this->db->where('idCotizacion', $data['idCotizacion']);
            $query = $this->db->update('cotizacion', $data['datosGenerales']);
            if (!$query) throw new Exception("Error en la BD"); 


            $this->db->select('count(*) as cantidad');
            $query = $this->db->get_where('cotizacion', array('numero' => 0, 'idCotizacion' => $data['idCotizacion']));
            if (!$query) throw new Exception("Error en la BD"); 

            $query = $query->result_array();
            $query = array_shift($query);

            $requiereNumero = $query['cantidad'];
            $suguiente = 0;

            if ($requiereNumero) {
                $this->db->select('MAX(numero) + 1 as suguiente');
                $query = $this->db->get_where('cotizacion', array('idEmpresa' => $data['idEmpresa']));
                if (!$query) throw new Exception("Error en la BD");
                $query = $query->result_array();
                $query = array_shift($query);
                $suguiente = $query['suguiente'];

                $this->db->where('idCotizacion', $data['idCotizacion']);
                $query = $this->db->update('cotizacion', array('numero' => $suguiente));
                if (!$query) throw new Exception("Error en la BD"); 

                // SELECT MAX(numero) + 1 as suguiente FROM cotizacion where idEmpresa = 1
            }

            $this->db->where('idCotizacion', $data['idCotizacion']);
            $query = $this->db->update('plantilladiseno', $data['diseno']);
            if (!$query) throw new Exception("Error en la BD"); 


            $nuevos = $data['nuevos'];

            foreach ($nuevos as $nuevo) {
                $impuestos = $nuevo['impuestos'];
                $nuevo = array(
                     'idCotizacion' => $nuevo['idCotizacion'],
                     'idServicio' => $nuevo['idServicio'],
                     'descripcion' => $nuevo['descripcion'],
                     'precioUnidad' => $nuevo['precioUnidad'],
                     'cantidad' => $nuevo['cantidad'],
                     'utilidad' => $nuevo['utilidad'],
                     'eliminado' => '0'
                     );
                $query = $this->db->insert('lineadetalle', $nuevo);
                if (!$query) throw new Exception("Error en la BD"); 
                $insert_id = $this->db->insert_id();

                if ($impuestos != '') {
                $impuestos = explode(",", $impuestos);
                foreach ($impuestos as $impuesto) {
                    $row = array(
                        'idLineaDetalle' => $insert_id,
                        'idImpuesto' => $impuesto
                    );
                    $query = $this->db->insert('impuesto_lineadetalle', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
            }
            }

            $editados = $data['editados'];

            foreach ($editados as $editado) {
                $impuestos = $editado['impuestos'];
                $editado = array(
                     'idLineaDetalle' => $editado['idLineaDetalle'],
                     'idServicio' => $editado['idServicio'],
                     'descripcion' => $editado['descripcion'],
                     'precioUnidad' => $editado['precioUnidad'],
                     'cantidad' => $editado['cantidad'],
                     'utilidad' => $editado['utilidad'],
                     'eliminado' => '0'
                     );
                $this->db->where('idLineaDetalle', $editado['idLineaDetalle']);
                $query = $this->db->update('lineadetalle', $editado);
                if (!$query) throw new Exception("Error en la BD"); 

                $this->db->where('idLineaDetalle', $editado['idLineaDetalle']);
                $query = $this->db->delete('impuesto_lineadetalle');
                if (!$query) throw new Exception("Error en la BD"); 

                if ($impuestos != '') {
                    $impuestos = explode(",", $impuestos);
                    foreach ($impuestos as $impuesto) {
                        $row = array(
                            'idLineaDetalle' => $editado['idLineaDetalle'],
                            'idImpuesto' => $impuesto
                        );
                        $query = $this->db->insert('impuesto_lineadetalle', $row);
                        if (!$query) {
                            throw new Exception("Error en la BD");
                        }
                    }
                }
            }

            $eliminados = $data['eliminados'];

            foreach ($eliminados as $eliminado) {
                $this->db->where('idLineaDetalle', $eliminado['idLineaDetalle']);
                $query = $this->db->update('lineadetalle', $eliminado);
                if (!$query) throw new Exception("Error en la BD"); 
            }

            $aprobadores = $data['aprobadores'];

            $this->db->where('idCotizacion', $data['idCotizacion']);
            $query = $this->db->delete('aprobador_cotizacion');
            if (!$query) throw new Exception("Error en la BD"); 

            if ($aprobadores != null) {
                foreach ($aprobadores as $aprobador) {
                    $row = array(
                        'idUsuario' => $aprobador,
                        'idCotizacion' => $data['idCotizacion']
                    );
                    $query = $this->db->insert('aprobador_cotizacion', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
            }

            
            $this->db->trans_commit();
            return $suguiente;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return 'false';
        }
    }

    function nueva($datos)
    {
        try {
            $this->db->trans_begin();
            $plantillas = $this->db->get_where('plantilladiseno', array('publica' => '1', 'eliminado'=>0, 'idEmpresa'=> $datos['idEmpresa']));
            if (!$plantillas) throw new Exception("Error en la BD");   
            $plantillas = $plantillas->result_array();

            $formaPago = $this->db->get_where('formapago', array('eliminado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$formaPago)throw new Exception("Error en la BD");
            $formaPago = $formaPago->result_array();

            $moneda = $this->db->get_where('moneda', array('eliminado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$moneda)throw new Exception("Error en la BD");
            $moneda = $moneda->result_array();

            $servicios = $this->db->get_where('servicio', array('estado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$servicios)throw new Exception("Error en la BD");
            $servicios = $servicios->result_array();
            $resultado = array();
            foreach ($servicios as $row) {
                $idServicio = $row['idServicio'];
                $this->db->select('im.*');
                $this->db->from('impuesto im');
                $this->db->join('impuesto_servicio is', 'is.idImpuesto = im.idImpuesto');
                $this->db->join('servicio se', 'se.idServicio = is.idServicio');
                $this->db->where('se.idServicio', $idServicio);
                $impuestos = $this->db->get();
                if (!$impuestos)  throw new Exception("Error en la BD");
                $row['impuestos'] = $impuestos->result_array();
                array_push($resultado, $row);
            }

            // echo $datos['idUsuario']; exit();

            $clientes = $this->db->query("SELECT cl.idCliente, cl.nombre, cl.primerApellido, cl.segundoApellido, cl.todosVendedores, mec.valido  FROM cliente as cl left join (SELECT uc.idCliente, 1 as valido FROM usuario_cliente as uc inner join usuario as u on u.idUsuario = uc.idUsuario where u.idUsuario = ".$datos['idUsuario'].") as mec on mec.idCliente = cl.idCliente where cl.eliminado = 0 order by nombre ASC ;");
            if (!$clientes)  throw new Exception("Error en la BD");
            $clientes = $clientes->result_array();
            $misClientes = array();
            foreach ($clientes as $row) {
                $idCliente = $row['idCliente'];
                $this->db->select('pc.*');
                $this->db->from('personacontacto pc');
                $this->db->where('pc.idCliente', $idCliente);
                $contactos = $this->db->get();
                if (!$contactos)  throw new Exception("Error en la BD");
                $row['contactos'] = $contactos->result_array();
                array_push($misClientes, $row);
            }

            $this->db->select("us.*");
            $this->db->from('usuario as us');
            $this->db->join('privilegio_usuario as pu', 'pu.idUsuario = us.idUsuario');
            $this->db->join('privilegio as pr', 'pr.idPrivilegio = pu.idPrivilegio');
            $this->db->where(array('us.eliminado' => 0,'us.idEmpresa' => $datos['idEmpresa'], 'pr.nombre' => 'Aprobador'));

            $aprobadores = $this->db->get();

             // $aprobadores = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));

            if (!$aprobadores) {
                throw new Exception("Error en la BD");
            }
            $aprobadores = $aprobadores->result_array();

            $data['aprobadores'] = $aprobadores;
            $data['clientes'] = $misClientes;
            $data['plantillas'] = $plantillas;
            $data['servicios'] = $resultado;
            $data['formasPago'] = $formaPago;
            $data['monedas'] = $moneda;

            
            
            $query = $this->db->insert('cotizacion', array('idEmpresa' => $datos['idEmpresa'],'idEstadoCotizacion' => 1,'idUsuario' => $datos['idUsuario'], 'eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 
            $data['idCotizacion'] = $this->db->insert_id();

             $query = $this->db->insert('plantilladiseno', array('idEmpresa' => $datos['idEmpresa'],'idCotizacion' => $data['idCotizacion'],'publica' => 0, 'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");

            $this->db->select('nombre, correo, telefono, logo');
            $query = $this->db->get_where('empresa', array('idEmpresa'=> $datos['idEmpresa']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['empresa'] = array_shift($array);
            

            $this->db->select('nombre, primerApellido, segundoApellido');
            $query = $this->db->get_where('usuario', array('idUsuario'=> $datos['idUsuario']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['usuario'] = array_shift($array);

            // echo print_r($data['usuario']); exit();

            // INSERT INTO `touch`.`cotizacion` (`idEmpresa`, `idEstadoCotizacion`, `idUsuario`) VALUES ('1', '1', '1');

            // print_r($data);exit();

            $this->db->trans_commit();
            return $data;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    
    function cargarCorreoCliente($idCotizacion){
         try {
            $this->db->trans_begin();
            $this->db->select("cl.correo");
            $this->db->from('cliente as cl');
            $this->db->join('cotizacion as co', 'co.idCliente = cl.idCliente');
            $this->db->where(array('co.idCotizacion' => $idCotizacion));
            $correo = $this->db->get();
            if (!$correo) {
                throw new Exception("Error en la BD");
            }
            $correo = $correo->result_array();
            $correo = array_shift($correo);

            // $data['correos'] = $correos;

            $this->db->trans_commit();
            return $correo;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargarCorreosAprobadores($idCotizacion){
         try {
            $this->db->trans_begin();
            $this->db->select("us.correo");
            $this->db->from('usuario as us');
            $this->db->join('aprobador_cotizacion as ac', 'ac.idUsuario = us.idUsuario');
            $this->db->join('cotizacion as co', 'co.idCotizacion = ac.idCotizacion');
            $this->db->where(array('co.idCotizacion' => $idCotizacion));
            $correos = $this->db->get();
            if (!$correos) {
                throw new Exception("Error en la BD");
            }
            $correos = $correos->result_array();

            // $data['correos'] = $correos;

            $this->db->trans_commit();
            return $correos;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }

    function cargar($datos)
    {
        try {
            $this->db->trans_begin();
            $plantillas = $this->db->get_where('plantilladiseno', array('publica' => '1', 'eliminado'=>0, 'idEmpresa'=> $datos['idEmpresa']));
            if (!$plantillas) throw new Exception("Error en la BD");   
            $plantillas = $plantillas->result_array();

            $formaPago = $this->db->get_where('formapago', array('eliminado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$formaPago)throw new Exception("Error en la BD");
            $formaPago = $formaPago->result_array();

            $moneda = $this->db->get_where('moneda', array('eliminado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$moneda)throw new Exception("Error en la BD");
            $moneda = $moneda->result_array();

            $servicios = $this->db->get_where('servicio', array('estado' => 0,'idEmpresa' => $datos['idEmpresa']));
            if (!$servicios)throw new Exception("Error en la BD");
            $servicios = $servicios->result_array();
            $resultado = array();
            foreach ($servicios as $row) {
                $idServicio = $row['idServicio'];
                $this->db->select('im.*');
                $this->db->from('impuesto im');
                $this->db->join('impuesto_servicio is', 'is.idImpuesto = im.idImpuesto');
                $this->db->join('servicio se', 'se.idServicio = is.idServicio');
                $this->db->where('se.idServicio', $idServicio);
                $impuestos = $this->db->get();
                if (!$impuestos)  throw new Exception("Error en la BD");
                $row['impuestos'] = $impuestos->result_array();
                array_push($resultado, $row);
            }

            // echo $datos['idUsuario']; exit();

            $clientes = $this->db->query("SELECT cl.idCliente, cl.nombre, cl.primerApellido, cl.segundoApellido, cl.todosVendedores, mec.valido  FROM cliente as cl left join (SELECT uc.idCliente, 1 as valido FROM usuario_cliente as uc inner join usuario as u on u.idUsuario = uc.idUsuario where u.idUsuario = ".$datos['idUsuario'].") as mec on mec.idCliente = cl.idCliente where cl.eliminado = 0 order by nombre ASC ;");
            if (!$clientes)  throw new Exception("Error en la BD");
            $clientes = $clientes->result_array();
            $misClientes = array();
            foreach ($clientes as $row) {
                $idCliente = $row['idCliente'];
                $this->db->select('pc.*');
                $this->db->from('personacontacto pc');
                $this->db->where('pc.idCliente', $idCliente);
                $contactos = $this->db->get();
                if (!$contactos)  throw new Exception("Error en la BD");
                $row['contactos'] = $contactos->result_array();
                array_push($misClientes, $row);
            }

            $lineas = $this->db->get_where('lineadetalle', array('eliminado' => 0,'idCotizacion' => $datos['idCotizacion']));
            if (!$lineas)throw new Exception("Error en la BD");
            $lineas = $lineas->result_array();
            $lineasDetalle = array();
            foreach ($lineas as $row) {
                $idLinea = $row['idLineaDetalle'];
                $this->db->select('im.*');
                $this->db->from('impuesto im');
                $this->db->join('impuesto_lineadetalle il', 'il.idImpuesto = im.idImpuesto');
                $this->db->join('lineadetalle ld', 'ld.idLineaDetalle = il.idLineaDetalle');
                $this->db->where('ld.idLineaDetalle', $idLinea);
                $impuestos = $this->db->get();
                if (!$impuestos)  throw new Exception("Error en la BD");
                $row['impuestos'] = $impuestos->result_array();
                array_push($lineasDetalle, $row);
            }


            // print_r($plantillas);exit();

            $this->db->select("us.*");
            $this->db->from('usuario as us');
            $this->db->join('privilegio_usuario as pu', 'pu.idUsuario = us.idUsuario');
            $this->db->join('privilegio as pr', 'pr.idPrivilegio = pu.idPrivilegio');
            $this->db->where(array('us.eliminado' => 0,'us.idEmpresa' => $datos['idEmpresa'], 'pr.nombre' => 'Aprobador'));

            $aprobadores = $this->db->get();

             // $aprobadores = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));

            if (!$aprobadores) {
                throw new Exception("Error en la BD");
            }
            $aprobadores = $aprobadores->result_array();

            $this->db->select("us.*");
            $this->db->from('usuario as us');
            $this->db->join('aprobador_cotizacion as ac', 'ac.idUsuario = us.idUsuario');
            $this->db->join('cotizacion as co', 'co.idCotizacion = ac.idCotizacion');
            $this->db->where(array('us.eliminado' => 0,'co.idCotizacion' => $datos['idCotizacion']));

            $aprobadoresCotizacion = $this->db->get();

            if (!$aprobadoresCotizacion) {
                throw new Exception("Error en la BD");
            }
            $aprobadoresCotizacion = $aprobadoresCotizacion->result_array();

            $data['aprobadoresCotizacion'] = $aprobadoresCotizacion;
            $data['aprobadores'] = $aprobadores;
            $data['lineasDetalle'] = $lineasDetalle;
            $data['clientes'] = $misClientes;
            $data['plantillas'] = $plantillas;
            $data['servicios'] = $resultado;
            $data['formasPago'] = $formaPago;
            $data['monedas'] = $moneda;

            // $query = $this->db->insert('cotizacion', array('idEmpresa' => $datos['idEmpresa'],'idEstadoCotizacion' => 1,'idUsuario' => $datos['idUsuario']));
            // if (!$query) throw new Exception("Error en la BD"); 
            // $data['idCotizacion'] = $this->db->insert_id();

            $this->db->select('nombre, correo, telefono, logo');
            $query = $this->db->get_where('empresa', array('idEmpresa'=> $datos['idEmpresa']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['empresa'] = array_shift($array);
            

            $this->db->select('nombre, primerApellido, segundoApellido');
            $query = $this->db->get_where('usuario', array('idUsuario'=> $datos['idUsuario']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['usuario'] = array_shift($array);

            // $this->db->select('nombre, primerApellido, segundoApellido');
            $query = $this->db->get_where('cotizacion', array('idCotizacion'=> $datos['idCotizacion']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['cotizacion'] = array_shift($array);

            $query = $this->db->get_where('plantilladiseno', array('idCotizacion'=> $datos['idCotizacion']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['plantilla'] = array_shift($array);

            // echo print_r($data['cotizacion']); exit();

            // INSERT INTO `touch`.`cotizacion` (`idEmpresa`, `idEstadoCotizacion`, `idUsuario`) VALUES ('1', '1', '1');

            // print_r($data);exit();

            $this->db->trans_commit();
            return $data;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarAprobacion($datos)
    {
        try {
            $this->db->trans_begin();

            $this->db->select("ec.descripcion as estado");
            $this->db->from('estadocotizacion as ec');
            $this->db->join('cotizacion as co', 'co.idEstadoCotizacion = ec.idEstadoCotizacion');
            $this->db->where(array('co.idCotizacion' => $datos['idCotizacion']));

            $estado = $this->db->get();
            if (!$estado) throw new Exception("Error en la BD");
            $estado = $estado->result_array();
            $data['estado'] = array_shift($estado)['estado'];
            // echo print_r($data['estado']); exit();

            $this->db->select("us.*");
            $this->db->from('usuario as us');
            $this->db->join('aprobador_cotizacion as ac', 'ac.idUsuario = us.idUsuario');
            $this->db->join('cotizacion as co', 'co.idCotizacion = ac.idCotizacion');
            $this->db->where(array('us.idUsuario' => $datos['idUsuario'],'co.idCotizacion' => $datos['idCotizacion']));
            $aprobador = $this->db->get();
            if (!$aprobador) throw new Exception("Error en la BD");
            $aprobador = $aprobador->result_array();

            $data['aprobadorEstaCotizacion'] = count($aprobador);

            $this->db->trans_commit();
            return $data;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarTodasPlantillas($idEmpresa)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('plantilladiseno', array('publica' => '1', 'eliminado'=>0, 'idEmpresa'=> $idEmpresa));
            if (!$query) throw new Exception("Error en la BD");   
            // $row = array();
            // if ($query->num_rows() > 0) {
                $array = $query->result_array();
                // $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el serv
            // }
            // print_r($array);exit();
            $this->db->trans_commit();
            return $array;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    



    function insertarPlantilla($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('plantilladiseno', $data['diseno']);
            if (!$query) throw new Exception("Error en la BD");   
            // $insert_id = $this->db->insert_id();
            // $palabras = explode(",", $data['palabras']); ;
            // foreach ($palabras as $palabra) {
            //     $row = array(
            //     'idEmpleado' => $insert_id,
            //     'descripcion' => $palabra
            //     );
            //     $query = $this->db->insert('palabraClaveEmpleado', $row);
            //     if (!$query) throw new Exception("Error en la BD");   
            // }
            $this->db->trans_commit();
            return true;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }

    }
}
?>