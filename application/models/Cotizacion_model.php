<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizacion_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function busqueda($idEmpresa, $busqueda)
    {
        try{
            $this->db->trans_begin();

            $whereEstado = '';
            if ($busqueda['idEstado'] != 0) {
                $whereEstado = ' AND ec.idEstadoCotizacion = '.$busqueda["idEstado"];
            }

            $whereUsuario = '';
            if ($busqueda['idUsuario'] != 0) {
                $whereUsuario = ' AND us.idUsuario = '.$busqueda["idUsuario"];
            }

            $whereCliente = '';
            if ($busqueda['idCliente'] != 0) {
                $whereCliente = ' AND cl.idCliente = '.$busqueda["idCliente"];
            }

            
            $desde = date("Y-m-d", strtotime($busqueda["desde"]));
            $hasta = date("Y-m-d", strtotime($busqueda["hasta"]));

            $hasta = strtotime('+1 day', strtotime($hasta));
            $hasta = date('Y-m-d', $hasta); 
            
            $whereFechas = ' AND (co.fechaCreacion BETWEEN "'.$desde.'" AND "'.$hasta.'")';

            $whereServicio = '';
            $leftJoinServicio = '';
            if ($busqueda['idServicio'] != 0) {
                $whereServicio = ' AND li.idServicio = '.$busqueda["idServicio"];
                $leftJoinServicio = ' left join lineadetalle as li on li.idCotizacion = co.idCotizacion ';
            }

            $cotizaciones = $this->db->query("SELECT co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado FROM cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario".$leftJoinServicio." where co.idEmpresa = ".$idEmpresa." AND co.eliminado=0".$whereEstado.$whereUsuario.$whereCliente.$whereFechas.$whereServicio);


            if (!$cotizaciones) throw new Exception("Error en la BD"); 
            $cotizaciones = $cotizaciones->result_array();
            $resultado = array();
            foreach ($cotizaciones as $cotizacion) {
                $cotizacion['idCotizacion'] = encryptIt($cotizacion['idCotizacion']);
                $cotizacion['idCliente'] = encryptIt($cotizacion['idCliente']);
                $cotizacion['idUsuario'] = encryptIt($cotizacion['idUsuario']);
                $cotizacion['fechaCreacion'] = date("d-m-Y", strtotime($cotizacion['fechaCreacion']));
                array_push($resultado, $cotizacion);
            }

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
       
    }

     function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            // $this->db->from('cotizacion');

            
            $cotizaciones = $this->db->query("SELECT co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado FROM cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario where co.idEmpresa = ".$idEmpresa." AND co.eliminado=0;");


            if (!$cotizaciones) throw new Exception("Error en la BD"); 
            $data['lista'] = $cotizaciones->result_array();

            $clientes = $this->db->get_where('cliente', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$clientes) throw new Exception("Error en la BD"); 
            $data['clientes'] = $clientes->result_array();

            $servicios = $this->db->get_where('servicio', array('estado' => 0,'idEmpresa' => $idEmpresa));
            if (!$servicios) throw new Exception("Error en la BD"); 
            $data['servicios'] = $servicios->result_array();

            $usuarios = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$usuarios) throw new Exception("Error en la BD"); 
            $data['vendedores'] = $usuarios->result_array();

            $estado = $this->db->get('estadocotizacion');
            if (!$estado) throw new Exception("Error en la BD"); 
            $data['estados'] = $estado->result_array();

            $this->db->select('MIN(fechaCreacion) as fecha');
            $fecha = $this->db->get_where('cotizacion', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$fecha) throw new Exception("Error en la BD"); 
            $fecha = $fecha->result_array();
            $fecha = array_shift($fecha);
            $data['fechaMinima'] = $fecha['fecha'];
            // echo $data['fechaMinima']; exit();

            $this->db->trans_commit();
            return $data;
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

            
            $this->db->set('fechaCreacion', 'NOW()', FALSE);
            $query = $this->db->insert('cotizacion', array('idEmpresa' => $datos['idEmpresa'],'idEstadoCotizacion' => 1,'idUsuario' => $datos['idUsuario'], 'eliminado' => 1));
            if (!$query) throw new Exception("Error en la BD"); 
            $data['idCotizacion'] = $this->db->insert_id();


            $this->db->select('fechaCreacion');
            $query = $this->db->get_where('cotizacion', array('idCotizacion' => $data['idCotizacion']));
            if (!$query) throw new Exception("Error en la BD"); 

            $query = $query->result_array();
            $data['fechaCreacion'] = array_shift($query)['fechaCreacion'];


             $query = $this->db->insert('plantilladiseno', array('idEmpresa' => $datos['idEmpresa'],'idCotizacion' => $data['idCotizacion'],'publica' => 0, 'eliminado' => 0));
            if (!$query) throw new Exception("Error en la BD");

            $this->db->select('nombre, correo, telefono, logo, firma, sitioWeb, codigoCotizacion');
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
            $query = $this->db->get_where('cotizacion', array('idCotizacion'=> $datos['idCotizacion']));
            if (!$query) throw new Exception("Error en la BD");  
            $array = $query->result_array(); 
            $data['cotizacion'] = array_shift($array);

            $clientes = $this->db->query("SELECT cl.idCliente, cl.nombre, cl.primerApellido, cl.segundoApellido, cl.todosVendedores, mec.valido  FROM cliente as cl left join (SELECT uc.idCliente, 1 as valido FROM usuario_cliente as uc inner join usuario as u on u.idUsuario = uc.idUsuario where u.idUsuario = ".$data['cotizacion']['idUsuario'].") as mec on mec.idCliente = cl.idCliente where cl.eliminado = 0 order by nombre ASC ;");
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

            $this->db->select('nombre, correo, telefono, logo, firma, sitioWeb, codigoCotizacion');
            $query = $this->db->get_where('empresa', array('idEmpresa'=> $datos['idEmpresa']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['empresa'] = array_shift($array);



            $this->db->select('nombre, primerApellido, segundoApellido');
            $query = $this->db->get_where('usuario', array('idUsuario'=> $data['cotizacion']['idUsuario']));
            if (!$query) throw new Exception("Error en la BD");   

            $array = $query->result_array(); 
            $data['usuario'] = array_shift($array);

            // $this->db->select('nombre, primerApellido, segundoApellido');
             

            

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

    function tiposMoneda($idEmpresa) {
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
    function verificarNombreMoneda($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('moneda', $data['moneda']);
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
    function insertarMoneda($data)
    {
        try{
            $this->db->trans_begin();

//            print_r($data); exit();
            $query = $this->db->insert('moneda', $data['datos']);
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
    function valorMoneda($id) {
        try {
            $this->db->trans_begin();

            $query = $this->db->get_where('moneda', array('idMoneda' => $id, 'eliminado' => 0));
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

    function clientes($idEmpresa) {
        try{
            $this->db->trans_begin();

            $this->db->select('idCliente, nombre');
            $this->db->where(array('idEmpresa' => $idEmpresa, 'eliminado' => 0));
            $clientes = $this->db->get('cliente');
            if (!$clientes) {
                throw new Exception("Error en la BD");
            }
            $resultado = $clientes->result_array();

            $this->db->trans_commit();
            return $resultado;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    function verificarIdentificacionCliente($data)
    {
        try{
            $this->db->trans_begin();
            $existe = 0;

            $query = $this->db->get_where('cliente', $data['datos']);
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
    function insertarCliente($data)
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