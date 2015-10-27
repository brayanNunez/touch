<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fases extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Fase_model');
    }

    public function index()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $lista = $this->Fase_model->cargarTodos($idEmpresa);
        $data['lista'] = $lista;
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('fases/fases', $data);
        $this->load->view('layout/default/footer');
    }



    public function editar()
    {
        $id = $_POST['idEditar'];
        $resultado = $this->Fase_model->cargar(decryptIt($id)); 
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function modificar()
    {


        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['fasePadre'] =array(
         'idFase' => $this->input->post('idFase'),
         'codigo' => $this->input->post('fase_codigo'),
         'nombre' => $this->input->post('fase_nombre'),
         'notas' => $this->input->post('fase_notas'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

        // echo $this->input->post('fase_nombre'); exit();


        $editados = array();
        $eliminados = array();
        $nuevos = array();

        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadSubfases');


        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                $accionEfectuada = $this->input->post('fase_'.$contador);
                if ($accionEfectuada=='2') {//fue eliminado
                    $identificacion =  $this->input->post('idFase_'.$contador);
                    $fase = array(
                         'idFase' =>$this->input->post('idFase_'.$contador),
                         'eliminado' => '1'
                         );
                    array_push($eliminados, $fase);
                } else {
                    if ($accionEfectuada=='1') {// no fue eliminado

                          $fase = array(
                         'idFase' =>$this->input->post('idFase_'.$contador),
                         'codigo' => $this->input->post('fase_codigo'.$contador),
                         'nombre' => $this->input->post('fase_nombre'.$contador),
                         'notas' => $this->input->post('fase_notas'.$contador)
                         );

                        array_push($editados, $fase);

                    } else {// es nuevo
                         $fase = array(
                         'idFasePadre' =>$this->input->post('idFase'),
                         'codigo' => $this->input->post('fase_codigo'.$contador),
                         'nombre' => $this->input->post('fase_nombre'.$contador),
                         'notas' => $this->input->post('fase_notas'.$contador),
                         'idEmpresa' => $idEmpresa,
                         'eliminado' => '0'
                         );
                        array_push($nuevos, $fase);
                    }
                    
                } 
                $fasesObtenidos++;  
            }
            $contador++;
         }

         $data['nuevos'] = $nuevos;
         $data['editados'] = $editados;
         $data['eliminados'] = $eliminados;

        if (!$this->Fase_model->modificar($data)) {
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
        if (!$this->Fase_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0; 
        } else {
            //correcto
            echo 1; 
        }
    }

    public function verificarCodigos(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $fases = array();

        $fase = array(
         'codigo' => $this->input->post('fase_codigo'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

        // echo print_r($fase);

        array_push($fases, $fase);
        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadSubfases');

        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                  $fase = array(
                 'codigo' => $this->input->post('fase_codigo'.$contador),
                 'idEmpresa' => $idEmpresa,
                 'eliminado' => '0'
                 );
                array_push($fases, $fase);
                $fasesObtenidos++;
            }
            $contador++;
         }



         $data['fases'] = $fases;
         $res = $this->Fase_model->verificarCodigos($data);
         echo $res;
    }

        public function verificarCodigosEditar(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $fases = array();

        $fase = array(
         'codigo' => $this->input->post('fase_codigo'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );
        $original = $this->input->post('codigoOriginal');
        if ($this->input->post('fase_codigo') != $original) {
             array_push($fases, $fase);
        }


        $contador = 0;
        $fasesObtenidos = 0;

        $cantidadFases = $this->input->post('cantidadSubfases');
        // echo $cantidadFases; exit();
        
        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                  $fase = array(
                 'codigo' => $this->input->post('fase_codigo'.$contador),
                 'idEmpresa' => $idEmpresa,
                 'eliminado' => '0'
                 );
                  $accionEfectuada = $this->input->post('fase_'.$contador);

                  if ($accionEfectuada = '0' ) {// si es nuevo
                        array_push($fases, $fase);
                  }

                  if ($accionEfectuada = '1') {// si ya existe
                       $original = $this->input->post('codigoOriginal'.$contador);
                       if ($this->input->post('fase_codigo'.$contador) != $original) {// si le cambiaron el codigo
                           array_push($fases, $fase);
                       }
                  }
            
                  $fasesObtenidos++;
            }
            $contador++;
         }



         $data['fases'] = $fases;
         $res = $this->Fase_model->verificarCodigos($data);
         if ($res===true) {
             echo "true";// no s envia el true o false porque en js se recibe como 1  o 0, haciendo que se confundan con codigos con esos digitos.
         } else {
            if ($res===false) {
             echo "false";
             } else {
                 echo $res; 
             }
         } 
    }

    public function insertar(){

        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['fasePadre'] =array(
         'codigo' => $this->input->post('fase_codigo'),
         'nombre' => $this->input->post('fase_nombre'),
         'notas' => $this->input->post('fase_notas'),
         'idEmpresa' => $idEmpresa,
         'eliminado' => '0'
         );

        $fases = array();
        $contador = 0;
        $fasesObtenidos = 0;
        $cantidadFases = $this->input->post('cantidadSubfases');
        while ($fasesObtenidos < $cantidadFases) {
            if (isset($_POST['fase_'.$contador])) {
                  $fase = array(
                 'codigo' => $this->input->post('fase_codigo'.$contador),
                 'nombre' => $this->input->post('fase_nombre'.$contador),
                 'notas' => $this->input->post('fase_notas'.$contador),
                 'idEmpresa' => $idEmpresa,
                 'eliminado' => '0'
                 );
                array_push($fases, $fase);
                $fasesObtenidos++;
            }
            $contador++;
         }

         $data['subFases'] = $fases;
         $res = $this->Fase_model->insertar($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo encryptIt($res);
        }
    }

}

?>