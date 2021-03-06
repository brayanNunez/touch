<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizacion extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->model('Cotizacion_model');
    }

    public function index($estado = 0)
    {
        // verificarLogin();//helper
        // esAdministrador();//helper

        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data = $this->Cotizacion_model->cargarTodos($idEmpresa, $estado);
        if ($data == false) {
            $data['lista'] = false;
        }
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/lista', $data);
        $this->load->view('layout/default/footer');
    }


    public function correosSugerencia($idCotizacion)
    {
        $idCotizacion = decryptIt($idCotizacion);

        $resultado = $this->Cotizacion_model->correosSugerencia($idCotizacion); 
        $correos = array();
        foreach ($resultado['atenciones'] as $atencion){
            array_push($correos, $atencion['correo']);
        }
        array_push($correos, $resultado['cliente']['correo']);

        echo json_encode($correos);
    }

    public function busqueda(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        
        $busqueda = array('idServicio' => $this->input->post('busquedaCotizacion_servicio'),
            'idCliente' => $this->input->post('busquedaCotizacion_cliente'),
            'idUsuario' => $this->input->post('busquedaCotizacion_vendedor'),  
            'idEstado' => $this->input->post('busquedaCotizacion_estado'),
            'desde' => $this->input->post('busqueda-fecha-desde'),  
            'hasta' => $this->input->post('busqueda-fecha-hasta')
            );
        // echo print_r($busqueda);

        $busqueda = $this->Cotizacion_model->busqueda($idEmpresa, $busqueda);

        

        if ($busqueda === false) {
            echo "0";
        } else {
            echo json_encode($busqueda); 
        }
    }

    public function precarga()
    {
        $this->load->view('cotizar/precarga');
    }
    

    public function cambiarEstado($idCotizacion, $estado){

        $data['idCotizacion'] = decryptIt($idCotizacion);

        $data['estado'] = $estado;

        $resultado = $this->Cotizacion_model->editarEstado($data); 
        echo $resultado; exit();
    }


    public function guardar($idCotizacion, $estado){

        $data['idCotizacion'] = decryptIt($idCotizacion);

        // if (isset($_POST["aprobadores"])) {
        $data['aprobadores'] = $this->input->post('aprobadores');
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        // } else{
        //     $data['aprobadores'] = array();
        // }

        // $data['aprobadores'] = $this->input->post('aprobadores');



        $editados = array();
        $eliminados = array();
        $nuevos = array();

        $contador = 0;
        $lineasObtenidos = 0;
        $cantidadLineas = $this->input->post('cantidadLineasDetalle');


        while ($lineasObtenidos < $cantidadLineas) {
            if (isset($_POST['linea_'.$contador])) {
                $accionEfectuada = $this->input->post('linea_'.$contador);
                if ($accionEfectuada=='2') {//fue eliminado
                    $identificacion =  decryptIt($this->input->post('idLinea_'.$contador));
                    $linea = array(
                         'idLineaDetalle' =>$this->input->post('idLinea_'.$contador),
                         'eliminado' => '1'
                         );
                    array_push($eliminados, $linea);
                } else {
                    if ($accionEfectuada=='1') {// no fue eliminado
                        
                          $linea = array(
                         'idLineaDetalle' =>$this->input->post('idLinea_'.$contador),
                         'idServicio' => $this->input->post('productoNombre_'.$contador),
                         'descripcion' => $this->input->post('descripcion_'.$contador),
                         'precioUnidad' => $this->input->post('precio_'.$contador),
                         'cantidad' => $this->input->post('cantidad_'.$contador),
                         'utilidad' => $this->input->post('utilidad_'.$contador),
                         'impuestos' => $this->input->post('impuestos_'.$contador),
                         'total' => $this->input->post('subTotal_'.$contador),
                         'precioUnidadPropio' => $this->input->post('precioUnidadPropio_'.$contador),
                         'eliminado' => '0'
                         );
                        array_push($editados, $linea);

                    } else {// es nuevo
                         $enviarFacturas = 0;
                         if ($this->input->post('checkbox_lineaCorreoCliente_'.$contador)) {
                            $enviarFacturas = 1;
                         }
                          $linea = array(
                         'idCotizacion' => $data['idCotizacion'],
                         'idServicio' => $this->input->post('productoNombre_'.$contador),
                         'descripcion' => $this->input->post('descripcion_'.$contador),
                         'precioUnidad' => $this->input->post('precio_'.$contador),
                         'cantidad' => $this->input->post('cantidad_'.$contador),
                         'utilidad' => $this->input->post('utilidad_'.$contador),
                         'impuestos' => $this->input->post('impuestos_'.$contador),
                         'total' => $this->input->post('subTotal_'.$contador),
                         'precioUnidadPropio' => $this->input->post('precioUnidadPropio_'.$contador),
                         'eliminado' => '0'
                         );
                        array_push($nuevos, $linea);
                    }

                }
                $lineasObtenidos++;
            }
            $contador++;
         }

         $data['nuevos'] = $nuevos;
         $data['editados'] = $editados;
         $data['eliminados'] = $eliminados;
         // echo print_r($data); exit();


        $fecha = '';
        if ($this->input->post('paso1_validez') != '') {
            $fecha = date("Y-m-d", strtotime($this->input->post('paso1_validez')));
        }
        $data['datosGenerales'] = array(
            // 'numero' => $this->input->post('paso1_numero'),
            'codigo' => $this->input->post('paso1_codigo'),
            'idCliente' => $this->input->post('paso1Cliente'),
            'idPersonaContacto' => $this->input->post('paso1Atencion'),
            'idFormaPago' => $this->input->post('paso1FormaPago'),
            'idMoneda' => $this->input->post('paso1Moneda'),  
            'tipoCambio' => $this->input->post('paso1_tipoCambio'),
            'descuento' => $this->input->post('paso2_descuentoCotizacion'),
            'monto' => $this->input->post('paso2_totalCotizacion'),
            'eliminado' => 0,
            'idEstadoCotizacion' => $estado,
            'ascendente' => $this->input->post('ascendente'),
            'columna' => $this->input->post('columna'),
            'fechaValidez' => $fecha
            );
        // echo print_r($data['datosGenerales']); exit();


        $data['diseno'] = $this->obtenerPlantilla(0);
        // echo print_r($data['diseno']);exit();
        $resultado = $this->Cotizacion_model->guardarCambios($data); 
        echo $resultado; exit();
    }

    public function cotizar()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        $data['idUsuario'] = $sessionActual['idUsuario'];

        $data['gastos'] = $this->Cotizacion_model->gastosVariables($data['idEmpresa']);
        $data['personas'] = $this->Cotizacion_model->personas($data['idEmpresa']);
        $data['categorias'] = $this->Cotizacion_model->categorias($data['idEmpresa']);
        $data['tiempos'] = $this->Cotizacion_model->tiempos($data['idEmpresa']);
        $data['fases'] = $this->Cotizacion_model->fases($data['idEmpresa']);

        $resultado = $this->Cotizacion_model->nueva($data); 
        if ($resultado == false) {
            echo "Error en la transacción";
        } else {

            
            $resultado['idEmpresa'] = $data['idEmpresa'];
            // $resultado['idCotizacion'] = '123';
            // if ($resultado === false || $resultado === array()) {
            // print_r($resultado['servicios']); exit();
        
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/cotizar', $data);
            $this->load->view('layout/default/footer');
        }
    }
    public function editar($idCotizacion)
    {

        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        $idUsuario = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        $resultado = $this->Cotizacion_model->cargar($data);

        if ($resultado === false) {
            echo "Error en la transacción";
        } else {

            $estado =  $resultado['cotizacion']['descripcion']; 
            $vendedor =  $resultado['cotizacion']['idUsuario']; 

            if (($estado == 'espera' || $estado == 'finalizada' || $estado == 'facturada')|| ($vendedor != $idUsuario)) {
                $this->ver($idCotizacion);
            } else {

            $data['gastos'] = $this->Cotizacion_model->gastosVariables($data['idEmpresa']);
            $data['personas'] = $this->Cotizacion_model->personas($data['idEmpresa']);
            $data['categorias'] = $this->Cotizacion_model->categorias($data['idEmpresa']);
            $data['tiempos'] = $this->Cotizacion_model->tiempos($data['idEmpresa']);
            $data['fases'] = $this->Cotizacion_model->fases($data['idEmpresa']);

            // $resultado = $this->Cotizacion_model->cargar($data);


        
            // $resultado['lineasDetalle'] = array();
            $resultado['idEmpresa'] = $data['idEmpresa'];
            $resultado['idCotizacion'] = decryptIt($idCotizacion);
            // $resultado['idCotizacion'] = '123';
            // if ($resultado === false || $resultado === array()) {
            // print_r($resultado['servicios']); exit();
        
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/cotizar', $data);
            $this->load->view('layout/default/footer');

            }
        }
    }

    public function duplicar($idCotizacion)
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idUsuario'] = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        $idDuplicado = $this->Cotizacion_model->duplicar($data);

        if ($idDuplicado === false) {
            echo "Error en la transacción";
        } else {
            $this->editar(encryptIt($idDuplicado));
        }
    }


    public function aprobar($idCotizacion)
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        $data['idUsuario'] = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        $resultado = $this->Cotizacion_model->cargarAprobacion($data); 
        if ($resultado === false) {
            echo "Error en la transacción";
        } else {
            // $resultado['lineasDetalle'] = array();
            $resultado['idEmpresa'] = $data['idEmpresa'];
            $resultado['idCotizacion'] = decryptIt($idCotizacion);
        
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/aprobar', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function finalizar($idCotizacion)
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        $data['idUsuario'] = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        $resultado = $this->Cotizacion_model->cargarFinalizar($data); 
        if ($resultado === false) {
            echo "Error en la transacción";
        } else {
            // $resultado['lineasDetalle'] = array();
            $resultado['idEmpresa'] = $data['idEmpresa'];
            $resultado['idCotizacion'] = decryptIt($idCotizacion);
        
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/finalizar', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function facturar($idCotizacion)
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        $data['idUsuario'] = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        $resultado = $this->Cotizacion_model->cargarFacturar($data); 
        if ($resultado === false) {
            echo "Error en la transacción";
        } else {
            // $resultado['lineasDetalle'] = array();
            $resultado['idEmpresa'] = $data['idEmpresa'];
            $resultado['idCotizacion'] = decryptIt($idCotizacion);
        
            $data['resultado'] = $resultado;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/facturar', $data);
            $this->load->view('layout/default/footer');
        }
    }

    public function ver($idCotizacion)
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $data['idEmpresa'] = $sessionActual['idEmpresa'];
        // $data['idUsuario'] = $sessionActual['idUsuario'];
        $data['idCotizacion'] = decryptIt($idCotizacion);

        // $resultado = $data;

        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/ver', $data);
        $this->load->view('layout/default/footer');
    }

    //Metodo llamado mediante ajax
    public function cargarTodasPlnatillas()
    {
        verificarLogin();//helper
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $plantillas = $this->Cotizacion_model->cargarTodasPlantillas($idEmpresa); 
        // if ($plantillas === false || $plantillas === array()) {
        if ($plantillas === false) {
            echo "0";
        } else {
            echo json_encode($plantillas); 
        }
    }

    //Metodo llamado mediante ajax
     public function nuevaPlantilla()
    {
        $data['diseno'] = $this->obtenerPlantilla(1);
        if (!$this->Cotizacion_model->insertarPlantilla($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }

    // echo print_r($data);
        
    }

    public function obtenerPlantilla($publica){
        // if (isset($this->input->post('checksEncabezado_hora'])) {
        //     # code...
        // }
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');
        // echo (isset($_POST['checksEncabezado_nombreEmpresa'))==false); exit;
        $nombreEmpresaEncabezado = 0;
        if (isset($_POST['checksEncabezado_nombreEmpresa'])) {
           $nombreEmpresaEncabezado = 1;
        }

        $codigoEncabezado = 0;
        if (isset($_POST['checksEncabezado_codigoCotizacion'])) {
           $codigoEncabezado = 1;
        }
        
        $clienteEncabezado = 0;
        if (isset($_POST['checksEncabezado_cliente'])) {
           $clienteEncabezado = 1;
        }

        $atencionEncabezado = 0;
        if (isset($_POST['checksEncabezado_atencion'])) {
           $atencionEncabezado = 1;
        }

        $vendedorEncabezado = 0;
        if (isset($_POST['checksEncabezado_vendedor'])) {
           $vendedorEncabezado = 1;
        }

        $fechaEncabezado = 0;
        if (isset($_POST['checksEncabezado_fecha'])) {
           $fechaEncabezado = 1;
        }

        $horaEncabezado = 0;
        if (isset($_POST['checksEncabezado_hora'])) {
           $horaEncabezado = 1;
        }

        $logoEncabezado = 0;
        if (isset($_POST['checksEncabezado_logo'])) {
           $logoEncabezado = 1;
        }

        $formaPagoInformacion = 0;
        if (isset($_POST['checksInformacion_formaPago'])) {
           $formaPagoInformacion = 1;
        }

        $validezInformacion = 0;
        if (isset($_POST['checksInformacion_validez'])) {
           $validezInformacion = 1;
        }

        $firmaInformacion = 0;
        if (isset($_POST['checksInformacion_firma'])) {
           $firmaInformacion = 1;
        }

        // $informacionDetalleInformacion = 0;
        // if (isset($_POST['checksInformacion_informacionDetalle'])) {
        //    $informacionDetalleInformacion = 1;
        // }

        $telefonoFooter = 0;
        if (isset($_POST['checksFooter_telefono'])) {
           $telefonoFooter = 1;
        }

        $sitioFooter = 0;
        if (isset($_POST['checksFooter_sitio'])) {
           $sitioFooter = 1;
        }
        
        $correoFooter = 0;
        if (isset($_POST['checksFooter_correo'])) {
           $correoFooter = 1;
        }

        $logoFooter = 0;
        if (isset($_POST['checksFooter_logo'])) {
           $logoFooter = 1;
        }

        $columnaItem = 0;
        if (isset($_POST['checksDetalle_ColumnaItem'])) {
           $columnaItem = 1;
        }
        $columnaNombre = 0;
        if (isset($_POST['checksDetalle_ColumnaNombre'])) {
           $columnaNombre = 1;
        }
        $columnaDescripcion = 0;
        if (isset($_POST['checksDetalle_ColumnaDescripcion'])) {
           $columnaDescripcion = 1;
        }
        $columnaPrecio = 0;
        if (isset($_POST['checksDetalle_ColumnaPrecio'])) {
           $columnaPrecio = 1;
        }
        $columnaCantidad = 0;
        if (isset($_POST['checksDetalle_ColumnaCantidad'])) {
           $columnaCantidad = 1;
        }
        // $columnaImpuesto = 0;
        // if (isset($_POST['checksDetalle_ColumnaImpuesto'])) {
        //    $columnaImpuesto = 1;
        // }
        $columnaTotal = 0;
        if (isset($_POST['checksDetalle_ColumnaTotal'])) {
           $columnaTotal = 1;
        }

        $impuesto = 0;
        if (isset($_POST['checksDetalle_impuesto'])) {
           $impuesto = 1;
        }
        $descuento = 0;
        if (isset($_POST['checksDetalle_descuento'])) {
           $descuento = 1;
        }
        $total = 0;
        if (isset($_POST['checksDetalle_total'])) {
           $total = 1;
        }

        $diseno = array(
            'idEmpresa' => $idEmpresa, 
            'nombrePlantilla' => $this->input->post('nombrePlantilla'),
            'colorEncabezado' => $this->input->post('colorEncabezado_colorFondo'),
            'colorLetraEncabezado' => $this->input->post('colorEncabezado_colorLetra'),
            'colorBarraHorizontal1' => $this->input->post('colorEncabezado_colorBarra'),
            'tipoLetraEncabezado' => '',
            'mostrarNombreEmpresa' => $nombreEmpresaEncabezado,
            'mostrarCodigo' => $codigoEncabezado,
            'mostrarCliente' => $clienteEncabezado,
            'mostrarAtencion' => $atencionEncabezado,
            'mostrarCotizador' => $vendedorEncabezado,
            'mostrarFecha' => $fechaEncabezado,
            'mostrarHora' => $horaEncabezado,
            'mostrarImagenEncabezado' => $logoEncabezado,
            // 'textoAdicionalEncabezado' => '',
            'colorDetalle' => $this->input->post('colorCuerpo_colorFondo'),
            'colorLetraDetalle' => $this->input->post('colorCuerpo_colorLetra'),
            'colorBarraHorizontal2' => $this->input->post('colorCuerpo_colorBarra'),
            'tipoLetraDeralle' => '',
            'mostrarImpuesto' => $impuesto,
            'mostrarDescuento' => $descuento,
            'mostrarTotal' => $total,
            'colorInformacion' => $this->input->post('colorInformacion_colorFondo'),
            'colorLetraInformcion' => $this->input->post('colorInformacion_colorLetra'),  
            'colorBarraHorizontal3' => $this->input->post('colorInformacion_colorBarra'),  
            'tipoLetraInformacion' => '',  
            'mostrarFormaPago' => $formaPagoInformacion,  
            'mostrarValidez' => $validezInformacion,  
            // 'mostrarDetalle' => $informacionDetalleInformacion,  
            'mostrarFirma' => $firmaInformacion,  
            'imagenFirma' => '',  
            'textoAdicionalInformacion' => $this->input->post('textoAdicionalInformacion'),
            'colorFooter' => $this->input->post('colorFooter_colorFondo'),  
            'colorLetraFooter' => $this->input->post('colorFooter_colorLetra'),  
            'tipoLetraFooter' => '',
            'mostrarTelefono' => $telefonoFooter,  
            'mostrarSitioWeb' => $sitioFooter,  
            'mostrarCorreo' => $correoFooter,  
            'mostrarImagenFooter' => $logoFooter,  
            'textoAdicionalFooter' => $this->input->post('textoAdicionalFooter'),
            'mostrarColumnaItem' => $columnaItem, 
            'mostrarColumnaNombre' => $columnaNombre, 
            'mostrarColumnaDescripcion' => $columnaDescripcion, 
            'mostrarColumnaPrecio' => $columnaPrecio, 
            'mostrarColumnaCantidad' => $columnaCantidad, 
            // 'mostrarColumnaImpuesto' => $columnaImpuesto, 
            'mostrarColumnaTotal' => $columnaTotal,
            'publica' => $publica,
            'eliminado' => 0
        );
        return $diseno;
    }

    // public function ver()
    // {
    //     verificarLogin();//helper
    //     $this->load->view('layout/default/header');
    //     $this->load->view('layout/default/left-sidebar');
    //     $this->load->view('cotizar/ver');
    //     $this->load->view('layout/default/footer');
    // }

    public function tiposMoneda() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cotizacion_model->tiposMoneda($idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    public function verificarNombreMoneda(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $moneda = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('tipoMoneda_nombre'),
            'eliminado' => '0'
        );
        $data['moneda'] = $moneda;

        // echo print_r($impuesto); exit();
        $resultado = $this->Cotizacion_model->verificarNombreMoneda($data);
        if ($resultado === false) {
            //Error en la transacci�n
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
    public function insertarMoneda()
    {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('tipoMoneda_nombre'),
            'signo' => $this->input->post('tipoMoneda_signo'),
            'tipoCambio' => $this->input->post('tipoMoneda_tipoCambio'),
            'eliminado' => '0'
        );

        $res = $this->Cotizacion_model->insertarMoneda($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo $res;
        }
    }
    public function valorMoneda() {
        $id = $_POST['idMoneda'];
        $resultado = $this->Cotizacion_model->valorMoneda($id);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function formasPago() {
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $resultado = $this->Cotizacion_model->formasPago($idEmpresa);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    public function verificarNombreFormaPago(){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];

        $data['datos'] = array(
            'idEmpresa' => $idEmpresa,
            'nombre' => $this->input->post('formaPago_nombre'),
            'eliminado' => '0'
        );
        $resultado = $this->Cotizacion_model->verificarNombreFormaPago($data);
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

        $res = $this->Cotizacion_model->insertarFormaPago($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo $res;
        }
    }

    public function clientes() {
        $sessionActual = $this->session->userdata('logged_in');
        $idUsuario = $sessionActual['idUsuario'];

        $resultado = $this->Cotizacion_model->clientes($idUsuario);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    // public function verificarIdentificacionCliente(){
    //     $sessionActual = $this->session->userdata('logged_in');
    //     $idEmpresa = $sessionActual['idEmpresa'];

    //     $juridico = $this->input->post('cliente_tipo');
    //     if($juridico == 2) {
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'identificacion' => $this->input->post('clientejuridico_identificacion'),
    //             'eliminado' => 0
    //         );
    //     } else {
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'identificacion' => $this->input->post('cliente_identificacion'),
    //             'eliminado' => 0
    //         );
    //     }

    //     $resultado = $this->Cotizacion_model->verificarIdentificacionCliente($data);
    //     if ($resultado === false) {
    //         //Error en la transacción
    //         echo 0;
    //     } else {
    //         if ($resultado == 1) {
    //             //Ya existe esta identificacion
    //             echo 1;
    //         } else {
    //             //Identificacion Valida
    //             echo 2;
    //         }
    //     }
    // }
    // public function insertarCliente()
    // {
    //     $sessionActual = $this->session->userdata('logged_in');
    //     $idEmpresa = $sessionActual['idEmpresa'];

    //     $todosVendedores = 0;
    //     if ($this->input->post('checkbox_todosVendedores')) {
    //         $todosVendedores = 1;
    //     }
    //     $listaVendedores = '';
    //     if($todosVendedores == 0) {
    //         $listaVendedores = $this->input->post('cliente_vendedores');
    //     }

    //     $data['gustos'] = $this->input->post('cliente_gustos');
    //     $data['medios'] = $this->input->post('cliente_medios');
    //     $data['vendedores'] = $listaVendedores;

    //     $juridico = $this->input->post('cliente_tipo');
    //     $todosVendedores = 0;
    //     if ($this->input->post('checkbox_todosVendedores')) {
    //         $todosVendedores = 1;
    //     }
    //     if ($juridico == 2) {
    //         $enviarFacturas = 0;
    //         if ($this->input->post('checkbox_correoClientejuridico')) {
    //             $enviarFacturas = 1;
    //         }
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'juridico' => $juridico,
    //             'identificacion' => $this->input->post('clientejuridico_identificacion'),
    //             'nombre' => $this->input->post('clientejuridico_nombre'),
    //             'nombreFantasia' => $this->input->post('clientejuridico_nombreFantasia'),
    //             'telefonoFijo' =>$this->input->post('clientejuridico_telefono'),
    //             'nacionalidad' =>$this->input->post('cliente_nacionalidad'),
    //             'pais' =>$this->input->post('cliente_direccionPais'),
    //             'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
    //             'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
    //             'domicilio' => $this->input->post('cliente_direccionDomicilio'),
    //             'enviarFacturas' => $enviarFacturas,
    //             'descuentoFijo' => $this->input->post('cliente_descuento'),
    //             'correo' => $this->input->post('clientejuridico_correo'),
    //             'fax' => $this->input->post('clientejuridico_fax'),
    //             'todosVendedores' => $todosVendedores,
    //             'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
    //             'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
    //             'activo' => '1',
    //             'eliminado' => '0'
    //         );
    //     } else {
    //         $enviarFacturas = 0;
    //         if ($this->input->post('checkbox_correoCliente')) {
    //             $enviarFacturas = 1;
    //         }
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'juridico' => $juridico,
    //             'identificacion' => $this->input->post('cliente_identificacion'),
    //             'nombre' => $this->input->post('cliente_nombre'),
    //             'primerApellido' => $this->input->post('cliente_apellido1'),
    //             'segundoApellido' => $this->input->post('cliente_apellido2'),
    //             'telefonoMovil' => $this->input->post('cliente_telefonoMovil'),
    //             'telefonoFijo' => $this->input->post('cliente_telefono'),
    //             'nacionalidad' => $this->input->post('cliente_nacionalidad'),
    //             'pais' => $this->input->post('cliente_direccionPais'),
    //             'estadoProvincia' => $this->input->post('cliente_direccionProvincia'),
    //             'ciudadCanton' => $this->input->post('cliente_direccionCanton'),
    //             'domicilio' => $this->input->post('cliente_direccionDomicilio'),
    //             'enviarFacturas' => $enviarFacturas,
    //             'descuentoFijo' => $this->input->post('cliente_descuento'),
    //             'fechaNacimiento' => date("Y-m-d", strtotime($this->input->post('cliente_fechaNacimiento'))),
    //             'correo' => $this->input->post('cliente_correo'),
    //             'todosVendedores' => $todosVendedores,
    //             'idMonedaDefecto' => $this->input->post('cliente_monedaCotizar'),
    //             'idFormaPagoDefecto' => $this->input->post('cliente_formaPago'),
    //             'activo' => '1',
    //             'eliminado' => '0'
    //         );
    //     }

    //     $contactos = array();
    //     $contador = 0;
    //     $contactosObtenidos = 0;
    //     $cantidadContactos = $this->input->post('cantidadContactos');
    //     while ($contactosObtenidos < $cantidadContactos) {
    //         if (isset($_POST['contacto_'.$contador])) {
    //             $enviarFacturas = 0;
    //             if ($this->input->post('checkbox_contactoCorreoCliente_'.$contador)) {
    //                 $enviarFacturas = 1;
    //             }
    //             $contacto = array(
    //                 'nombre' => $this->input->post('cliente_contactoNombre_'.$contador),
    //                 'primerApellido' => $this->input->post('cliente_contactoApellido1_'.$contador),
    //                 'segundoApellido' => $this->input->post('cliente_contactoApellido2_'.$contador),
    //                 'correo' => $this->input->post('cliente_contactoCorreo_'.$contador),
    //                 'telefono' => $this->input->post('cliente_contactoTelefono_'.$contador),
    //                 'puesto' => $this->input->post('cliente_contactoPuesto_'.$contador),
    //                 'enviarFacturas' => $enviarFacturas,
    //                 'eliminado' => '0'
    //             );
    //             array_push($contactos, $contacto);
    //             $contactosObtenidos++;
    //         }
    //         $contador++;
    //     }
    //     $data['contactos'] = $contactos;

    //     $photo = explode('.',$this->input->post('cliente_fotografia'));
    //     $data['extension'] = end($photo);

    //     $cliente = $this->Cotizacion_model->insertarCliente($data);
    //     if (!$cliente) {
    //         //Error en la transacción
    //         echo 0;
    //     } else {
    //         $config['upload_path'] = './files/empresas/'.$idEmpresa.'/clientes/'.$cliente;
    //         $config['file_name'] = 'profile_picture_'.$cliente.'.'.$data['extension'];
    //         $config['allowed_types'] = 'jpg|png|jpeg';
    //         $config['max_size'] = '2048';

    //         $this->load->library('upload', $config);
    //         if(!$this->upload->do_upload('userfile')) {
    //         }

    //         // correcto
    //         echo $cliente;
    //     }
    // }

    public function contactos() {
        $idCliente = $_POST['idCliente'];

        $resultado = $this->Cotizacion_model->contactos($idCliente);
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }
    // public function verificarCorreoContacto(){
    //     $data['datos'] = array(
    //         'idCliente' => $this->input->post('cliente_contactoIdCliente'),
    //         'correo' => $this->input->post('cliente_contactoCorreo'),
    //         'eliminado' => '0'
    //     );
    //     $resultado = $this->Cotizacion_model->verificarCorreoContacto($data);
    //     if ($resultado === false) {
    //         //Error en la transacción
    //         echo 0;
    //     } else {
    //         if ($resultado == 1) {
    //             //Ya existe esta identificacion
    //             echo 1;
    //         } else {
    //             //Identificacion Valida
    //             echo 2;
    //         }
    //     }
    // }
    public function insertarContacto()
    {
        $enviarFacturas = 0;
        if ($this->input->post('checkbox_contactoCorreoCliente')) {
            $enviarFacturas = 1;
        }
        $data['datos'] = array(
            'idCliente' => $this->input->post('cliente_contactoIdCliente'),
            'nombre' => $this->input->post('cliente_contactoNombre'),
            'primerApellido' => $this->input->post('cliente_contactoApellido1'),
            'segundoApellido' => $this->input->post('cliente_contactoApellido2'),
            'correo' => $this->input->post('cliente_contactoCorreo'),
            'puesto' => $this->input->post('cliente_contactoPuesto'),
            'telefono' => $this->input->post('cliente_contactoTelefono'),
            'enviarFacturas' => $enviarFacturas,
            'eliminado' => 0
        );

        $res = $this->Cotizacion_model->insertarContacto($data);
        if (!$res) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo $res;
        }
    }

    // public function verificarCodigoServicio() {
    //     $sessionActual = $this->session->userdata('logged_in');
    //     $idEmpresa = $sessionActual['idEmpresa'];

    //     $data['codigo'] = $_POST['servicio_codigo'];
    //     $data['idEmpresa'] = $idEmpresa;
    //     //el codigo se puede repetir solo en diferentes empresas
    //     $resultado = $this->Cotizacion_model->verificarCodigoServicio($data);
    //     if ($resultado === false) {
    //         //Error en la transacci�n
    //         echo 0;
    //     } else {
    //         if ($resultado == 1) {
    //             //Ya existe el codigo
    //             echo 1;
    //         } else {
    //             //codigo valido
    //             echo 2;
    //         }
    //     }
    // }
    // public function insertarServicio() {
    //     $data = array();
    //     $sessionActual = $this->session->userdata('logged_in');
    //     $idEmpresa = $sessionActual['idEmpresa'];

    //     $data['impuestos'] = $this->input->post('servicio_impuestos');
    //     $incluirGastos = $this->input->post('servicio_incluirGastosVariables');
    //     if($incluirGastos) {
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'codigo' => $this->input->post('servicio_codigo'),
    //             'nombre' => $this->input->post('servicio_nombre'),
    //             'descripcion' => $this->input->post('servicio_descripcion'),
    //             'utilidad' => $this->input->post('servicio_utilidad'),
    //             'total' => $this->input->post('servicio_total'),
    //             'idTiempo' => $this->input->post('servicioTiempo'),
    //             'incluirGastos' => 1,
    //             'estado' => 0
    //         );
    //     } else {
    //         $data['datos'] = array(
    //             'idEmpresa' => $idEmpresa,
    //             'codigo' => $this->input->post('servicio_codigo'),
    //             'nombre' => $this->input->post('servicio_nombre'),
    //             'descripcion' => $this->input->post('servicio_descripcion'),
    //             'utilidad' => $this->input->post('servicio_utilidad'),
    //             'total' => $this->input->post('servicio_total'),
    //             'idTiempo' => $this->input->post('servicioTiempo'),
    //             'incluirGastos' => 0,
    //             'estado' => 0
    //         );
    //     }

    //     $gastos = array();
    //     $contador = 0;
    //     $gastosObtenidos = 0;
    //     $cantidadGastos = $this->input->post('cantidadGastos');
    //     while ($gastosObtenidos < $cantidadGastos) {
    //         if (isset($_POST['gasto_'.$contador])) {
    //             $gasto = array(
    //                 'idGasto' => $this->input->post('gasto'.$contador.'_idGasto'),
    //                 'cantidad' => $this->input->post('gasto'.$contador.'_cantidad'),
    //                 'eliminado' => 0
    //             );
    //             array_push($gastos, $gasto);
    //             $gastosObtenidos++;
    //         }
    //         $contador++;
    //     }
    //     $data['gastos'] = $gastos;

    //     $fases = array();
    //     $contador = 0;
    //     $fasesObtenidos = 0;
    //     $cantidadFases = $this->input->post('cantidadFases');
    //     // echo $cantidadFases; exit();
    //     while ($fasesObtenidos < $cantidadFases) {
    //         if (isset($_POST['id_'.$contador])) {
    //             $fase = array(
    //                 'idFase' => $this->input->post('id_'.$contador),
    //                 'cantidadTiempo' => $this->input->post('cantidadhoras_'.$contador)
    //             );
    //             array_push($fases, $fase);
    //             $fasesObtenidos++;
    //         }
    //         $contador++;
    //     }
    //     $data['fases'] = $fases;

    //     $servicio = $this->Cotizacion_model->insertarServicio($data);
    //     if(!$servicio) {
    //         //Error en la transaccion
    //         echo 0;
    //     } else {
    //         echo 1;
    //     }
    // }

    public function paises() {
        $resultado = $this->Cotizacion_model->paises();
        if ($resultado === false || $resultado === array()) {
            echo 0;
        } else {
            echo json_encode($resultado);
        }
    }

    public function eliminar()
    {
        $id = $_POST['idEliminar'];
        if (!$this->Cotizacion_model->eliminar(decryptIt($id))) {
            //Error en la transacción
            echo 0;
        } else {
            //correcto
            echo 1;
        }
    }

}
