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
//        verificarLogin();//helper

//        $plantillas = $this->Cotizacion_model->cargar(1);
//        if ($plantillas === false || $plantillas === array()) {
//            echo "Error en la transacción";
//        } else {
//            $data['plantillas'] = $plantillas;
            $this->load->view('layout/default/header');
            $this->load->view('layout/default/left-sidebar');
//            $this->load->view('cotizar/cotizar', $data);
            $this->load->view('cotizar/cotizar');
            $this->load->view('layout/default/footer');
//        }
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
