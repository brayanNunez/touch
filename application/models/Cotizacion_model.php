<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cotizacion_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
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

            $clientes = $this->db->query("SELECT cl.idCliente, cl.nombre, cl.primerApellido, cl.segundoApellido, cl.todosVendedores, mec.valido  FROM touch.cliente as cl left join (SELECT uc.idCliente, 1 as valido FROM usuario_cliente as uc inner join usuario as u on u.idUsuario = uc.idUsuario where u.idUsuario = ".$datos['idUsuario'].") as mec on mec.idCliente = cl.idCliente where cl.eliminado = 0 order by nombre ASC ;");
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

            // print_r($plantillas);exit();
            $data['clientes'] = $misClientes;
            $data['plantillas'] = $plantillas;
            $data['servicios'] = $resultado;
            $data['formasPago'] = $formaPago;
            $data['monedas'] = $moneda;

            // print_r($data);exit();

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

            $query = $this->db->insert('plantilladiseno', $data['datos']);
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