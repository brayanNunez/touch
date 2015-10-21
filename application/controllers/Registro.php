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
        $this->load->view('home/header_2');
        $this->load->view('home/registro');
        $this->load->view('home/footer_2');
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
                'cedula' => $this->input->post('registro_cedulaTrabajador'),
                'nombre' => $this->input->post('registro_nombreEmpresaTrabajador'),
                'enviarCorreos' => $enviarCorreos,
                'idMoneda' => 1
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
                'cedula' => $this->input->post('registro_cedulaEmpresa'),
                'nombre' => $this->input->post('registro_nombreEmpresa'),
                'nombreFantasia' => $this->input->post('registro_nombreFantasiaEmpresa'),
                'enviarCorreos' => $enviarCorreos,
                'idMoneda' => 1
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
                        //Ya existe el correo
                        $data['error'] = 3;
                        $this->load->view('home/header_2');
                        $this->load->view('home/registro', $data);
                        $this->load->view('home/footer_2');
                    } else {
                        //correo valido
                        if($captcha == $valor) {
                            $resultado = $this->Registro_model->registrar($data);
                            if (!$resultado) {
                                //Error en la transacción
                                $data['error'] = 0;
                                $this->load->view('home/header_2');
                                $this->load->view('home/registro', $data);
                                $this->load->view('home/footer_2');
                            } else {
                                //Exito en la transaccion
                                redirect('inicio/index');
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
