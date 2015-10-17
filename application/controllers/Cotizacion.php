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
        if ($plantillas === false || $plantillas === array()) {
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
     public function nuevaPlantilla()
    {
        // if (isset($this->input->post('checksEncabezado_hora'))) {
        //     # code...
        // }
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        // $data['palabras'] = $this->input->post('empleado_palabras');
        $data['datos'] = array(
            'empresa_idEmpresa' => $idEmpresa, 
            'nombrePlantilla' => $this->input->post('nombrePlantilla'),
            'colorEncabezado' => $this->input->post('colorEncabezado_colorFondo'),
            'colorLetraEncabezado' => $this->input->post('colorEncabezado_colorLetra'),
            'colorBarraHorizontal1' => $this->input->post('colorEncabezado_colorBarra'),
            'tipoLetraEncabezado' => $this->input->post(''),
            'mostrarNombreEmpresa' => $this->input->post('checksEncabezado_nombreEmpresa'),
            'mostrarCodigo' => $this->input->post('checksEncabezado_codigoCotizacion'),
            'mostrarCliente' => $this->input->post('checksEncabezado_cliente'),
            'mostrarAtencion' => $this->input->post('checksEncabezado_atencion'),
            'mostrarCotizador' => $this->input->post('checksEncabezado_vendedor'),
            'mostrarFecha' => $this->input->post('checksEncabezado_fecha'),
            'mostrarHora' => $this->input->post('checksEncabezado_hora'),
            'mostrarImagenEncabezado' => $this->input->post('checksEncabezado_logo')
            // 'textoAdicionalEncabezado' => $this->input->post('empleado_primerApellido'),
            // 'colorDetalle' => $this->input->post('empleado_segundoApellido'),
            // 'colorLetraDetalle' => $this->input->post('empleado_primerApellido'),
            // 'colorBarraHorizontal2' => $this->input->post('empleado_segundoApellido'),
            // 'tipoLetraDeralle' => $this->input->post('empleado_primerApellido'),
            // 'mostrarImpuesto' => $this->input->post('empleado_segundoApellido'),
            // 'mostrarDescuento' => $this->input->post('empleado_primerApellido'),
            // 'mostrarTotal' => $this->input->post('empleado_segundoApellido'),
            // 'colorInformacion' => $this->input->post('empleado_segundoApellido'),
            // 'colorLetraInformcion' => $this->input->post('empleado_segundoApellido'),  
            // 'colorBarraHorizontal3' => $this->input->post('empleado_segundoApellido'),  
            // 'tipoLetraInformacion' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarFormaPago' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarValidez' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarDetalle' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarFirma' => $this->input->post('empleado_segundoApellido'),  
            // 'imagenFirma' => $this->input->post('empleado_segundoApellido'),  
            // 'textoAdicionalInformacion' => $this->input->post('empleado_segundoApellido'),
            // 'colorPie' => $this->input->post('empleado_segundoApellido'),  
            // 'colorLetraPie' => $this->input->post('empleado_segundoApellido'),  
            // 'tipoLetraPie' => $this->input->post('empleado_segundoApellido'),
            // 'mostrarTelefono' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarSitioWeb' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarCorreo' => $this->input->post('empleado_segundoApellido'),  
            // 'mostrarImagenPie' => $this->input->post('empleado_segundoApellido'),  
            // 'textoAdicionalPie' => $this->input->post('empleado_segundoApellido')
        );
        // if (!$this->Empleado_model->insertar($data)) {
        //     //Error en la transacción
        //     echo 0;
        // } else {
        //     // correcto
        //     echo 1;
        // }

    echo print_r($data);
        
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
        $json = '[ { "value": 1 , "text": "Impuestos directos"   , "continent": "Europe"    },
                  { "value": 2 , "text": "Impuestos indirectos"      , "continent": "Europe"    },
                  { "value": 3 , "text": "Impuestos 3"       , "continent": "Europe"    },
                  { "value": 4 , "text": "Impuestos 4"  , "continent": "America"   }
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
