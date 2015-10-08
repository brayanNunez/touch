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
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('clientes/clientes_crear');
        $this->load->view('layout/default/footer');
    }

    //Metodo llamado mediante ajax
     public function insertar()
    {

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');

        $data['gustos'] = $this->input->post('cliente_gustos');
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
        $data['archivos'] = array();
        $data['archivos'][] = array('file_name' => 'archivo1', 'file_ext' => '.png', 'file_date' => '2015/08/04',
            'file_description' => 'Imagen del cliente', 'file_size' => '13 KB');
        $data['archivos'][] = array('file_name' => 'archivo2', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato individual de trabajo', 'file_size' => '187 KB');
        $data['archivos'][] = array('file_name' => 'archivo3', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Planta de trabajo', 'file_size' => '152 KB');
        $data['archivos'][] = array('file_name' => 'archivo4', 'file_ext' => '.docx', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato en formato .docx', 'file_size' => '24 KB');
        $data['archivos'][] = array('file_name' => 'archivo5', 'file_ext' => '.jpg', 'file_date' => '2015/08/04',
            'file_description' => 'Productos ofrecidos', 'file_size' => '48 KB');
        $data['archivos'][] = array('file_name' => 'archivo6', 'file_ext' => '.pdf', 'file_date' => '2015/08/04',
            'file_description' => 'Contrato por tiempo determinado', 'file_size' => '48 KB');

        

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



        $contactos = array();
        $contador = 0;
        $contactosObtenidos = 0;
        $cantidadContactos = $this->input->post('cantidadContactos');
        while ($contactosObtenidos < $cantidadContactos) {
            if (isset($_POST['contacto_'.$contador])) {
                $accionEfectuada = $this->input->post('contacto_'.$contador);
                if ($accionEfectuada=='2') {
                    echo "eliminado_______";
                } else {
                    if ($accionEfectuada=='1') {
                         echo 'editado______';
                    } else {
                         echo 'nuevo______';
                    }
                    
                   
                }
                


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
        $gustos = [];
        foreach ($resultado as $v){
            array_push($gustos,$v['nombre']);
        }
       


        // $json = '[ "Música",
        //           "Fútbol",
        //           "Paris",
        //           "Naturaleza",
        //           "New York",
        //           "Deportes extremos",
        //           "Playa",
        //           "Deportes acuaticos",
        //           "Historia",
        //           "Ciencias",
        //           "Viajar",
        //           "Lotería",
        //           "Adidas",
        //           "Nike",
        //           "Pan salado",
        //           "Europa",
        //           "Patinetas"
        //         ]';

        echo json_encode($gustos);
    }


}

?>