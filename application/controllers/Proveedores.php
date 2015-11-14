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
        $tipos = $this->Proveedor_model->tiposPresupuesto();
        $paises = $this->Proveedor_model->paises();
        if ($tipos === false || $tipos === array() || $paises === false || $paises === array()) {
            echo "Error en la transacción";
        } else {
            $data['paises'] = $paises;
            $data['tiposPresupuesto'] = $tipos;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('proveedores/proveedores', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function insertar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $empleado = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');

        $photo = explode('.',$this->input->post('persona_fotografia'));
        $data['extension'] = end($photo);

        $data['categorias'] = $this->input->post('categorias_persona');
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

        $presupuestos = array();
        $contadorPresupuestos = 0;
        $presupuestosObtenidos = 0;
        $cantidadPresupuestos = $this->input->post('cantidadPresupuestos');
        while($presupuestosObtenidos < $cantidadPresupuestos) {
            if(isset($_POST['presupuesto_'.$contadorPresupuestos])) {
                $principal = 1;
                if(isset($_POST['radioPresupuestoPrincipal'])) {
                    $principal = $this->input->post('radioPresupuestoPrincipal');
                }
                if($principal == $contadorPresupuestos) {
                    $presupuesto = array(
                        'tipoPresupuesto' => $this->input->post('presupuesto'.$contadorPresupuestos.'_tipo'),
                        'monto' => $this->input->post('presupuesto'.$contadorPresupuestos.'_monto'),
                        'principal' => 1,
                        'eliminado' => 0
                    );
                } else {
                    $presupuesto = array(
                        'tipoPresupuesto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_tipo'),
                        'monto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_monto'),
                        'principal' => 0,
                        'eliminado' => 0
                    );
                }
                array_push($presupuestos, $presupuesto);
                $presupuestosObtenidos++;
            }
            $contadorPresupuestos++;
        }
        $data['presupuestos'] = $presupuestos;

        $persona = $this->Proveedor_model->insertar($data);
        if (!$persona) {
            //Error en la transacción
            echo 0;
        } else {
            $config['upload_path'] = './files/empresas/'.$idEmpresa.'/proveedores/'.$persona;
            $config['file_name'] = 'profile_picture_'.$persona.'.'.$data['extension'];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
//                $error = array('error' => $this->upload->display_errors());echo $error['error'];
            }
//            echo './files/empresas/'.$idEmpresa.'/proveedores/'.$persona.'<br/>';
//            echo 'profile_picture_'.$persona.'.'.$data['extension'].'<br/>';
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
        $data['categorias'] = $this->input->post('categorias_persona');
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
            if ($juridico == 2) {
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

        $presupuestosEditados = array();
        $presupuestosEliminados = array();
        $presupuestosNuevos = array();
        $contadorPresupuestos = 0;
        $presupuestosObtenidos = 0;
        $cantidadPresupuestos = $this->input->post('cantidadPresupuestos');
//        echo $presupuestosObtenidos.'  -  '.$cantidadPresupuestos;
        $principal = 1;
        if(isset($_POST['radioPresupuestoPrincipal'])) {
            $principal = $this->input->post('radioPresupuestoPrincipal');
        }
        while($presupuestosObtenidos < $cantidadPresupuestos) {
            if(isset($_POST['presupuesto_'.$contadorPresupuestos])) {
                $valorPrincipal = 0;
                if($principal == $contadorPresupuestos) {
                    $valorPrincipal = 1;
                }
                $accionEfectuada = $this->input->post('presupuesto_'.$contadorPresupuestos);
                if ($accionEfectuada == '2') {//fue eliminado
                    $identificacion = decryptIt($this->input->post('idPresupuesto_'.$contadorPresupuestos));
                    $presupuesto = array(
                        'idPresupuestoProveedor' => $identificacion,
                        'principal' => $valorPrincipal,
                        'eliminado' => '1'
                    );
                    array_push($presupuestosEliminados, $presupuesto);
                } else {
                    if ($accionEfectuada == '1') {// no fue eliminado
                        $presupuesto = array(
                            'idPresupuestoProveedor' =>decryptIt($this->input->post('idPresupuesto_'.$contadorPresupuestos)),
                            'tipoPresupuesto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_tipo'),
                            'monto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_monto'),
                            'principal' => $valorPrincipal,
                            'eliminado' => 0
                        );
                        array_push($presupuestosEditados, $presupuesto);
                    } else {// es nuevo
                        $presupuesto = array(
                            'idProveedor' => decryptIt($id),
                            'tipoPresupuesto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_tipo'),
                            'monto' => $this->input->post('presupuesto' . $contadorPresupuestos . '_monto'),
                            'principal' => $valorPrincipal,
                            'eliminado' => 0
                        );
                        array_push($presupuestosNuevos, $presupuesto);
                    }
                }
                $presupuestosObtenidos++;
            }
            $contadorPresupuestos++;
        }
        $data['presupuestosNuevos'] = $presupuestosNuevos;
        $data['presupuestosEditados'] = $presupuestosEditados;
        $data['presupuestosEliminados'] = $presupuestosEliminados;

        if (!$this->Proveedor_model->modificar($data)) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function verificarIdentificacion(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $empleado = $this->input->post('persona_tipoProveedor');
        $juridico = $this->input->post('persona_tipo');
        if($empleado == 2) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'identificacion' => $this->input->post('persona_identificacion'),
                'eliminado' => 0
            );
        } else {
            if($juridico == 2) {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
                    'identificacion' => $this->input->post('personajuridico_identificacion'),
                    'eliminado' => 0
                );
            } else {
                $data['datos'] = array(
                    'idEmpresa' => $idEmpresa,
                    'identificacion' => $this->input->post('persona_identificacion'),
                    'eliminado' => 0
                );
            }
        }

        $resultado = $this->Proveedor_model->verificarIdentificacion($data);
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

    public function agregarArchivo($id)
    {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $nombreOriginal = $this->input->post('persona_archivo');
        $nuevoNombre = $this->convertirNombre($nombreOriginal);
//        $nuevoNombre = date('Y-m-d H:i:s');
//        $nombre = md5($nuevoNombre);

        $idPersona = decryptIt($id);
        $path = './files/empresas/'.$idEmpresa.'/proveedores/'.$idPersona;
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
                'idPersona' => $idPersona,
                'nombre' => $nombreOriginal,
                'nombreOriginal' => $archivo['raw_name'].$archivo['file_ext'],
                'tamano' => $archivo['file_size'],
//                'fecha' => date('Y-m-s h:i:s'),
                'descripcion' => $this->input->post('archivo_descripcion')
            );
//            print_r($data['datos']);
            $resultado = $this->Proveedor_model->agregarArchivo($data);
            $archivo = $path.'/'.$data['datos']['nombre'];
            if(!$resultado) {
                unlink($archivo);
                echo 1;
            } else {
                echo 2;
            }
        }
    }

    public function eliminarArchivo()
    {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $id = $_POST['idEliminar'];
        $persona = decryptIt($_POST['idPersona']);
        $resultado = $this->Proveedor_model->eliminarArchivo(decryptIt($id));
        if (!$resultado) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            $ruta = './files/empresas/'.$idEmpresa.'/proveedores/'.$persona.'/'.$resultado;
            if($resultado != 'noArchivo') {
                if(is_file($ruta)) {
                    unlink($ruta);
                }
            }
            echo 1;
        }
    }

    public function cambio_imagen($id) {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $idPersona = decryptIt($id);

        $photo = explode('.',$this->input->post('persona_fotografia'));
        $ext = end($photo);
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'fotografia' => 'profile_picture_'.$idPersona.'.'.$ext
        );
        $data['id'] = $idPersona;

        $fotografia = $this->Proveedor_model->cambiar_imagen($data);
        if (!$fotografia) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/proveedores/'. $idPersona;
            if($fotografia != 'sinFoto') {
                $path = $ruta . '/'.$fotografia;
                if(is_file($path)) {
                    unlink($path);
                }
            }
            $config['upload_path'] = $ruta;
            $config['file_name'] = 'profile_picture_'.$idPersona;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
                echo 2;
            } else {
                echo 1;
            }
        }
    }

    //Funcion para eliminar el acento de los nombres de los archivos
    public function convertirNombre($str, $charset='utf-8'){
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    public function cambio_imagen2($id) {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $idPersona = decryptIt($id);
        $photo = explode('.',$this->input->post('persona_fotografia'));
        $ext = end($photo);
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'fotografia' => $ext
        );
        $data['id'] = $idPersona;

        $extension = $this->Proveedor_model->cambiar_imagen($data);
        if (!$extension) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/proveedores/'. $data['id'];
            if($extension != 'sinFoto') {
                unlink($ruta . '/profile_picture_' . $idPersona . '.' . $extension);
            }
            $config['upload_path'] = $ruta;
            $config['file_name'] = 'profile_picture_'.$idPersona;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
                echo 2;
            } else {
                echo 1;
            }
        }
    }

}

?>