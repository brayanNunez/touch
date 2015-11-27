<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Servicio_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['lista'] = $this->Servicio_model->cargarTodos($idEmpresa);
        $data['gastos'] = $this->Servicio_model->gastosVariables($idEmpresa);

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('servicios/servicios_lista', $data);
        $this->load->view('layout/default/footer');
    }

    public function agregar()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['gastos'] = $this->Servicio_model->gastosVariables($idEmpresa);
        $data['personas'] = $this->Servicio_model->personas($idEmpresa);
        $data['categorias'] = $this->Servicio_model->categorias($idEmpresa);

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('servicios/servicios', $data);
        $this->load->view('layout/default/footer');
    }

    public function existeCodigo() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['codigo'] = $_POST['servicio_codigo'];
        $data['idEmpresa'] = $idEmpresa;
        //el codigo se puede repetir solo en diferentes empresas
        $resultado = $this->Servicio_model->existeCodigo($data);
        if ($resultado === false) {
            //Error en la transacci�n
            echo 0;
        } else {
            if ($resultado == 1) {
                //Ya existe el codigo
                echo 1;
            } else {
                //codigo valido
                echo 2;
            }
        }
    }

    public function insertar() {
        $data = array();
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['impuestos'] = $this->input->post('servicio_impuestos');
        $incluirGastos = $this->input->post('servicio_incluirGastosVariables');
        if($incluirGastos) {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'codigo' => $this->input->post('servicio_codigo'),
                'nombre' => $this->input->post('servicio_nombre'),
                'descripcion' => $this->input->post('servicio_descripcion'),
                'utilidad' => $this->input->post('servicio_utilidad'),
                'total' => $this->input->post('servicio_total'),
                'incluirGastos' => 1,
                'estado' => 0
            );
        } else {
            $data['datos'] = array(
                'idEmpresa' => $idEmpresa,
                'codigo' => $this->input->post('servicio_codigo'),
                'nombre' => $this->input->post('servicio_nombre'),
                'descripcion' => $this->input->post('servicio_descripcion'),
                'utilidad' => $this->input->post('servicio_utilidad'),
                'total' => $this->input->post('servicio_total'),
                'incluirGastos' => 0,
                'estado' => 0
            );
        }

        $gastos = array();
        $contador = 0;
        $gastosObtenidos = 0;
        $cantidadGastos = $this->input->post('cantidadGastos');
        while ($gastosObtenidos < $cantidadGastos) {
            if (isset($_POST['gasto_'.$contador])) {
                $gasto = array(
                    'idGasto' => $this->input->post('gasto'.$contador.'_idGasto'),
                    'cantidad' => $this->input->post('gasto'.$contador.'_cantidad'),
                    'eliminado' => 0
                );
                array_push($gastos, $gasto);
                $gastosObtenidos++;
            }
            $contador++;
        }
        $data['gastos'] = $gastos;

        $servicio = $this->Servicio_model->insertar($data);
        if(!$servicio) {
            //Error en la transaccion
            echo 0;
        } else {
            echo 1;
        }
    }

    public function editar($id)
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['gastos'] = $this->Servicio_model->gastosVariables($idEmpresa);
        $data['personas'] = $this->Servicio_model->personas($idEmpresa);
        $data['categorias'] = $this->Servicio_model->categorias($idEmpresa);

        $resultado = $this->Servicio_model->cargar(decryptIt($id), $idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo "Error en la transacci�n";
        } else {
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('servicios/servicios_editar', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function modificar($id) {
        $data['impuestos'] = $this->input->post('servicio_impuestos');
        $incluirGastos = $this->input->post('servicio_incluirGastosVariables');
        if($incluirGastos == 'on') {
            $data['datos'] = array(
                'codigo' => $this->input->post('servicio_codigo'),
                'nombre' => $this->input->post('servicio_nombre'),
                'descripcion' => $this->input->post('servicio_descripcion'),
                'utilidad' => $this->input->post('servicio_utilidad'),
                'total' => $this->input->post('servicio_total'),
                'incluirGastos' => 1,
                'estado' => 0
            );
        } else {
            $data['datos'] = array(
                'codigo' => $this->input->post('servicio_codigo'),
                'nombre' => $this->input->post('servicio_nombre'),
                'descripcion' => $this->input->post('servicio_descripcion'),
                'utilidad' => $this->input->post('servicio_utilidad'),
                'total' => $this->input->post('servicio_total'),
                'incluirGastos' => 0,
                'estado' => 0
            );
        }
        $data['id'] = decryptIt($id);

        $fases = array();
        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadFases');
        // echo $cantidadFases; exit();
        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['id_'.$contador])) {
                $fase = array(
                    'idFase' => $this->input->post('id_'.$contador),
                    'cantidadTiempo' => $this->input->post('cantidadhoras_'.$contador),
                    'idServicio' => $data['id']
                );
                array_push($fases, $fase);
                $fasesObtenidos++;
            }
            $contador++;
        }
        $data['fases'] = $fases;
        // echo print_r($fases); exit();

        $gastosEditados = array();
        $gastosEliminados = array();
        $gastosNuevos = array();
        $contadorGastos = 0;
        $gastosObtenidos = 0;
        $cantidadGastos = $this->input->post('cantidadGastos');

        while ($gastosObtenidos < $cantidadGastos) {
            if(isset($_POST['gasto_'.$contadorGastos])) {
                $accionEfectuada = $this->input->post('gasto_'.$contadorGastos);
                if ($accionEfectuada == '2') {//fue eliminado
                    $identificacion = $this->input->post('gasto'.$contadorGastos.'_idGasto');
                    $gasto = array(
                        'idGastoServicio' => $this->input->post('gasto'.$contadorGastos.'_gastoServicio'),
                        'eliminado' => 1
                    );
                    array_push($gastosEliminados, $gasto);
                } else {
                    if ($accionEfectuada == '1') {// no fue eliminado
                        $identificacion = $this->input->post('gasto'.$contadorGastos.'_idGasto');
                        $gasto = array(
                            'idGastoServicio' => $this->input->post('gasto'.$contadorGastos.'_gastoServicio'),
                            'cantidad' => $this->input->post('gasto'.$contadorGastos.'_cantidad')
                        );
                        array_push($gastosEditados, $gasto);
                    } else {// es nuevo
                        $identificacion = $this->input->post('gasto'.$contadorGastos.'_idGasto');
                        $gasto = array(
                            'idGasto' => $identificacion,
                            'idServicio' => $data['id'],
                            'cantidad' => $this->input->post('gasto'.$contadorGastos.'_cantidad'),
                            'eliminado' => 0
                        );
                        array_push($gastosNuevos, $gasto);
                    }
                }
                $gastosObtenidos++;
            }
            $contadorGastos++;
        }
        $data['gastosNuevos'] = $gastosNuevos;
        $data['gastosEditados'] = $gastosEditados;
        $data['gastosEliminados'] = $gastosEliminados;
//        print_r($data);exit();

        if (!$this->Servicio_model->modificar($data)) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function eliminar() {
        $id = $_POST['idEliminar'];
        if (!$this->Servicio_model->eliminar(decryptIt($id))) {
            //Error en la transacci�n
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

    public function cargarGasto()
    {
        $id = $_POST['idEditar'];
        $resultado = $this->Servicio_model->cargarGasto($id);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

}

?>