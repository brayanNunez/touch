<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Gasto_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Gasto_model->cargarTodos($idEmpresa);
        $categorias = $this->Gasto_model->categoriasGasto($idEmpresa);
        $formasPago = $this->Gasto_model->formasPago();
        $personas = $this->Gasto_model->proveedores($idEmpresa);
        $paises = $this->Gasto_model->paises();

        $data['lista'] = $lista;
        $data['categoriasGasto'] = $categorias;
        $data['formasPago'] = $formasPago;
        $data['personas'] = $personas;
        $data['paises'] = $paises;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('gastos/gastos_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $gastoFijo = $this->input->post('gasto_tipo');
        if($gastoFijo == 1) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 1,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        } else {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 0,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        }

        $res = $this->Gasto_model->insertar($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo encryptIt($res);
        }
    }

    public function editar()
    {
        $id = $_POST['idEditar'];
        $resultado = $this->Gasto_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {
        $data['idGasto'] = decryptIt($this->input->post('idGasto'));
        $gastoFijo = $this->input->post('gasto_tipo');
        if($gastoFijo == 1) {
            $data['datos'] = array(
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 1,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        } else {
            $data['datos'] = array(
                'idCategoriaGasto' => $this->input->post('gasto_categoria'),
                'idProveedor' => $this->input->post('gasto_persona'),
                'gastoFijo' => 0,
                'codigo' => $this->input->post('gasto_codigo'),
                'nombre' => $this->input->post('gasto_nombre'),
                'monto' => $this->input->post('gasto_monto'),
                'formaPago' => $this->input->post('gasto_formaPago'),
                'eliminado' => '0'
            );
        }
        // echo print_r($data); exit();

        if (!$this->Gasto_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }

    }

    public function eliminar()
    {
       $id = $_POST['idEliminar'];
        if (!$this->Gasto_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0; 
        } else {
            //correcto
            echo 1; 
        }
    }

    public function verificarCodigo(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $gasto = array(
            'idEmpresa' => $idEmpresa,
            'codigo' => $this->input->post('gasto_codigo'),
            'eliminado' => '0'
        );
        $data['gasto'] = $gasto;

        // echo print_r($impuesto); exit();
        $resultado = $this->Gasto_model->verificarCodigo($data);
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

    public function categoriasGasto() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $resultado = $this->Gasto_model->categoriasGasto($idEmpresa);
        if ($resultado === false) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    public function verificarNombreCategoria(){
//        $sessionActual = $this->session->userdata('logged_in');
//        $idEmpresa = $sessionActual['idEmpresa'];

        $data['datos'] = array(
//            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('categoria_nombre'),
        );

        // echo print_r($impuesto); exit();
        $resultado = $this->Gasto_model->verificarNombreCategoria($data);
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
    public function insertarCategoria()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('categoria_nombre'),
            'descripcion' => $this->input->post('categoria_descripcion'),
            'eliminado' => 0
        );

        $res = $this->Gasto_model->insertarCategoria($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo $res;
        }
    }

    public function formasPago() {
        $resultado = $this->Gasto_model->formasPago();
        if ($resultado === false) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    //Metodos ya no se usan
    public function verificarNombreFormaPago(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('formaPago_nombre'),
            'eliminado' => '0'
        );

        // echo print_r($impuesto); exit();
        $resultado = $this->Gasto_model->verificarNombreFormaPago($data);
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
    public function insertarFormaPago()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('formaPago_nombre'),
            'descripcion' => $this->input->post('formaPago_descripcion'),
            'eliminado' => 0
        );

        $res = $this->Gasto_model->insertarFormaPago($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo $res;
        }
    }

    public function personas() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Gasto_model->proveedores($idEmpresa);
        if ($resultado === false) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    public function verificarIdentificacionPersona(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $empleado = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');
        $data['palabras'] = $this->input->post('persona_palabras');
        if($empleado == 2) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
//                'empleado' => 1,
//                'juridico' => 0,
                'identificacion' => $this->input->post('persona_identificacion'),
                'eliminado' => 0
            );
        } else {
            if($juridico == 2) {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
//                    'empleado' => 0,
//                    'juridico' => 1,
                    'identificacion' => $this->input->post('personajuridico_identificacion'),
                    'eliminado' => 0
                );
            } else {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
//                    'empleado' => 0,
//                    'juridico' => 0,
                    'identificacion' => $this->input->post('persona_identificacion'),
                    'eliminado' => 0
                );
            }
        }

        $resultado = $this->Gasto_model->verificarIdentificacionPersona($data);
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
    public function insertarPersona()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $photo = explode('.',$this->input->post('persona_fotografia'));
        $data['extension'] = end($photo);

        $empleado = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');
        $data['palabras'] = $this->input->post('persona_palabras');
        $data['categorias'] = $this->input->post('categorias_persona');
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

        $res = $this->Gasto_model->insertarPersona($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            $config['upload_path'] = './files/empresas/'.$idEmpresa.'/proveedores/'.$res;
            $config['file_name'] = 'profile_picture_'.$res.'.'.$data['extension'];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
//                $error = array('error' => $this->upload->display_errors());echo $error['error'];
            }
            // correcto
            echo $res;
        }
    }

    public function gastosFijos() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Gasto_model->gastosFijos($idEmpresa);
        if ($resultado === false) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

}

?>