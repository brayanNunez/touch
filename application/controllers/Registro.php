<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Registro_model');
    }

    public function index()
    {
        $paises = $this->Registro_model->paises();
        if ($paises === false || $paises === array()) {
            echo "Error en la transacción";
        } else {
            $data['paises'] = $paises;
            $this->load->view('home/header_2');
            $this->load->view('home/registro', $data);
            $this->load->view('home/footer_2');
        }
    }

    public function registrar()
    {
        $this->load->model('Usuario_model');
        $data = array();
        $tipoRegistro = $this->input->post('registro_tipo');
        $data['tipo'] = $tipoRegistro;
        $data['error'] = '';
        $enviarCorreos = 0;
        if ($this->input->post('registro_enviarCorreos')) {
            $enviarCorreos = 1;
        }
        if ($tipoRegistro == 1) {
            $data['datos'] = array(
                'empresa' => 0,
                'cedula' => $this->input->post('registro_cedulaTrabajador'),
                'correo' => $this->input->post('registro_correoTrabajador'),
                'nombre' => $this->input->post('registro_nombreEmpresaTrabajador'),
                'enviarCorreos' => $enviarCorreos,
                'idMoneda' => 1,
                'activa' => 1
            );
            $data['direccion'] = array(
                'pais' => $this->input->post('registro_paisTrabajador'),
                'provincia' => $this->input->post('registro_provinciaTrabajador'),
                'canton' => $this->input->post('registro_cantonTrabajador'),
                'domicilio' => $this->input->post('registro_domicilioTrabajador')
            );
            $data['usuario'] = array(
                'primerApellido' => $this->input->post('registro_primerApellidoTrabajador'),
                'segundoApellido' => $this->input->post('registro_segundoApellidoTrabajador'),
                'nombre' => $this->input->post('registro_nombreTrabajador'),
                'correo' => $this->input->post('registro_correoTrabajador'),
                'contrasena' => $this->input->post('registro_contrasenaTrabajador'),
                'eliminado' => '0'
            );
            $data['correoConfirm'] = $this->input->post('registro_confirmarCorreoTrabajador');
            $data['contrasenaConfirm'] = $this->input->post('registro_confirmarContrasenaTrabajador');
        } elseif ($tipoRegistro == 2) {
            $data['datos'] = array(
                'empresa' => 1,
                'cedula' => $this->input->post('registro_cedulaEmpresa'),
                'nombre' => $this->input->post('registro_nombreEmpresa'),
                'nombreFantasia' => $this->input->post('registro_nombreFantasiaEmpresa'),
                'enviarCorreos' => $enviarCorreos,
                'idMoneda' => 1,
                'activa' => 1
            );
            $data['direccion'] = array(
                'pais' => $this->input->post('registro_paisEmpresa'),
                'provincia' => $this->input->post('registro_provinciaEmpresa'),
                'canton' => $this->input->post('registro_cantonEmpresa'),
                'domicilio' => $this->input->post('registro_domicilioEmpresa')
            );
            $data['usuario'] = array(
                'primerApellido' => $this->input->post('registro_empresaPrimerApellidoContacto'),
                'segundoApellido' => $this->input->post('registro_empresaSegundoApellidoContacto'),
                'nombre' => $this->input->post('registro_empresaNombreContacto'),
                'correo' => $this->input->post('registro_empresaCorreoContacto'),
                'contrasena' => $this->input->post('registro_empresaContrasenaContacto'),
                'eliminado' => '0'
            );
            $data['correoConfirm'] = $this->input->post('registro_empresaConfirmarCorreoContacto');
            $data['contrasenaConfirm'] = $this->input->post('registro_empresaConfirmarContrasenaContacto');
        }

        $captcha = $this->rpHash($this->input->post('defaultReal'));
        $valor = $this->input->post('defaultRealHash');
        $data['correo'] = $data['usuario']['correo'];
        $data['cedula'] = $data['datos']['cedula'];
        $validacionCorreo = $resultado = $this->Usuario_model->existeCorreo($data);
        $validacionCedula = $resultado = $this->Registro_model->existeIdentificacion($data);

        $paises = $this->Registro_model->paises();
        if ($paises != false) {
            $data['paises'] = $paises;
        }

        if($validacionCorreo === false) {
            $data['error'] = 0;
            $this->load->view('home/header_2');
            $this->load->view('home/registro', $data);
            $this->load->view('home/footer_2');
        } else {
            if ($validacionCorreo == 1) {
                //Ya existe el correo
                $data['error'] = 1;
                $this->load->view('home/header_2');
                $this->load->view('home/registro', $data);
                $this->load->view('home/footer_2');
            } else {
                //correo valido
                if($validacionCedula === false) {
                    $data['error'] = 0;
                    $this->load->view('home/header_2');
                    $this->load->view('home/registro', $data);
                    $this->load->view('home/footer_2');
                } else {
                    if ($validacionCedula == 1) {
                        //Ya existe el cedula
                        $data['error'] = 3;
                        $this->load->view('home/header_2');
                        $this->load->view('home/registro', $data);
                        $this->load->view('home/footer_2');
                    } else {
                        //cedula valido
                        if($captcha == $valor) {
                            $resultado = $this->Registro_model->registrar($data);
                            if (!$resultado) {
                                //Error en la transacci�n
                                $data['error'] = 0;
                                $this->load->view('home/header_2');
                                $this->load->view('home/registro', $data);
                                $this->load->view('home/footer_2');
                            } else {
                                //Exito en la transaccion
                                redirect('inicio/index', 'refresh');
                            }
                        } else {
                            //Error en el captcha
                            $data['error'] = 2;
                            $this->load->view('home/header_2');
                            $this->load->view('home/registro', $data);
                            $this->load->view('home/footer_2');
                        }
                    }
                }
            }
        }
    }

    public function editar() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $resultado = $this->Registro_model->cargar($idEmpresa);

        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacción";
        } else {
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('layout/default/perfil_empresa', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function modificar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $tipo = $this->input->post('empresa_actividadComercial');

        if($tipo == 1) {
            $data['datos'] = array(
                'empresa' => 0,
                'cedula' => $this->input->post('empresa_idTrabajador'),
                'nombre' => $this->input->post('empresa_trabajadorNombreArtistico'),
                'sitioWeb' => $this->input->post('empresa_trabajadorSitioWeb'),
                'correo' => $this->input->post('empresa_trabajadorCorreo'),
                'telefono' => $this->input->post('empresa_trabajadortelefonoFijo'),
                'telefonoMovil' => $this->input->post('empresa_trabajadorTelefonoMovil'),
                'fechaCreacion' => $this->input->post('empresa_trabajadorFechaNacimiento'),
                'profesion' => $this->input->post('empresa_trabajadorProfesion'),
                'codigoCotizacion' => $this->input->post('empresa_codigoCotizacion')
            );
            $data['usuario'] = array(
                'idUsuario' => $this->input->post('empresa_idUsuario'),
//                'cedula' => $this->input->post('empresa_idTrabajador'),
                'nombre' => $this->input->post('empresa_trabajadorNombre'),
                'primerApellido' => $this->input->post('empresa_trabajadorPrimerApellido'),
                'segundoApellido' => $this->input->post('empresa_trabajadorSegundoApellido'),
                'correo' => $this->input->post('empresa_trabajadorCorreo'),
//                'puesto' => $this->input->post('empresa_trabajadorProfesion'),
//                'fechaNacimiento' => $this->input->post('empresa_trabajadorFechaNacimiento'),
//                'telefonoFijo' => $this->input->post('empresa_trabajadortelefonoFijo'),
//                'telefonoMovil' => $this->input->post('empresa_trabajadorTelefonoMovil'),
                'eliminado' => 0
            );
        } else {
            $data['datos'] = array(
                'empresa' => 1,
                'cedula' => $this->input->post('empresa_idEmpresa'),
                'nombre' => $this->input->post('empresa_empresaNombre'),
                'nombreFantasia' => $this->input->post('empresa_empresaNombreFantasia'),
                'sitioWeb' => $this->input->post('empresa_empresaSitioweb'),
                'correo' => $this->input->post('empresa_empresaCorreo'),
                'telefono' => $this->input->post('empresa_empresaTelefonoFijo'),
                'telefonoMovil' => $this->input->post('empresa_empresaTelefonoMovil'),
                'fechaCreacion' => $this->input->post('empresa_fechaCreacion'),
                'tamano' => $this->input->post('empresa_tamano'),
                'codigoCotizacion' => $this->input->post('empresa_codigoCotizacion')
            );
            $data['usuario'] = array(
                'idUsuario' => $this->input->post('empresa_idUsuario'),
//                'cedula' => $this->input->post('empresa_identificacionContacto'),
                'nombre' => $this->input->post('empresa_nombreContacto'),
                'primerApellido' => $this->input->post('empresa_primerApellidoContacto'),
                'segundoApellido' => $this->input->post('empresa_segundoApellidoContacto'),
                'correo' => $this->input->post('empresa_correoContacto'),
//                'puesto' => $this->input->post('empresa_puestoContacto'),
//                'fechaNacimiento' => $this->input->post('empresa_fechaNacimientoContacto'),
//                'telefonoFijo' => $this->input->post('empresa_telefonoFijoContacto'),
//                'telefonoMovil' => $this->input->post('formEmpresa_telefonoMovilContacto'),
                'eliminado' => 0
            );
        }
        $data['direccion'] = array(
            'pais' => $this->input->post('empresa_direccionPais'),
            'provincia' => $this->input->post('empresa_direccionProvincia'),
            'canton' => $this->input->post('empresa_direccionCanton'),
            'domicilio' => $this->input->post('empresa_direccionDomicilio')
        );
        $data['id'] = $idEmpresa;

        if (!$this->Registro_model->modificar($data)) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function cambio_imagen() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $photo = explode('.',$this->input->post('empresa_imagenLogo'));
        $ext = end($photo);
        $data['datos'] = array(
            'logo' => 'profile_picture_'.$idEmpresa.'.'.$ext
        );
        $data['id'] = $idEmpresa;

        $fotografia = $this->Registro_model->cambiar_imagen($data);
        if (!$fotografia) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/';
            if($fotografia != 'sinFoto') {
                $path = $ruta . '/'.$fotografia;
                if(is_file($path)) {
                    unlink($path);
                }
            }
            $nombreFotografia = 'profile_picture_'.$idEmpresa;
            $config['upload_path'] = $ruta;
            $config['file_name'] = $nombreFotografia;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
                echo 2;
            } else {
                echo base_url().'files/empresas/'.$idEmpresa.'/'.$nombreFotografia.'.'.$ext;
            }
        }
    }

    public function cambio_imagenFirma() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $photo = explode('.',$this->input->post('empresa_imagenFirma'));
        $ext = end($photo);
        $data['datos'] = array(
            'firma' => 'img_firmaEmpresa_'.$idEmpresa.'.'.$ext
        );
        $data['id'] = $idEmpresa;

        $fotografia = $this->Registro_model->cambiar_imagenFirma($data);
        if (!$fotografia) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/';
            if($fotografia != 'sinFoto') {
                $path = $ruta . '/'.$fotografia;
                if(is_file($path)) {
                    unlink($path);
                }
            }
            $nombreFotografia = 'img_firmaEmpresa_'.$idEmpresa;
            $config['upload_path'] = $ruta;
            $config['file_name'] = $nombreFotografia;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('userfile2')) {
                echo 2;
            } else {
                echo base_url().'files/empresas/'.$idEmpresa.'/'.$nombreFotografia.'.'.$ext;
            }
        }
    }

    public function cargarDatos() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Registro_model->cargar($idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function completar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $tipo = $this->input->post('registro_actividadComercial');

        if($tipo == 1) {
            $data['datos'] = array(
                'sitioWeb' => $this->input->post('registro_sitioWeb'),
                'correo' => $this->input->post('registro_correoEmpresa'),
                'telefono' => $this->input->post('registro_telefonoFijo'),
                'telefonoMovil' => $this->input->post('registro_telefonoMovil'),
                'fechaCreacion' => $this->input->post('registro_fechaNacIndependiente'),
                'tamano' => $this->input->post('registro_tamanoEmpresa'),
                'codigoCotizacion' => $this->input->post('registro_codigoCotizacion'),
                'profesion' => $this->input->post('registro_profesionIndepediente'),
            );
            $data['usuario'] = array(
                'idUsuario' => $this->input->post('registro_idUsuario'),
                'correo' => $this->input->post('registro_correoEmpresa')
            );
        } else {
            $data['datos'] = array(
                'sitioWeb' => $this->input->post('registro_sitioWeb'),
                'correo' => $this->input->post('registro_correoEmpresa'),
                'telefono' => $this->input->post('registro_telefonoFijo'),
                'telefonoMovil' => $this->input->post('registro_telefonoMovil'),
                'fechaCreacion' => $this->input->post('registro_fechaCreacionEmpresa'),
                'tamano' => $this->input->post('registro_tamanoEmpresa'),
                'codigoCotizacion' => $this->input->post('registro_codigoCotizacion')
            );
        }
        $data['id'] = $idEmpresa;

        if (!$this->Registro_model->completar($data)) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for($i = 0; $i < strlen($value); $i++) {
            $hash = ($this->leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

    // Perform a 32bit left shift
    public function leftShift32($number, $steps) {
        // convert to binary (string)
        $binary = decbin($number);
        // left-pad with 0's if necessary
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        // left shift manually
        $binary = $binary.str_repeat("0", $steps);
        // get the last 32 bits
        $binary = substr($binary, strlen($binary) - 32);
        // if it's a positive number return it
        // otherwise return the 2's complement
        return ($binary{0} == "0" ? bindec($binary) :
                -(pow(2, 31) - bindec(substr($binary, 1))));
    }

}
