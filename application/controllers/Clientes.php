<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Cliente_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data = $this->Cliente_model->cargarTodos($idEmpresa);
        // $data['lista'] = $lista;
        if ($data == false) {
            $data['lista'] = false;
        }
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/clientes_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function busqueda(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        
        $busqueda = array('cliente_vendedores' => $this->input->post('cliente_vendedores'),
            'cliente_gustos' => $this->input->post('cliente_gustos'),
            'cliente_medios' => $this->input->post('cliente_medios')
            );
        // echo print_r($busqueda); exit();

        $busqueda = $this->Cliente_model->busqueda($idEmpresa, $busqueda);

        
        if ($busqueda === false) {
            echo "0";
        } else {
            echo json_encode($busqueda); 
        }
    }

    public function busquedaCotizacion(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        
        $busqueda = array('desde' => $this->input->post('busqueda-fecha-desde'),
            'hasta' => $this->input->post('busqueda-fecha-hasta'),
            'busquedaCotizacion_estado' => $this->input->post('busquedaCotizacion_estado')
            );
        // echo print_r($busqueda); exit();

        $busqueda = $this->Cliente_model->busquedaCotizacion($idEmpresa, $busqueda);

        if ($busqueda === false) {
            echo "0";
        } else {
            echo json_encode($busqueda); 
        }
    }

    public function agregar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $paises = $this->Cliente_model->paises();
        $formasPago = $this->Cliente_model->formasPago($idEmpresa);
        $monedas = $this->Cliente_model->monedas($idEmpresa);
        if ($paises === false || $formasPago === false || $monedas === false) {
            echo "Error en la transacción";
        } else {
            $data['paises'] = $paises;
            $data['formasPago'] = $formasPago;
            $data['monedas'] = $monedas;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('clientes/clientes_crear', $data);
            $this->load->view('layout/default/footer');
        }
    }

    //Metodo llamado mediante ajax
    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');

        $todosVendedores = 0;
        if ($this->input->post('checkbox_todosVendedores')) {
            $todosVendedores = 1;
        }
        $listaVendedores = '';
        if($todosVendedores == 0) {
           $listaVendedores = $this->input->post('cliente_vendedores');
        }
        // echo $listaVendedores; exit();

        $data['gustos'] = $this->input->post('cliente_gustos');
        $data['medios'] = $this->input->post('cliente_medios');
        $data['vendedores'] = $listaVendedores;

        $juridico = $this->input->post('cliente_tipo');
        $todosVendedores = 0;
        if ($this->input->post('checkbox_todosVendedores')) {
            $todosVendedores = 1;
        }
        if ($juridico) {
            $enviarFacturas = 0;
            if ($this->input->post('checkbox_correoClientejuridico')) {
                $enviarFacturas = 1;
            }
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa, 
                'juridico' => $juridico,
                'identificacion' => $this->input->post('clientejuridico_id'),
                // 'primerApellido' => null,
                // 'segundoApellido' => null,
                'nombre' => $this->input->post('clientejuridico_nombre'),
                'nombreFantasia' => $this->input->post('clientejuridico_nombreFantasia'),
                // 'telefonoMovil' => null,
                'telefonoFijo' =>$this->input->post('clientejuridico_telefono'),
                'nacionalidad' =>$this->input->post('cliente_nacionalidad'),
                'pais' =>$this->input->post('cliente_direccionPais'),
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                // 'fechaNacimiento' => null,
                'correo' => $this->input->post('clientejuridico_correo'),
                'fax' => $this->input->post('clientejuridico_fax'),
                'todosVendedores' => $todosVendedores, 
                'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
                'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
                'activo' => '1',
                'eliminado' => '0'
            );
        } else {
            $enviarFacturas = 0;
            if ($this->input->post('checkbox_correoCliente')) {
                $enviarFacturas = 1;
            }
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa, 
                'juridico' => $juridico,
                'identificacion' => $this->input->post('cliente_id'),
                'nombre' => $this->input->post('cliente_nombre'),
                'primerApellido' => $this->input->post('cliente_apellido1'),
                'segundoApellido' => $this->input->post('cliente_apellido2'),
                // 'nombreFantasia' => null,
                'telefonoMovil' => $this->input->post('cliente_telefonoMovil'),
                'telefonoFijo' => $this->input->post('cliente_telefono'),
                'nacionalidad' => $this->input->post('cliente_nacionalidad'),
                'pais' => $this->input->post('cliente_direccionPais'),
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
                'correo' => $this->input->post('cliente_correo'),
                // 'fax' => null,
                'todosVendedores' => $todosVendedores,
                'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
                'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
                'activo' => '1',
                'eliminado' => '0'
            );
        }

        // echo print_r($data['datos']); exit();

        $contactos = array();
        $contador = 0;
        $contactosObtenidos = 0;
        $cantidadContactos = $this->input->post('cantidadContactos');
        while ($contactosObtenidos < $cantidadContactos) {
            if (isset($_POST['contacto_'.$contador])) {
                    $enviarFacturas = 0;
                    if ($this->input->post('checkbox_contactoCorreoCliente_'.$contador)) {
                        $enviarFacturas = 1;
                    }
                  $contacto = array(
                 'nombre' => $this->input->post('cliente_contactoNombre_'.$contador),
                 'primerApellido' => $this->input->post('cliente_contactoApellido1_'.$contador),
                 'segundoApellido' => $this->input->post('cliente_contactoApellido2_'.$contador),
                 'correo' => $this->input->post('cliente_contactoCorreo_'.$contador),
                 'telefono' => $this->input->post('cliente_contactoTelefono_'.$contador),
                 'puesto' => $this->input->post('cliente_contactoPuesto_'.$contador),
                 'enviarFacturas' => $enviarFacturas,   
                 'principal' => '0',
                 'eliminado' => '0'
                 );
                array_push($contactos, $contacto);
                $contactosObtenidos++;
            }
            $contador++;
         }
        $data['contactos'] = $contactos;

        $photo = explode('.',$this->input->post('cliente_fotografia'));
        $data['extension'] = end($photo);

        $cliente = $this->Cliente_model->insertar($data);
        if (!$cliente) {
            //Error en la transacción
            echo 0;
        } else {
            $config['upload_path'] = './files/empresas/'.$idEmpresa.'/clientes/'.$cliente;
            $config['file_name'] = 'profile_picture_'.$cliente.'.'.$data['extension'];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('userfile')) {
//                $error = array('error' => $this->upload->display_errors());echo $error['error'];
            }
//            echo './files/empresas/'.$idEmpresa.'/clientes/'.$cliente.'<br/>';
//            echo 'profile_picture_'.$cliente.'.'.$data['extension'].'<br/>';

            // correcto
            echo $cliente;
        }
    }

    public function editar($id)
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $resultado = $this->Cliente_model->cargar(decryptIt($id));
        $paises = $this->Cliente_model->paises();
        $formasPago = $this->Cliente_model->formasPago($idEmpresa);
        $monedas = $this->Cliente_model->monedas($idEmpresa);
        if ($resultado === false || $resultado === array() || $paises === false || $formasPago === false || $monedas === false) {
            echo "Error en la transacción";
        } else {
            $data['resultado'] = $resultado;
            $data['paises'] = $paises;
            $data['formasPago'] = $formasPago;
            $data['monedas'] = $monedas;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('clientes/cliente_info', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function modificar($id)
    {
        // $sessionActual = $this->session->userdata('logged_in');
        // $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');

        $todosVendedores = 0;
        if ($this->input->post('checkbox_todosVendedores')) {
            $todosVendedores = 1;
        }

        $listaVendedores = '';
        if($todosVendedores == 0) {
           $listaVendedores = $this->input->post('cliente_vendedores');
        }

        $data['gustos'] = $this->input->post('cliente_gustos');
        $data['medios'] = $this->input->post('cliente_medios');
        $data['vendedores'] = $listaVendedores;
        // echo $data['vendedores']; exit();
        // $data['vendedores'] = $this->input->post('cliente_vendedores');

        $juridico = $this->input->post('cliente_tipo');


        if ($juridico) {
            $enviarFacturas = 0;
            if ($this->input->post('checkbox_correoClientejuridico')) {
                $enviarFacturas = 1;
            }
            $data['datos'] = array(
                // 'idEmpresa' => $idEmpresa,
                'juridico' => $juridico,
                'identificacion' => $this->input->post('clientejuridico_id'),
                'primerApellido' => null,
                'segundoApellido' => null,
                'nombre' => $this->input->post('clientejuridico_nombre'),
                'nombreFantasia' => $this->input->post('clientejuridico_nombreFantasia'),
                'telefonoMovil' => null,
                'telefonoFijo' =>$this->input->post('clientejuridico_telefono'),
                'nacionalidad' =>$this->input->post('cliente_nacionalidad'),
                'pais' =>$this->input->post('cliente_direccionPais'),
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,
                'descuentoFijo' => $this->input->post('cliente_descuento'),
                'fechaNacimiento' => null,
                'correo' => $this->input->post('clientejuridico_correo'),
                'fax' => $this->input->post('clientejuridico_fax'),
                'todosVendedores' => $todosVendedores,
                'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
                'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
                'activo' => '1',
                'eliminado' => '0'
            );
        } else {
            $enviarFacturas = 0;
            if ($this->input->post('checkbox_correoCliente')) {
                $enviarFacturas = 1;
            }
            $data['datos'] = array(
                // 'idEmpresa' => $idEmpresa,
                'juridico' => $juridico,
                'identificacion' => $this->input->post('cliente_id'),
                'nombre' => $this->input->post('cliente_nombre'),
                'primerApellido' => $this->input->post('cliente_apellido1'),
                'segundoApellido' => $this->input->post('cliente_apellido2'),
                'nombreFantasia' => null,
                'telefonoMovil' => $this->input->post('cliente_telefonoMovil'),
                'telefonoFijo' => $this->input->post('cliente_telefono'),
                'nacionalidad' =>$this->input->post('cliente_nacionalidad'),
                'pais' =>$this->input->post('cliente_direccionPais'),
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,
                'descuentoFijo' => $this->input->post('cliente_descuento'),
                'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
                'correo' => $this->input->post('cliente_correo'),
                'fax' => null,
                'todosVendedores' => $todosVendedores,
                'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
                'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
                'activo' => '1',
                'eliminado' => '0'
            );
        }
        $data['id'] = decryptIt($id);



        $editados = array();
        $eliminados = array();
        $nuevos = array();

        $contador = 0;
        $contactosObtenidos = 0;
        $cantidadContactos = $this->input->post('cantidadContactos');


        while ($contactosObtenidos < $cantidadContactos) {
            if (isset($_POST['contacto_'.$contador])) {
                $accionEfectuada = $this->input->post('contacto_'.$contador);
                if ($accionEfectuada=='2') {//fue eliminado
                    $identificacion =  decryptIt($this->input->post('idContacto_'.$contador));
                    $contacto = array(
                         'idPersonaContacto' =>decryptIt($this->input->post('idContacto_'.$contador)),
                         'eliminado' => '1'
                         );
                    array_push($eliminados, $contacto);
                } else {
                    if ($accionEfectuada=='1') {// no fue eliminado
                        $enviarFacturas = 0;
                         if ($this->input->post('checkbox_contactoCorreoCliente_'.$contador)) {
                            $enviarFacturas = 1;
                         }
                          $contacto = array(
                         'idPersonaContacto' =>decryptIt($this->input->post('idContacto_'.$contador)),
                         'nombre' => $this->input->post('cliente_contactoNombre_'.$contador),
                         'primerApellido' => $this->input->post('cliente_contactoApellido1_'.$contador),
                         'segundoApellido' => $this->input->post('cliente_contactoApellido2_'.$contador),
                         'correo' => $this->input->post('cliente_contactoCorreo_'.$contador),
                         'telefono' => $this->input->post('cliente_contactoTelefono_'.$contador),
                         'puesto' => $this->input->post('cliente_contactoPuesto_'.$contador),
                         'enviarFacturas' => $enviarFacturas,
                         'eliminado' => '0'
                         );
                        array_push($editados, $contacto);

                    } else {// es nuevo
                         $enviarFacturas = 0;
                         if ($this->input->post('checkbox_contactoCorreoCliente_'.$contador)) {
                            $enviarFacturas = 1;
                         }
                          $contacto = array(
                         'idCliente' => decryptIt($id),
                         'nombre' => $this->input->post('cliente_contactoNombre_'.$contador),
                         'primerApellido' => $this->input->post('cliente_contactoApellido1_'.$contador),
                         'segundoApellido' => $this->input->post('cliente_contactoApellido2_'.$contador),
                         'correo' => $this->input->post('cliente_contactoCorreo_'.$contador),
                         'telefono' => $this->input->post('cliente_contactoTelefono_'.$contador),
                         'puesto' => $this->input->post('cliente_contactoPuesto_'.$contador),
                         'enviarFacturas' => $enviarFacturas,
                         'eliminado' => '0'
                         );
                        array_push($nuevos, $contacto);
                    }

                }
                $contactosObtenidos++;
            }
            $contador++;
         }

         $data['nuevos'] = $nuevos;
         $data['editados'] = $editados;
         $data['eliminados'] = $eliminados;

        if (!$this->Cliente_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }

    }

    public function reporte()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('reportes/reporte_cliente');
        $this->load->view('layout/default/footer');
    }

    public function gustosSugerencia()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cliente_model->gustosSugerencia($idEmpresa); 
        $gustos = array();
        foreach ($resultado as $v){
            array_push($gustos,$v['nombre']);
        }

        echo json_encode($gustos);
    }

    public function gustosSugerenciaBusqueda()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cliente_model->gustosSugerencia($idEmpresa); 
        // $gustos = array();
        // foreach ($resultado as $v){
        //     array_push($gustos,$v['nombre']);
        // }

        echo json_encode($resultado);
    }

    public function mediosSugerencia()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cliente_model->mediosSugerencia($idEmpresa); 
        $gustos = array();
        foreach ($resultado as $v){
            array_push($gustos,$v['nombre']);
        }

        echo json_encode($gustos);
    }

    public function mediosSugerenciaBusqueda()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cliente_model->mediosSugerencia($idEmpresa); 
        // $gustos = array();
        // foreach ($resultado as $v){
        //     array_push($gustos,$v['nombre']);
        // }

        echo json_encode($resultado);
    }

    public function eliminar()
    {
        $id = $_POST['idEliminar'];
        if (!$this->Cliente_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    //Metodo es llamado mediante ajax
    public function existeIdentificacion()
    {
        $data['identificacion'] = $_POST['cliente_id'];
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] =  $sessionActual['idEmpresa'];
        $resultado = $this->Cliente_model->existeIdentificacion($data);
        if ($resultado === false) {
            //Error en la transacción
            echo 0; 
        } else {
            if ($resultado == 1) {
                //Ya existe esta identificacion
                echo 1;
            } else {
                //Identificacion Valida
                echo 2;
            }
        }

    }

    public function cambio_imagen($id) {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $idCliente = decryptIt($id);

        $photo = explode('.',$this->input->post('cliente_fotografia'));
        $ext = end($photo);
        $data['datos'] = array(
            'fotografia' => 'profile_picture_'.$idCliente.'.'.$ext
        );
        $data['id'] = $idCliente;

        $fotografia = $this->Cliente_model->cambiar_imagen($data);
        if (!$fotografia) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/clientes/'. $idCliente;
            if($fotografia != 'sinFoto') {
                $path = $ruta . '/'.$fotografia;
                if(is_file($path)) {
                    unlink($path);
                }
            }
            $nombreFotografia = 'profile_picture_'.$idCliente;
            $config['upload_path'] = $ruta;
            $config['file_name'] = $nombreFotografia;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
                echo 2;
            } else {
                echo base_url().'files/empresas/'.$idEmpresa.'/clientes/'.$idCliente.'/'.$nombreFotografia.'.'.$ext;
            }
        }
    }

    public function agregarArchivo($id) {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $nombreOriginal = $this->input->post('cliente_archivo');
        $nuevoNombre = $this->convertirNombre($nombreOriginal);

        $idCliente = decryptIt($id);
        $path = './files/empresas/'.$idEmpresa.'/clientes/'.$idCliente;
        $config['upload_path'] = $path;
        $config['file_name'] = $nuevoNombre;
        $config['allowed_types'] = 'jpg|png|jpeg|doc|docx|xls|pdf';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
//            $error = array('error' => $this->upload->display_errors()); echo $error['error'];
            echo 0;
        } else {
            $archivo = $this->upload->data();
            $data['datos'] = array(
                'idCliente' => $idCliente,
                'nombre' => $nombreOriginal,
                'nombreOriginal' => $archivo['raw_name'].$archivo['file_ext'],
                'tamano' => $archivo['file_size'],
                'descripcion' => $this->input->post('archivo_descripcion')
            );
            $resultado = $this->Cliente_model->agregarArchivo($data);
            $archivo = $path.'/'.$data['datos']['nombreOriginal'];
            if(!$resultado) {
                unlink($archivo);
                echo '-1';
            } else {
                echo $resultado;
            }
        }
    }
    public function eliminarArchivo() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $id = $_POST['idEliminar'];
        $persona = decryptIt($_POST['idCliente']);
        $resultado = $this->Cliente_model->eliminarArchivo(decryptIt($id));
        if (!$resultado) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            $ruta = './files/empresas/'.$idEmpresa.'/clientes/'.$persona.'/'.$resultado;
            if($resultado != 'noArchivo') {
                if(is_file($ruta)) {
                    unlink($ruta);
                }
            }
            echo 1;
        }
    }
    public function cargarArchivo()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $id = $_POST['idArchivo'];
        $resultado = $this->Cliente_model->cargarArchivo($id);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            $resultado['idEncriptado'] = encryptIt($id);
            $resultado['ruta'] = base_url().'files/empresas/'.$idEmpresa.'/clientes/'.$resultado['idCliente'].'/'.$resultado['nombreOriginal'];
            $resultado['fechaArchivo'] = date('d/m/Y  h:i a', strtotime($resultado['fecha']));
            echo json_encode($resultado);
        }
    }

    public function cambiarContactoPrincipal() {
        $idContacto = $_POST['idContacto'];
        $idCliente = $_POST['idCliente'];
        if (!$this->Cliente_model->cambiarContactoPrincipal($idContacto, $idCliente)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    //Funcion para eliminar el acento de los nombres de los archivos
    public function convertirNombre($str, $charset='utf-8'){
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caract�res

        return $str;
    }

}

?>