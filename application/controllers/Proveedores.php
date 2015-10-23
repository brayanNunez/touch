<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Proveedor_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Proveedor_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('proveedores/proveedores_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('proveedores/proveedores');
        $this->load->view('layout/default/footer');
    }

    public function insertar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $empleado = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');

        $data['palabras'] = $this->input->post('persona_palabras');
        if($empleado == 2) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'empleado' => 1,
                'juridico' => 0,
                'identificacion' => $this->input->post('persona_identificacion'),
                'nacionalidad' => $this->input->post('persona_nacionalidad'),
                'primerApellido' => $this->input->post('persona_apellido1'),
                'segundoApellido' => $this->input->post('persona_apellido2'),
                'nombre' => $this->input->post('persona_nombre'),
                'correo' => $this->input->post('persona_correo'),
                'telefonoFijo' => $this->input->post('persona_telefono'),
                'telefonoMovil' => $this->input->post('persona_telefonoMovil'),
                'fechaNacimiento' => date('Y-m-d', strtotime($this->input->post('persona_fechaNacimiento'))),
                'descripcion' => $this->input->post('persona_descripcion'),
                'pais' => $this->input->post('persona_direccionPais'),
                'provincia' => $this->input->post('persona_direccionProvincia'),
                'canton' => $this->input->post('persona_direccionCanton'),
                'domicilio' => $this->input->post('persona_direccionDomicilio'),
                'eliminado' => 0
            );
        } else {
            if($juridico == 2) {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
                    'empleado' => 0,
                    'juridico' => 1,
                    'identificacion' => $this->input->post('personajuridico_identificacion'),
                    'nacionalidad' => $this->input->post('persona_nacionalidad'),
                    'nombre' => $this->input->post('personajuridico_nombre'),
                    'nombreFantasia' => $this->input->post('personajuridico_nombreFantasia'),
                    'correo' => $this->input->post('personajuridico_correo'),
                    'telefonoFijo' => $this->input->post('personajuridico_telefono'),
                    'fax' => $this->input->post('personajuridico_fax'),
                    'descripcion' => $this->input->post('persona_descripcion'),
                    'pais' => $this->input->post('persona_direccionPais'),
                    'provincia' => $this->input->post('persona_direccionProvincia'),
                    'canton' => $this->input->post('persona_direccionCanton'),
                    'domicilio' => $this->input->post('persona_direccionDomicilio'),
                    'eliminado' => 0
                );
            } else {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
                    'empleado' => 0,
                    'juridico' => 0,
                    'identificacion' => $this->input->post('persona_identificacion'),
                    'nacionalidad' => $this->input->post('persona_nacionalidad'),
                    'primerApellido' => $this->input->post('persona_apellido1'),
                    'segundoApellido' => $this->input->post('persona_apellido2'),
                    'nombre' => $this->input->post('persona_nombre'),
                    'correo' => $this->input->post('persona_correo'),
                    'telefonoFijo' => $this->input->post('persona_telefono'),
                    'telefonoMovil' => $this->input->post('persona_telefonoMovil'),
                    'fechaNacimiento' => date('Y-m-d', strtotime($this->input->post('persona_fechaNacimiento'))),
                    'descripcion' => $this->input->post('persona_descripcion'),
                    'pais' => $this->input->post('persona_direccionPais'),
                    'provincia' => $this->input->post('persona_direccionProvincia'),
                    'canton' => $this->input->post('persona_direccionCanton'),
                    'domicilio' => $this->input->post('persona_direccionDomicilio'),
                    'eliminado' => 0
                );
            }
        }

        $contactos = array();
        $contador = 0;
        $contactosObtenidos = 0;
        $cantidadContactos = $this->input->post('cantidadContactos');
        while ($contactosObtenidos < $cantidadContactos) {
            if (isset($_POST['contacto_'.$contador])) {
                $contacto = array(
                    'nombre' => $this->input->post('proveedor_contactoNombre_'.$contador),
                    'primerApellido' => $this->input->post('proveedor_contactoApellido1_'.$contador),
                    'segundoApellido' => $this->input->post('proveedor_contactoApellido2_'.$contador),
                    'correo' => $this->input->post('proveedor_contactoCorreo_'.$contador),
                    'telefono' => $this->input->post('proveedor_contactoTelefono_'.$contador),
                    'puesto' => $this->input->post('proveedor_contactoPuesto_'.$contador),
                    'eliminado' => '0'
                );
                array_push($contactos, $contacto);
                $contactosObtenidos++;
            }
            $contador++;
        }
        $data['contactos'] = $contactos;

        if (!$this->Proveedor_model->insertar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }
    }

    public function eliminar()
    {
        $id = $_POST['idEliminar'];
        if (!$this->Proveedor_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
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
        
        $resultado = $this->Proveedor_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacción";
        } else {
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('proveedores/proveedores_info', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function modificar($id)
    {
        $data = array();
        $data['palabras'] = $this->input->post('persona_palabras');

        $tipo = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');
        if($tipo == 'Empleado') {
            $data['datos'] = array(
//                'empleado' => 0,
                'juridico' => 0,
                'identificacion' => $this->input->post('persona_identificacion'),
                'nacionalidad' => $this->input->post('persona_nacionalidad'),
                'primerApellido' => $this->input->post('persona_apellido1'),
                'segundoApellido' => $this->input->post('persona_apellido2'),
                'nombre' => $this->input->post('persona_nombre'),
                'correo' => $this->input->post('persona_correo'),
                'telefonoFijo' => $this->input->post('persona_telefono'),
                'telefonoMovil' => $this->input->post('persona_telefonoMovil'),
                'fechaNacimiento' => date('Y-m-d', strtotime($this->input->post('persona_fechaNacimiento'))),
                'descripcion' => $this->input->post('persona_descripcion'),
                'pais' => $this->input->post('persona_direccionPais'),
                'provincia' => $this->input->post('persona_direccionProvincia'),
                'canton' => $this->input->post('persona_direccionCanton'),
                'domicilio' => $this->input->post('persona_direccionDomicilio'),
                'eliminado' => 0
            );
        } else {
            if ($juridico) {
                $data['datos'] = array(
//                    'empleado' => 0,
                    'juridico' => 1,
                    'identificacion' => $this->input->post('personajuridico_identificacion'),
                    'nacionalidad' => $this->input->post('persona_nacionalidad'),
                    'nombre' => $this->input->post('personajuridico_nombre'),
                    'nombreFantasia' => $this->input->post('personajuridico_nombreFantasia'),
                    'correo' => $this->input->post('personajuridico_correo'),
                    'telefonoFijo' => $this->input->post('personajuridico_telefono'),
                    'fax' => $this->input->post('personajuridico_fax'),
                    'descripcion' => $this->input->post('persona_descripcion'),
                    'pais' => $this->input->post('persona_direccionPais'),
                    'provincia' => $this->input->post('persona_direccionProvincia'),
                    'canton' => $this->input->post('persona_direccionCanton'),
                    'domicilio' => $this->input->post('persona_direccionDomicilio'),
                    'eliminado' => 0
                );
            } else {
                $data['datos'] = array(
//                    'empleado' => 0,
                    'juridico' => 0,
                    'identificacion' => $this->input->post('persona_identificacion'),
                    'nacionalidad' => $this->input->post('persona_nacionalidad'),
                    'primerApellido' => $this->input->post('persona_apellido1'),
                    'segundoApellido' => $this->input->post('persona_apellido2'),
                    'nombre' => $this->input->post('persona_nombre'),
                    'correo' => $this->input->post('persona_correo'),
                    'telefonoFijo' => $this->input->post('persona_telefono'),
                    'telefonoMovil' => $this->input->post('persona_telefonoMovil'),
                    'fechaNacimiento' => date('Y-m-d', strtotime($this->input->post('persona_fechaNacimiento'))),
                    'descripcion' => $this->input->post('persona_descripcion'),
                    'pais' => $this->input->post('persona_direccionPais'),
                    'provincia' => $this->input->post('persona_direccionProvincia'),
                    'canton' => $this->input->post('persona_direccionCanton'),
                    'domicilio' => $this->input->post('persona_direccionDomicilio'),
                    'eliminado' => 0
                );
            }
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
                if ($accionEfectuada == '2') {//fue eliminado
                    $identificacion =  decryptIt($this->input->post('idContacto_'.$contador));
                    $contacto = array(
                        'idProveedorContacto' =>decryptIt($identificacion),
                        'eliminado' => '1'
                    );
                    array_push($eliminados, $contacto);
                } else {
                    if ($accionEfectuada == '1') {// no fue eliminado
                        $contacto = array(
                            'idProveedorContacto' =>decryptIt($this->input->post('idContacto_'.$contador)),
                            'nombre' => $this->input->post('proveedor_contactoNombre_'.$contador),
                            'primerApellido' => $this->input->post('proveedor_contactoApellido1_'.$contador),
                            'segundoApellido' => $this->input->post('proveedor_contactoApellido2_'.$contador),
                            'correo' => $this->input->post('proveedor_contactoCorreo_'.$contador),
                            'telefono' => $this->input->post('proveedor_contactoTelefono_'.$contador),
                            'puesto' => $this->input->post('proveedor_contactoPuesto_'.$contador),
                            'eliminado' => '0'
                        );
                        array_push($editados, $contacto);
                    } else {// es nuevo
                        $contacto = array(
                            'idProveedor' => decryptIt($id),
                            'nombre' => $this->input->post('proveedor_contactoNombre_'.$contador),
                            'primerApellido' => $this->input->post('proveedor_contactoApellido1_'.$contador),
                            'segundoApellido' => $this->input->post('proveedor_contactoApellido2_'.$contador),
                            'correo' => $this->input->post('proveedor_contactoCorreo_'.$contador),
                            'telefono' => $this->input->post('proveedor_contactoTelefono_'.$contador),
                            'puesto' => $this->input->post('proveedor_contactoPuesto_'.$contador),
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

        if (!$this->Proveedor_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

}

?>