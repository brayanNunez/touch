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
        $ext = end($photo);
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa, //Obtener de la variable de sesión
            'primerApellido' => $this->input->post('usuario_primeroApellido'),
            'segundoApellido' => $this->input->post('usuario_segundoApellido'),
            'nombre' => $this->input->post('usuario_nombre'),
            'correo' => $this->input->post('usuario_correo'),
            'contrasena' => $this->input->post('usuario_contrasena'),
            'fotografia' => $ext,
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
            //Error en la transacción
            echo 0;
        } else {
            $config['upload_path'] = './files/empresas/'.$idEmpresa.'/usuarios/'.$usuario;
            $config['file_name'] = 'profile_picture_'.$usuario;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
//            echo $this->upload->display_errors();
//                echo 2;
            }
//             else {
//                $archivo = $this->upload->data();
//                $data['datos']['fotografia'] = $archivo['raw_name'] . $archivo['file_ext'];
//            }
            echo 1;
        }
    }

    public function editar($id)
    {
        $resultado = $this->Usuario_model->cargar(decryptIt($id));
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacción";
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
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function eliminar() {
        $id = $_POST['idEliminar'];
        if (!$this->Usuario_model->eliminar(decryptIt($id))) {
            //Error en la transacción
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
            //Error en la transacción
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
            //Error en la transacción
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
        $photo = explode('.',$this->input->post('usuario_fotografia'));
        $ext = end($photo);
        $data['datos'] = array(
            'idEmpresa' => 1,
            'fotografia' => $ext
        );
        $data['id'] = decryptIt($id);
        $usuario = $this->Usuario_model->cambiar_imagen($data);
        if (!$usuario) {
            echo 0;
        } else {
            $ruta = './files/empresas/'.$data['datos']['idEmpresa'].'/usuarios/'. $data['id'];
            if($usuario != 'sinFoto') {
                unlink($ruta . '/profile_picture_' . $data['id'] . '.' . $usuario);
            }
            $config['upload_path'] = $ruta;
            $config['file_name'] = 'profile_picture_'.$data['id'];
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()) {
            } else {
                $archivo = $this->upload->data();
            }
            echo 1;
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
        redirect('Welcome');
    }

    //Metodo llamado mediante ajax
    public function verificar() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
                $sess_array = array(
                    'idEmpresa' => 1,
                    'administrador' => true,
                    'aprobador' => true,
                    'cotizador' => true,
                    'contador' => true
                );
                $this->session->set_userdata('logged_in', $sess_array);
            // }
            echo 1;
    }



    //Metodo llamado mediante ajax
    // public function verificar() {
    //     $data['correo'] = $this->input->post('username');
    //     $data['contrasena'] =  $this->input->post('password');
        

    //     $resultado = $this->Usuario_model->cargarPorCorreoUsuarioContrasena($data);

    //     if ($resultado == 0) {
    //         echo 0; //Error en la transacción
    //     } else {
    //         if ($resultado == 1) {
    //             echo 1; //no encontrado
    //         } else {
    //             if ($resultado == 2) {
    //                 echo 2;//si encontrado pero contrasena mala
    //             } else {
    //                  $sess_array = array(
    //                 'idEmpresa' => $resultado['idEmpresa'],
    //                 'administrador' => $resultado['roles']['rolAdministrador'],
    //                 'aprobador' => $resultado['roles']['rolAprobador'],
    //                 'cotizador' => $resultado['roles']['rolCotizador'],
    //                 'contador' => $resultado['roles']['rolContador']
    //                 );
    //                 $this->session->set_userdata('logged_in', $sess_array);
    //                 echo 3;//correcto
    //             }
                

               
    //         }
            
    //     }
        
                
    // }
}

?>