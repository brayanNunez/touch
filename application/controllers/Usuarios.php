<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Usuario_model');
        $this->load->library('simple_html_dom');
    }

    public function index()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['lista'] = $this->Usuario_model->cargarTodos($idEmpresa);

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('usuarios/usuarios_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('usuarios/usuarios');
        $this->load->view('layout/default/footer');
    }

    public function insertar()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $photo = explode('.',$this->input->post('usuario_fotografia'));
        $data['extension'] = end($photo);

        $data['datos'] = array(
            'idEmpresa' => $idEmpresa, //Obtener de la variable de sesi�n
            'primerApellido' => $this->input->post('usuario_primeroApellido'),
            'segundoApellido' => $this->input->post('usuario_segundoApellido'),
            'nombre' => $this->input->post('usuario_nombre'),
            'correo' => $this->input->post('usuario_correo'),
            'contrasena' => $this->input->post('usuario_contrasena'),
            'eliminado' => '0'
        );
        $data['roles'] = array(
            'rolAdministrador' => $this->input->post('usuario_rolAdministrador'),
            'rolAprobador' => $this->input->post('usuario_rolAprobador'),
            'rolCotizador' => $this->input->post('usuario_rolCotizador'),
            'rolContador' => $this->input->post('usuario_rolContador')
        );

        $usuario = $this->Usuario_model->insertar($data);
        if (!$usuario) {
            //Error en la transacci�n
            echo 0;
        } else {
            $config['upload_path'] = './files/empresas/'.$idEmpresa.'/usuarios/'.$usuario;
            $config['file_name'] = 'profile_picture_'.$usuario.'.'.$data['extension'];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
//                $error = array('error' => $this->upload->display_errors());echo $error['error'];
            }
//            echo './files/empresas/'.$idEmpresa.'/clientes/'.$cliente.'<br/>';
//            echo 'profile_picture_'.$cliente.'.'.$data['extension'].'<br/>';

            // correcto
            echo 1;
        }
    }

    public function editar($id)
    {
        $resultado = $this->Usuario_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacci�n";
        } else {

            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('usuarios/usuarios_info', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function modificar($id) {
        $data['datos'] = array(
            'primerApellido' => $this->input->post('usuario_primerApellido'),
            'segundoApellido' => $this->input->post('usuario_segundoApellido'),
            'nombre' => $this->input->post('usuario_nombre'),
            'correo' => $this->input->post('usuario_correo')
        );
        $data['roles'] = array(
            'rolAdministrador' => $this->input->post('usuario_rolAdministrador'),
            'rolAprobador' => $this->input->post('usuario_rolAprobador'),
            'rolCotizador' => $this->input->post('usuario_rolCotizador'),
            'rolContador' => $this->input->post('usuario_rolContador')
        );
        $data['id'] = decryptIt($id);
        if (!$this->Usuario_model->modificar($data)) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            $sessionActual = $this->session->userdata('logged_in');
            $idUsuarioLogueado = $sessionActual['idUsuario'];
            if($data['id'] == $idUsuarioLogueado) {
                $this->actualizarSesion();
            }
            echo 1;
        }
    }

    public function eliminar() {
        $id = $_POST['idEliminar'];
        if (!$this->Usuario_model->eliminar(decryptIt($id))) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function existeCorreo() {
        $data['correo'] = $_POST['usuario_correo'];
        $data['idEmpresa'] = 1;
        //el correo se puede repetir solo en diferentes empresas
        $resultado = $this->Usuario_model->existeCorreo($data);
        if ($resultado === false) {
            //Error en la transacci�n
            echo 0;
        } else {
            if ($resultado == 1) {
                //Ya existe el correo
                echo 1;
            } else {
                //correo valido
                echo 2;
            }
        }
    }

    public function cambio_contrasena($id) {
        $data['datos'] = array(
            'contrasena' => $this->input->post('usuario_contrasena_nueva')
        );
        $data['actual'] = $this->input->post('usuario_contrasena_actual');
        $data['confirmacion'] = $this->input->post('usuario_contrasena_confirmar');
        $data['id'] = decryptIt($id);
        $resultado = $this->Usuario_model->cambiar_contrasena($data);
        if (!$resultado) {
            //Error en la transacci�n
            echo 0;
        } else {
            if($resultado === 'errorE') {
                echo 2;
            } elseif($resultado === 'errorD') {
                echo 3;
            } else {
                //correcto
                echo 1;
            }
        }
    }

    public function cambio_imagen($id) {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $idUsuario = decryptIt($id);

        $photo = explode('.',$this->input->post('usuario_fotografia'));
        $ext = end($photo);
        $data['datos'] = array(
            'fotografia' => 'profile_picture_'.$idUsuario.'.'.$ext
        );
        $data['id'] = $idUsuario;

        $fotografia = $this->Usuario_model->cambiar_imagen($data);
        if (!$fotografia) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$idEmpresa.'/usuarios/'.$idUsuario;
            if($fotografia != 'sinFoto') {
                $path = $ruta . '/'.$fotografia;
                if(is_file($path)) {
                    unlink($path);
                }
            }
            $nombreFotografia = 'profile_picture_'.$idUsuario;
            $config['upload_path'] = $ruta;
            $config['file_name'] = $nombreFotografia;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
                echo 2;
            } else {
                $sessionActual = $this->session->userdata('logged_in');
                $idUsuarioLogueado = $sessionActual['idUsuario'];
                if($idUsuario == $idUsuarioLogueado) {
                    $this->actualizarSesion();
                }
                echo base_url().'files/empresas/'.$idEmpresa.'/usuarios/'.$idUsuario.'/'.$nombreFotografia.'.'.$ext;
            }
        }
    }

    public function datosPerfil() {
        $sessionActual = $this->session->userdata('logged_in');
        $idUsuario = $sessionActual['idUsuario'];

        $resultado = $this->Usuario_model->datosPerfil($idUsuario);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    private function actualizarSesion() {
        $sessionActual = $this->session->userdata('logged_in');
        $idUsuario = $sessionActual['idUsuario'];
        $idEmpresa = $sessionActual['idEmpresa'];
        $resultado = $this->Usuario_model->datosPerfil($idUsuario);

        $sess_array = array(
            'idEmpresa' => $idEmpresa,
            'idUsuario' => $idUsuario,
            'idUsuarioEncriptado' => encryptIt($idUsuario),
            'nombreUsuario' => $resultado['nombreUsuario'],
            'rolesUsuario' => $resultado['roles_string'],
            'rutaImagenUsuario' => base_url().'files/empresas/'.$idEmpresa.'/usuarios/'.$idUsuario.'/'.$resultado['fotografia'],
            'administrador' => $resultado['roles']['rolAdministrador'],
            'aprobador' => $resultado['roles']['rolAprobador'],
            'cotizador' => $resultado['roles']['rolCotizador'],
            'contador' => $resultado['roles']['rolContador']
        );
        $this->session->set_userdata('logged_in', $sess_array);

        $this->input->set_cookie('logged_in_touch', $resultado['correo'], 2592000);
    }

    public function busqueda(){
        $sessionActual = $this->session->userdata('logged_in');
        $idUsuario = $sessionActual['idUsuario'];

        $busqueda = array('idServicio' => $this->input->post('busquedaCotizacion_servicio'),
            'idCliente' => $this->input->post('busquedaCotizacion_cliente'),
            'idUsuario' => $this->input->post('busquedaCotizacion_vendedor'),
            'idEstado' => $this->input->post('busquedaCotizacion_estado'),
            'desde' => $this->input->post('busqueda-fecha-desde'),
            'hasta' => $this->input->post('busqueda-fecha-hasta')
        );
        // echo print_r($busqueda);
        $busqueda = $this->Usuario_model->busqueda($idUsuario, $busqueda);

        if ($busqueda === false) {
            echo "0";
        } else {
            echo json_encode($busqueda);
        }
    }

    //-----------------------------------------------------

    public function existeUsuario()
    {
        $usuario = "brayan22";
        echo $this->Usuario_model->usuario_login($usuario);
    }

    function logout() {
        $array_sesiones = array('logged_in' => '', 'url_inicial' => '');
        $this->session->unset_userdata($array_sesiones);
        $this->session->sess_destroy();
        // $this->session->unset_userdata('logged_in');
        // session_destroy();

        delete_cookie('logged_in_touch');

        redirect('welcome');
    }

    //Metodo llamado mediante ajax
//    public function verificar() {
//        $username = $this->input->post('username');
//        $password = $this->input->post('password');
//
//        $idUsuario = 1;
//        $idEmpresa = 1;
//        $resultado = $this->Usuario_model->datosPerfil($idUsuario);
//
//        $sess_array = array(
//            'idEmpresa' => $idEmpresa,
//            'idUsuario' => $idUsuario,
//            'idUsuarioEncriptado' => encryptIt($idUsuario),
//            'nombreUsuario' => $resultado['nombreUsuario'],
//            'rolesUsuario' => $resultado['roles'],
//            'rutaImagenUsuario' => base_url().'files/empresas/'.$idEmpresa.'/usuarios/'.$idUsuario.'/'.$resultado['fotografia'],
//            'administrador' => true,
//            'aprobador' => true,
//            'cotizador' => true,
//            'contador' => true
//        );
//        $this->session->set_userdata('logged_in', $sess_array);
//        // }
//        echo 1;
//    }

    public function vendedorSugerencia()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Usuario_model->cargarVendedores($idEmpresa); 

        echo json_encode($resultado); 
    }

    public function crearSesion() {
        $correoUsuario = $this->input->cookie('logged_in_touch');
        $resultado = $this->Usuario_model->datosPerfilCorreo($correoUsuario);
        $sess_array = array(
            'idEmpresa' => $resultado['idEmpresa'],
            'idUsuario' => $resultado['idUsuario'],
            'idUsuarioEncriptado' => encryptIt($resultado['idUsuario']),
            'nombreUsuario' => $resultado['nombreUsuario'],
            'rolesUsuario' => $resultado['roles_string'],
            'rutaImagenUsuario' => base_url().'files/empresas/'.$resultado['idEmpresa'].'/usuarios/'.$resultado['idUsuario'].'/'.$resultado['fotografia'],
            'administrador' => $resultado['roles']['rolAdministrador'],
            'aprobador' => $resultado['roles']['rolAprobador'],
            'cotizador' => $resultado['roles']['rolCotizador'],
            'contador' => $resultado['roles']['rolContador']
        );
        $this->session->set_userdata('logged_in', $sess_array);

        $rutaIndicada = $this->session->userdata('urlInicial');
        redirect($rutaIndicada);
    }

    //Metodo llamado mediante ajax
     public function verificar() {
         $data['correo'] = $this->input->post('username');
         $data['contrasena'] =  $this->input->post('password');
         $rememberLogin = 0;
         if ($this->input->post('remember-me')) {
             $rememberLogin = 1;
         }
         $resultado = $this->Usuario_model->cargarPorCorreoUsuarioContrasena($data);
         if ($resultado == 0) {
             echo 0; //Error en la transacci�n
         } else {
             if ($resultado == 1) {
                 echo 1; //no encontrado
             } else {
                 if ($resultado == 2) {
                     echo 2;//si encontrado pero contrasena mala
                 } else {
                     if($rememberLogin) {
                         $this->input->set_cookie('logged_in_touch', $data['correo'], 2592000);
                     }
                     $idUsuario = $resultado['idUsuario'];
                     $idEmpresa = $resultado['idEmpresa'];
                     $resultado_datos = $this->Usuario_model->datosPerfil($idUsuario);
                     $sess_array = array(
                         'idEmpresa' => $idEmpresa,
                         'idUsuario' => $idUsuario,
                         'idUsuarioEncriptado' => encryptIt($idUsuario),
                         'nombreUsuario' => $resultado_datos['nombreUsuario'],
                         'rolesUsuario' => $resultado_datos['roles_string'],
                         'rutaImagenUsuario' => base_url().'files/empresas/'.$idEmpresa.'/usuarios/'.$idUsuario.'/'.$resultado_datos['fotografia'],
                         'administrador' => $resultado['roles']['rolAdministrador'],
                         'aprobador' => $resultado['roles']['rolAprobador'],
                         'cotizador' => $resultado['roles']['rolCotizador'],
                         'contador' => $resultado['roles']['rolContador']
                     );
                     $this->session->set_userdata('logged_in', $sess_array);

                     echo 3;//correcto
                 }
             }
         }
     }

}

?>