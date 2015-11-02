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
        $lista = $this->Cliente_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/clientes_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
         $paises = $this->Cliente_model->paises();
        if ($paises === false || $paises === array()) {
            echo "Error en la transacción";
        } else {
            $data['paises'] = $paises;
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

        $data['gustos'] = $this->input->post('cliente_gustos');
        $data['medios'] = $this->input->post('cliente_medios');

        $juridico = $this->input->post('cliente_tipo');
        
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
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                // 'fechaNacimiento' => null,
                'correo' => $this->input->post('clientejuridico_correo'),
                'fax' => $this->input->post('clientejuridico_fax'),
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
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
                'correo' => $this->input->post('cliente_correo'),
                // 'fax' => null,
                'activo' => '1',
                'eliminado' => '0'
            );
        }




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
                 'eliminado' => '0'
                 );
                array_push($contactos, $contacto);
                $contactosObtenidos++;
            }
            $contador++;
         }

         $data['contactos'] = $contactos;

        if (!$this->Cliente_model->insertar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }
        
    }

    public function editar($id)
    {
//        $data['archivos'] = array();
//        $data['archivos'][] = array('file_name' => 'archivo1', 'file_ext' => '.png', 'file_date' => '2015/08/04',
//            'file_description' => 'Imagen del cliente', 'file_size' => '13 KB');
//        $data['archivos'][] = array('file_name' => 'archivo2', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
//            'file_description' => 'Contrato individual de trabajo', 'file_size' => '187 KB');
//        $data['archivos'][] = array('file_name' => 'archivo3', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
//            'file_description' => 'Planta de trabajo', 'file_size' => '152 KB');
//        $data['archivos'][] = array('file_name' => 'archivo4', 'file_ext' => '.docx', 'file_date' => '2015/08/04',
//            'file_description' => 'Contrato en formato .docx', 'file_size' => '24 KB');
//        $data['archivos'][] = array('file_name' => 'archivo5', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
//            'file_description' => 'Productos ofrecidos', 'file_size' => '48 KB');
//        $data['archivos'][] = array('file_name' => 'archivo6', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
//            'file_description' => 'Contrato por tiempo determinado', 'file_size' => '48 KB');

        

        $resultado = $this->Cliente_model->cargar(decryptIt($id)); 
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacción";
        } else {
                $data['resultado'] = $resultado;
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

        $data['gustos'] = $this->input->post('cliente_gustos');
        $data['medios'] = $this->input->post('cliente_medios');

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
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                'fechaNacimiento' => null,
                'correo' => $this->input->post('clientejuridico_correo'),
                'fax' => $this->input->post('clientejuridico_fax'),
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
                'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
                'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
                'domicilio' => $this->input->post('cliente_direccionDomicilio'),
                'enviarFacturas' => $enviarFacturas,  
                'descuentoFijo' => $this->input->post('cliente_descuento'),  
                'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
                'correo' => $this->input->post('cliente_correo'),
                'fax' => null,
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

    public function agregarArchivo() {
        $path = './files/empresas/1/clientes/1';
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
//            $error = array('error' => $this->upload->display_errors());
            echo 0;
        } else {
            $data['upload_data'] = $this->upload->data();
            $data['datos'] = array(
                'idCliente' => 1,
                'nombre' => $data['upload_data']['raw_name'].$data['upload_data']['file_ext'],
                'tamano' => $data['upload_data']['file_size'],
//                'fecha' => 'curdate()',
                'descripcion' => $this->input->post('archivo_descripcion')
            );
            $resultado = $this->Cliente_model->agregarArchivo($data);
            $archivo = $path.'/'.$data['datos']['nombre'];
            if(!$resultado) {
                unlink($archivo);
                echo 1;
            } else {
                echo 2;
            }
        }
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

    public function eliminarArchivo() {
        $id = $_POST['idEliminar'];
        $resultado = $this->Cliente_model->eliminarArchivo(decryptIt($id));
        if (!$resultado) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            $ruta = './files/empresas/1/clientes/1/'.$resultado;
            if($resultado != 'noArchivo') {
                unlink($ruta);
            }
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



}

?>