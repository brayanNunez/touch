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

    public function index()
    {
        verificarLogin();//helper
        esAdministrador();//helper
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/lista');
        $this->load->view('layout/default/footer');
    }


    // public function pasos()
    // {
    //     $this->load->view('layout/default/header');
    //     $this->load->view('layout/default/left-sidebar');
    //     $this->load->view('cotizar/paso3');
    //     $this->load->view('layout/default/footer');
    // }

    public function cotizar()
    {
        verificarLogin();//helper

        $plantillas = $this->Cotizacion_model->cargar(1); 
        // if ($plantillas === false || $plantillas === array()) {
        if ($plantillas === false) {
            echo "Error en la transacción";
        } else {
            $data['plantillas'] = $plantillas;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
            $this->load->view('cotizar/cotizar', $data);
            $this->load->view('layout/default/footer');
        }
    }

    //Metodo llamado mediante ajax
    public function cargarTodasPlnatillas()
    {
        verificarLogin();//helper

        $plantillas = $this->Cotizacion_model->cargarTodasPlantillas(); 
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

        $informacionDetalleInformacion = 0;
        if (isset($_POST['checksInformacion_informacionDetalle'])) {
           $informacionDetalleInformacion = 1;
        }

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
        $columnaImpuesto = 0;
        if (isset($_POST['checksDetalle_ColumnaImpuesto'])) {
           $columnaImpuesto = 1;
        }
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

        $data['datos'] = array(
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
            'textoAdicionalEncabezado' => '',
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
            'mostrarDetalle' => $informacionDetalleInformacion,  
            'mostrarFirma' => $firmaInformacion,  
            'imagenFirma' => '',  
            'textoAdicionalInformacion' => '',
            'colorFooter' => $this->input->post('colorFooter_colorFondo'),  
            'colorLetraFooter' => $this->input->post('colorFooter_colorLetra'),  
            'tipoLetraFooter' => '',
            'mostrarTelefono' => $telefonoFooter,  
            'mostrarSitioWeb' => $sitioFooter,  
            'mostrarCorreo' => $correoFooter,  
            'mostrarImagenFooter' => $logoFooter,  
            'textoAdicionalFooter' => '1',
            'mostrarColumnaItem' => $columnaItem, 
            'mostrarColumnaNombre' => $columnaNombre, 
            'mostrarColumnaDescripcion' => $columnaDescripcion, 
            'mostrarColumnaPrecio' => $columnaPrecio, 
            'mostrarColumnaCantidad' => $columnaCantidad, 
            'mostrarColumnaImpuesto' => $columnaImpuesto, 
            'mostrarColumnaTotal' => $columnaTotal
        );
        if (!$this->Cotizacion_model->insertarPlantilla($data)) {
            //Error en la transacción
            echo 0;
        } else {
            // correcto
            echo 1;
        }

    // echo print_r($data);
        
    }

    public function ver()
    {
        verificarLogin();//helper
        $this->load->view('layout/default/header');
        $this->load->view('layout/default/left-sidebar');
        $this->load->view('cotizar/ver');
        $this->load->view('layout/default/footer');
    }

    // public function paso2()
    // {
    //     $this->load->view('layout/default/header');
    //     $this->load->view('layout/default/left-sidebar');
    //     $this->load->view('cotizar/paso2');
    //     $this->load->view('layout/default/footer');
    // }

    public function jsonVendedores()
    {
        $json = '[ { "value": 1 , "text": "Brayan Nuñez Rojas"   , "continent": "Europe"    },
                  { "value": 2 , "text": "Esteban Nuñez Rojas"      , "continent": "Europe"    },
                  { "value": 3 , "text": "Josue Nuñez Rojas"       , "continent": "Europe"    },
                  { "value": 4 , "text": "Anthony Nuñez Rojas"  , "continent": "America"   },
                  { "value": 5 , "text": "Andrey Nuñez Rojas" , "continent": "America"   },
                  { "value": 6 , "text": "Jeyson Molina Rojas", "continent": "America"   },
                  { "value": 7 , "text": "Maria Perez Salas"      , "continent": "Australia" },
                  { "value": 8 , "text": "Bolivar Molina Quiros"  , "continent": "Australia" },
                  { "value": 9 , "text": "James Rodriguez Salas"    , "continent": "Australia" },
                  { "value": 10, "text": "Carlos David Rojas"     , "continent": "Asia"      },
                  { "value": 11, "text": "Emmanuel Rojas Salas"   , "continent": "Asia"      },
                  { "value": 12, "text": "Ana Maria Rojas Bolaños"   , "continent": "Asia"      },
                  { "value": 13, "text": "Diego Alfaro Rojas"       , "continent": "Africa"    },
                  { "value": 14, "text": "Bernardita Rojas Bolaños"   , "continent": "Africa"    },
                  { "value": 15, "text": "Rodolfo Nuñez Rodriguez"    , "continent": "Africa"    }
                ]';
        echo $json;
    }

    public function jsonImpuestos()
    {
        $json = '[ { "value": 1 , "text": "Impuestos directos" },
                  { "value": 2 , "text": "Impuestos indirectos"},
                  { "value": 3 , "text": "Impuestos 3"},
                  { "value": 4 , "text": "Impuestos 4"}
                ]';
        echo $json;
    }

    // public function jsonContactos()
    // {
    //     $json = '[ "Facebook",
    //               "TV",
    //               "Radio",
    //               "Periódico"
    //             ]';
    //     echo $json;
    // }

    // public function jsonGustos()
    // {
    //     $json = '[ "Música",
    //               "Fútbol",
    //               "Paris",
    //               "Naturaleza",
    //               "New York",
    //               "Deportes extremos",
    //               "Playa",
    //               "Deportes acuaticos",
    //               "Historia",
    //               "Ciencias",
    //               "Viajar",
    //               "Lotería",
    //               "Adidas",
    //               "Nike",
    //               "Pan salado",
    //               "Europa",
    //               "Patinetas"
    //             ]';
    //     echo $json;
    // }

    

}
