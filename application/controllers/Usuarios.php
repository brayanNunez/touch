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
        $idEmpresa = 1;//Obtener de la variable de sesión
        $data['lista'] = $this->Usuario_model->cargarUsuarios($idEmpresa);;
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
        $data['datos'] = array(
            'idEmpresa' => '1', //Obtener de la variable de sesión
            'primerApellido' => $this->input->post('usuario_primeroApellido'),
            'segundoApellido' => $this->input->post('usuario_segundoApellido'),
            'nombre' => $this->input->post('usuario_nombre'),
            'correo' => $this->input->post('usuario_correo'),
            'contrasena' => $this->input->post('usuario_contrasena'),
            'fotografia' => $this->input->post('usuario_fotografia'),
            'eliminado' => '0'
        );
        $data['roles'] = array(
            'rolAdministrador' => $this->input->post('usuario_rolAdministrador'),
            'rolAprobador' => $this->input->post('usuario_rolAprobador'),
            'rolCotizador' => $this->input->post('usuario_rolCotizador'),
            'rolContador' => $this->input->post('usuario_rolContador')
        );
        if (!$this->Usuario_model->insertarUsuario($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }

    }

    public function editar($id)
    {
        $resultado = $this->Usuario_model->cargarUsuario(decryptIt($id));
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
            'idEmpresa' => '1', //Obtener de la variable de sesión
            'primerApellido' => $this->input->post('empleado_primerApellido'),
            'segundoApellido' => $this->input->post('empleado_segundoApellido'),
            'nombre' => $this->input->post('empleado_nombre'),
            'correo' => $this->input->post('empleado_fechaNacimiento'),
            'contrasena' => $this->input->post('empleado_fechaIngreso'),
            'fotografia' => $this->input->post('empleado_descripcion'),
            'eliminado' => '0'
        );
        $data['id'] = decryptIt($id);
        if (!$this->Usuario_model->modificarUsuario($data)) {
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
        


        // $sess_array = array();
            // foreach ($result as $row) {
                $sess_array = array(
                    'idEmpresa' => 1,
                    'administrador' => true,
                    'aprobador' => true,
                    'cotizador' => true,
                    'contador' => true
                );
                $this->session->set_userdata('logged_in', $sess_array);
            // }
            echo $username.', '.$password;

        // $result = $this->Estudiante_model->validar_ingreso($username, $password);
        // if($result) {
        //     $sess_array = array();
        //     foreach ($result as $row) {
        //         $sess_array = array(
        //             'id' => $row->idEstudiante,
        //             'carnet' => $row->carnet,
        //             'tipo' => 1
        //         );
        //         $this->session->set_userdata('logged_in', $sess_array);
        //     }
        //     return true;
        // } else {
        //     $this->form_validation->set_message('check_database', 'Datos invalidos');
        //     return false;
        // }
    }
}

?>