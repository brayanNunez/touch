<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function existeCorreo($data) {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('usuario', array('correo' => $data['correo'],  'eliminado' => 0));
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

    function insertar($data)
    {
        try{
            $this->db->trans_begin();

            $query = $this->db->insert('usuario', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $insert_id = $this->db->insert_id();

            if($data['extension'] != '' && $data['extension'] != null) {
                $nombreFotografia = 'profile_picture_' . $insert_id . '.' . $data['extension'];
                $this->db->where('idUsuario', $insert_id);
                $query = $this->db->update('usuario', array('fotografia' => $nombreFotografia));
            }

            $roles = $data['roles'];
            foreach ($roles as $rol=>$valor) {
                if($valor) {
                    $row = array(
                        'idUsuario' => $insert_id,
                        'idPrivilegio' => $valor,
                    );
                    $query = $this->db->insert('privilegio_usuario', $row);
                    if (!$query) {
                        throw new Exception("Error en la BD");
                    }
                }
            }
            $this->db->trans_commit();

            $path = 'files/empresas/'.$data['datos']['idEmpresa'].'/usuarios/'.$insert_id;
            if(!is_dir($path)){
                mkdir($path);
            }

            return $insert_id;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarPorCorreoUsuarioContrasena($data)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('usuario', array('correo' => $data['correo'],  'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
                if ($row['contrasena'] != $data['contrasena']) {
                    $this->db->trans_commit();
                    return 2;
                }
                $idUsuario = $row['idUsuario'];
                $roles = array(
                    'rolAdministrador' => false,
                    'rolAprobador' => false,
                    'rolCotizador' => false,
                    'rolContador' => false
                );
                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $idUsuario));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                foreach ($privilegios as $pr) {
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = true;
                            break;
                        case 2:
                            $roles['rolAprobador'] = true;
                            break;
                        case 3:
                            $roles['rolCotizador'] = true;
                            break;
                        case 4:
                            $roles['rolContador'] = true;
                            break;
                    }
                }
                $row['roles'] = $roles;
            } else{
                $this->db->trans_commit();
                return 1;
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return 0;
        }
    }

    function cargar($id)
    {
        try {
            $this->db->trans_begin();
            $query = $this->db->get_where('usuario', array('idUsuario' => $id,  'eliminado' => 0));
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
                $idUsuario = $row['idUsuario'];
                $roles = array(
                    'rolAdministrador' => '',
                    'rolAprobador' => '',
                    'rolCotizador' => '',
                    'rolContador' => ''
                );
                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $idUsuario));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                foreach ($privilegios as $pr) {
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = 'checked';
                            break;
                        case 2:
                            $roles['rolAprobador'] = 'checked';
                            break;
                        case 3:
                            $roles['rolCotizador'] = 'checked';
                            break;
                        case 4:
                            $roles['rolContador'] = 'checked';
                            break;
                    }
                }
                $row['roles'] = $roles;

                $cotizaciones = $this->db->query("SELECT mo.signo ,co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, co.monto, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado FROM cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join moneda as mo on co.idMoneda = mo.idMoneda left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario where co.idUsuario = ".$id." AND co.eliminado=0");
                if (!$cotizaciones) {
                    throw new Exception("Error en la BD");
                }
                $row['cotizaciones'] = $cotizaciones->result_array();

                $idEmpresa = $row['idEmpresa'];
                $clientes = $this->db->get_where('cliente', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
                if (!$clientes) throw new Exception("Error en la BD");
                $row['clientes'] = $clientes->result_array();

                $servicios = $this->db->get_where('servicio', array('estado' => 0,'idEmpresa' => $idEmpresa));
                if (!$servicios) throw new Exception("Error en la BD");
                $row['servicios'] = $servicios->result_array();

//                $usuarios = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
//                if (!$usuarios) throw new Exception("Error en la BD");
//                $row['vendedores'] = $usuarios->result_array();

                $estado = $this->db->get('estadocotizacion');
                if (!$estado) throw new Exception("Error en la BD");
                $row['estados'] = $estado->result_array();

                $this->db->select('MIN(fechaCreacion) as fecha');
                $fecha = $this->db->get_where('cotizacion', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
                if (!$fecha) throw new Exception("Error en la BD");
                $fecha = $fecha->result_array();
                $fecha = array_shift($fecha);
                $row['fechaMinima'] = $fecha['fecha'];
//                echo $data['fechaMinima']; exit();
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function cargarTodos($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            $usuarios = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));
            if (!$usuarios) {
                throw new Exception("Error en la BD");
            }
            $usuarios = $usuarios->result_array();

            $this->db->trans_commit();
            return $usuarios;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }
    
    function cargarVendedores($idEmpresa)
    {
        try{
            $this->db->trans_begin();

            // CONCAT(nombre, ' ' ,primerApellido, ' ', segundoApellido) as 
            $this->db->select("CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as nombre, us.idUsuario", false);
            $this->db->from('usuario as us');
            $this->db->join('privilegio_usuario as pu', 'pu.idUsuario = us.idUsuario');
            $this->db->join('privilegio as pr', 'pr.idPrivilegio = pu.idPrivilegio');
            $this->db->where(array('us.eliminado' => 0,'us.idEmpresa' => $idEmpresa, 'pr.nombre' => 'Cotizador'));

            $usuarios = $this->db->get();

             // $usuarios = $this->db->get_where('usuario', array('eliminado' => 0,'idEmpresa' => $idEmpresa));

            if (!$usuarios) {
                throw new Exception("Error en la BD");
            }
            $usuarios = $usuarios->result_array();

            $this->db->trans_commit();
            return $usuarios;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function modificar($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idUsuario', $data['id']);
            $query = $this->db->update('usuario', $data['datos']);
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $roles = $data['roles'];
            $this->db->where('idUsuario', $data['id']);
            $query = $this->db->delete('privilegio_usuario');
            foreach ($roles as $rol=>$valor) {
                if($valor) {
                    $row = array(
                        'idUsuario' => $data['id'],
                        'idPrivilegio' => $valor,
                    );
                    $query = $this->db->insert('privilegio_usuario', $row);
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

    function eliminar($id)
    {
        try{
            $this->db->trans_begin();

            $this->db->where('idUsuario', $id);
            $query = $this->db->update('usuario', array('eliminado' => 1));
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

    function cambiar_contrasena($data)
    {
        try{
            $this->db->trans_begin();

            $this->db->select('contrasena');
            $this->db->where('idUsuario', $data['id']);
            $this->db->from('usuario');
            $query = $this->db->get();
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            if($query->num_rows() > 0) {
                $datos = $query->result_array();
                $pass = $datos[0]['contrasena'];
                if(!($pass === $data['actual'])) {
                    return 'errorE';
                }
            } else {
                return false;
            }
            if($data['confirmacion'] === $data['datos']['contrasena']) {
                $this->db->where('idUsuario', $data['id']);
                $query = $this->db->update('usuario', $data['datos']);
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $this->db->trans_commit();
                return true;
            } else {
                return 'errorD';
            }
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
            $this->db->where('idUsuario', $data['id']);
            $this->db->from('usuario');
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
                $this->db->where('idUsuario', $data['id']);
                $query2 = $this->db->update('usuario', $data['datos']);
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

    function datosPerfil($idUsuario)
    {
        try {
            $this->db->trans_begin();

            $this->db->select("idUsuario, idEmpresa, correo, CONCAT(nombre, ' ', primerApellido, ' ', segundoApellido) as nombreUsuario, fotografia", false);
            $this->db->where('idUsuario', $idUsuario);
            $query = $this->db->get('usuario');
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
                $row['idUsuarioEncriptado'] = encryptIt($row['idUsuario']);

                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $idUsuario));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                $roles = array(
                    'rolAdministrador' => false,
                    'rolAprobador' => false,
                    'rolCotizador' => false,
                    'rolContador' => false
                );
                $rolesAsignados = '';
                foreach ($privilegios as $pr) {
                    if($rolesAsignados != '') {
                        $rolesAsignados .= ',';
                    }
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = true;
                            $rolesAsignados .= 'Administrador';
                            break;
                        case 2:
                            $roles['rolAprobador'] = true;
                            $rolesAsignados .= 'Aprobador';
                            break;
                        case 3:
                            $roles['rolCotizador'] = true;
                            $rolesAsignados .= 'Cotizador';
                            break;
                        case 4:
                            $roles['rolContador'] = true;
                            $rolesAsignados .= 'Contador';
                            break;
                    }
                }
                $row['roles_string'] = $rolesAsignados;
                $row['roles'] = $roles;
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function datosPerfilCorreo($correoUsuario)
    {
        try {
            $this->db->trans_begin();

            $this->db->select("idUsuario, idEmpresa, CONCAT(nombre, ' ', primerApellido, ' ', segundoApellido) as nombreUsuario, fotografia", false);
            $this->db->where('correo', $correoUsuario);
            $query = $this->db->get('usuario');
            if (!$query) {
                throw new Exception("Error en la BD");
            }
            $row = array();
            if ($query->num_rows() > 0) {
                $array = $query->result_array();
                $row = array_shift($array);//obtiene el primer elemento.. el [0] no sirve en el server
                $row['idUsuarioEncriptado'] = encryptIt($row['idUsuario']);

                $query = $this->db->get_where('privilegio_usuario', array('idUsuario' => $row['idUsuario']));
                if (!$query) {
                    throw new Exception("Error en la BD");
                }
                $privilegios = $query->result_array();
                $roles = array(
                    'rolAdministrador' => false,
                    'rolAprobador' => false,
                    'rolCotizador' => false,
                    'rolContador' => false
                );
                $rolesAsignados = '';
                foreach ($privilegios as $pr) {
                    if($rolesAsignados != '') {
                        $rolesAsignados .= ',';
                    }
                    switch($pr['idPrivilegio']) {
                        case 1:
                            $roles['rolAdministrador'] = true;
                            $rolesAsignados .= 'Administrador';
                            break;
                        case 2:
                            $roles['rolAprobador'] = true;
                            $rolesAsignados .= 'Aprobador';
                            break;
                        case 3:
                            $roles['rolCotizador'] = true;
                            $rolesAsignados .= 'Cotizador';
                            break;
                        case 4:
                            $roles['rolContador'] = true;
                            $rolesAsignados .= 'Contador';
                            break;
                    }
                }
                $row['roles_string'] = $rolesAsignados;
                $row['roles'] = $roles;
            }
            $this->db->trans_commit();
            return $row;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return false;
        }
    }

    function busqueda($idUsuario, $busqueda)
    {
        try{
            $this->db->trans_begin();

            $whereEstado = '';
            if ($busqueda['idEstado'] != 0) {
                $whereEstado = ' AND ec.idEstadoCotizacion = '.$busqueda["idEstado"];
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

            $cotizaciones = $this->db->query("SELECT mo.signo ,co.idCotizacion, co.numero, co.codigo, co.fechaCreacion, co.monto, if(cl.juridico = 1,cl.nombre,CONCAT(cl.nombre, ' ', cl.primerApellido, ' ', cl.segundoApellido)) as cliente, cl.idCliente, CONCAT(us.nombre, ' ', us.primerApellido, ' ', us.segundoApellido) as vendedor, us.idUsuario,ec.descripcion as estado FROM cotizacion as co left join cliente as cl on co.idCliente = cl.idCliente left join moneda as mo on co.idMoneda = mo.idMoneda left join estadocotizacion as ec on co.idEstadoCotizacion = ec.idEstadoCotizacion left join usuario as us on co.idUsuario = us.idUsuario".$leftJoinServicio." where co.idUsuario = ".$idUsuario." AND co.eliminado=0".$whereEstado.$whereCliente.$whereFechas.$whereServicio);

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

}

?>