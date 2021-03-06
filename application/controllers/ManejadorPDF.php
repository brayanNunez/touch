<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ManejadorPDF extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //cargamos la libreria html2pdf
        $this->load->library('html2pdf');
        //cargamos el modelo pdf_model
        // $this->load->model('pdf_model');
        $this->load->helper('file');
        $this->lang->load('content');
        $this->load->model('Cotizacion_model');

        // $this->load->library('simple_html_dom');
    }

    // private function createFolder()
    // {
    //     if (!is_dir("./files")) {
    //         mkdir("./files", 0777);
    //         mkdir("./files/pdfs", 0777);
    //     }
    // }
    // private function createFolder($idEmpresa, $idCotizacion)
    // {
    //     // echo 'is_dir("./files/empresas/1/cotizaciones/124")'; exit();
    //     if (!is_dir("./files/empresas/1/cotizaciones/124")) {
    //         mkdir("./files/empresas/1/cotizaciones/123/cliente", 0777);
    //         mkdir("./files/empresas/1/cotizaciones/123/sistema", 0777);
    //     }
    // }

    //Se crean 2 carpetas, una para el sistema y poder editarla y otra que es la que ve el cliente cuando se le 
    //evia el link
    private function createFolder($idEmpresa, $idCotizacion)
    {
        // echo 'is_dir("./files/empresas/1/cotizaciones/124")'; exit();
        // echo 'llegue'; exit();
        if (!is_dir("./files/empresas/".$idEmpresa."/cotizaciones/".$idCotizacion)) {
            // echo 'entre'; exit();
            mkdir("./files/empresas/".$idEmpresa."/cotizaciones/".$idCotizacion, 0777);
            mkdir("./files/empresas/".$idEmpresa."/cotizaciones/".$idCotizacion."/cliente", 0777);
            mkdir("./files/empresas/".$idEmpresa."/cotizaciones/".$idCotizacion."/sistema", 0777);
            // echo 'entre'; exit();
            // mkdir("./files/empresas/1/cotizaciones/123/sistema", 0777);
        }
    }

    private function createFolderFacturas()
    {
        if (!is_dir("./files")) {
            mkdir("./files", 0777);
            mkdir("./files/facturas", 0777);
        }
    }



    public function tablaDescarga()
    {

        if (isset($_POST['miHtml'])) {

            $titulo = $_POST['titulo'];

            $htmlEntrada = $_POST['miHtml'];
            // $this->createFolder();
            $this->html2pdf->folder('./files/pdfs/');
            $this->html2pdf->filename($titulo.'.pdf');
            $this->html2pdf->paper('a4', 'portrait');
            // $data = "";
            $this->html2pdf->html(utf8_decode($htmlEntrada));
            $this->html2pdf->create();
            exit;
        }
    }

    

    public function crearFactura()
    {

        if (isset($_POST['miHtml'])) {
            $htmlEntrada = $_POST['miHtml'];

            //establecemos la carpeta en la que queremos guardar los pdfs,
            //si no existen las creamos y damos permisos
            $this->createFolderFacturas();

            //importante el slash del final o no funcionará correctamente
            $this->html2pdf->folder('./files/facturas/');

            //establecemos el nombre del archivo
            $this->html2pdf->filename('cotizacion.pdf');

            //establecemos el tipo de papel
            $this->html2pdf->paper('a4', 'portrait');

            //datos que queremos enviar a la vista, lo mismo de siempre
            $data = "";

            //hacemos que coja la vista como datos a imprimir
            //importante utf8_decode para mostrar bien las tildes, ñ y demás
            // $this->html2pdf->html(utf8_decode($this->load->view('index', $data, true)));
            $this->html2pdf->html(utf8_decode($htmlEntrada));
            //si el pdf se guarda correctamente lo mostramos en pantalla

            if ($path = $this->html2pdf->create('save')) {

                $this->load->library('email');

                $this->email->from('brayannr@hotmail.es', 'Brayan');
                $this->email->to('brayan.nunez@ucrso.info');
                // $this->email->cc('jose.rodriguez@ucrso.info'); 

                $this->email->subject('Email PDF Test');
                $this->email->message('Testing the email a freshly created PDF');

                $this->email->attach($path);

                $this->email->send();
                $this->html2pdf->create();
                echo "El email ha sido enviado correctamente";

            }

        }

    }

    public function generarCotizacion()
    {

        if (isset($_POST['miHtml'])) {
            $htmlEntrada = $_POST['miHtml'];
            $idEmpresa = $_POST['idEmpresa'];
            $idCotizacion = $_POST['idCotizacion'];

            //establecemos la carpeta en la que queremos guardar los pdfs,
            //si no existen las creamos y damos permisos
            $this->createFolder($idEmpresa, $idCotizacion);

            //importante el slash del final o no funcionará correctamente
            $this->html2pdf->folder("./files/empresas/".$idEmpresa."/cotizaciones/".$idCotizacion."/sistema/");

            //establecemos el nombre del archivo
            $this->html2pdf->filename('cotizacion.pdf');

            //establecemos el tipo de papel
            $this->html2pdf->paper('a4', 'portrait');

            //datos que queremos enviar a la vista, lo mismo de siempre
            $data = "";

            //hacemos que coja la vista como datos a imprimir
            //importante utf8_decode para mostrar bien las tildes, ñ y demás
            // $this->html2pdf->html(utf8_decode($this->load->view('index', $data, true)));
            $this->html2pdf->html(($htmlEntrada));
            //si el pdf se guarda correctamente lo mostramos en pantalla

            $path = $this->html2pdf->create('save');
            // $path = $this->html2pdf->create();
            // echo 'bien';
        }

    }

    public function descargarCotizacion($idEmpresa, $idCotizacion)
    {
        // echo $idEmpresa.'/'.$idCotizacion; exit();

        if (isset($_POST['miHtml'])) {
            $htmlEntrada = $_POST['miHtml'];

            // echo $htmlEntrada; exit();

            //establecemos la carpeta en la que queremos guardar los pdfs,
            //si no existen las creamos y damos permisos
            $this->createFolder($idEmpresa, $idCotizacion);

            //importante el slash del final o no funcionará correctamente
            $this->html2pdf->folder('./files/empresas/'.$idEmpresa.'/cotizaciones/'.$idCotizacion.'/sistema/');//http://localhost/Proyectos/touch/files/empresas/1/cotizaciones/sUHDEO5uALpWDV9EYoz7nwX5kRlMa_OcdGtdOhB2-es/sistema/cotizacion.pdf

            //establecemos el nombre del archivo
            $this->html2pdf->filename('cotizacion.pdf');

            //establecemos el tipo de papel
            $this->html2pdf->paper('a4', 'portrait');

            //datos que queremos enviar a la vista, lo mismo de siempre
            $data = "";

            //hacemos que coja la vista como datos a imprimir
            //importante utf8_decode para mostrar bien las tildes, ñ y demás
            // $this->html2pdf->html(utf8_decode($this->load->view('index', $data, true)));
            $this->html2pdf->html(utf8_decode($htmlEntrada));
            //si el pdf se guarda correctamente lo mostramos en pantalla

            if ($path = $this->html2pdf->create('save')) {
                

                $this->html2pdf->create();

            }

        }

    }

    public function index2()
    {

        // if (isset($_POST['miHtml']))
        // {
        // $htmlEntrada = $_POST['miHtml'];

        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();

        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');

        //establecemos el nombre del archivo
        $this->html2pdf->filename('cotizacion.pdf');

        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');

        //datos que queremos enviar a la vista, lo mismo de siempre
        $data = "";

        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html("<h1>hola mundo<h1>");
        // $this->html2pdf->html(utf8_decode($htmlEntrada));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if ($this->html2pdf->create()) {
            // $this->show();
            // }
        }

    }

    //funcion que ejecuta la descarga del pdf
    public function downloadPdf()
    {
        //si existe el directorio
        if (is_dir("./files/pdfs")) {
            //ruta completa al archivo
            $route = base_url("files/pdfs/cotizacion.pdf");
            //nombre del archivo
            $filename = "cotizacion.pdf";
            //si existe el archivo empezamos la descarga del pdf
            if (file_exists("./files/empresas/1/cotizaciones/1Wne37xEaHvwxOH8dvJ9-XHuNfMq8NtfPawpbQqLB7w/sistema" . $filename)) {
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header('Content-disposition: attachment; filename=' . basename($route));
                header("Content-Type: application/pdf");
                header("Content-Transfer-Encoding: binary");
                header('Content-Length: ' . filesize($route));
                readfile($route);
            }
        }
    }


    //esta función muestra el pdf en el navegador siempre que existan
    //tanto la carpeta como el archivo pdf
    public function show()
    {
        if (is_dir("./files/pdfs")) {
            $filename = "cotizacion.pdf";
            $route = base_url("files/pdfs/cotizacion.pdf");
            if (file_exists("./files/pdfs/" . $filename)) {
                header('Content-type: application/pdf');
                readfile($route);
            }
        }
    }

    

    public function enviarCotizacionRechazada($idEmpresa, $idCotizacionEncriptado){

        $data['idCotizacion'] = decryptIt($idCotizacionEncriptado);
        $data['estado'] = 3; //estado rechazada

        $resultado = $this->Cotizacion_model->editarEstado($data); 

        if ($resultado) {

            $correo = $this->Cotizacion_model->cargarCorreoVendedor($data['idCotizacion'])['correo']; 

            $datosEmpresa = $this->Cotizacion_model->cargarCorreoNombreEmpresa($idEmpresa); 
            $correoEmpresa = $datosEmpresa['correo'];
            $nombreEmpresa = $datosEmpresa['nombre'];

            $data = array( 
                'correoVendedor' => $correo,
                'envio_asunto' => $this->input->post('envio_asunto'),  
                'envio_texto' => $this->input->post('envio_texto')
                );

            // echo print_r($data); exit();

            $linkCotizacionEditar = base_url().'cotizacion/editar/'.$idCotizacionEncriptado;

            
            $this->load->library('email');
            $this->email->from($correoEmpresa, $nombreEmpresa);
            $this->email->to($data['correoVendedor']);

            $this->email->subject($data['envio_asunto']);

            $this->email->message($data['envio_texto'].' '.$linkCotizacionEditar);

            
            $this->email->send();

        }

        echo $resultado;

    }

    
    public function facturarCotizacion($idCotizacionEncriptado){

        $data['idCotizacion'] = decryptIt($idCotizacionEncriptado);

        $data['estado'] = 6; //estado facturada

        $idCotizacion = $data['idCotizacion'];

        $resultado = $this->Cotizacion_model->editarEstado($data); 
        
        echo $resultado;

    }

    public function enviarCotizacionContador($idEmpresa, $idCotizacionEncriptado){

        $data['idCotizacion'] = decryptIt($idCotizacionEncriptado);

        $data['estado'] = 5; //estado finalizada

        $idCotizacion = $data['idCotizacion'];

        $resultado = $this->Cotizacion_model->editarEstado($data); 

        if ($resultado) {
           
            $this->load->library('email');

            $linkCotizacionVer = base_url().'cotizacion/facturar/'.$idCotizacionEncriptado;

            $datosEmpresa = $this->Cotizacion_model->cargarCorreoNombreEmpresa($idEmpresa); 
            $correoEmpresa = $datosEmpresa['correo'];
            $nombreEmpresa = $datosEmpresa['nombre'];

            $listaCorreos = $this->Cotizacion_model->cargarCorreosCotizadores($idEmpresa);
            $arrayCorreos = array();
            foreach ($listaCorreos as $correo) {
                array_push($arrayCorreos, $correo['correo']);
            }

            $data = array( 
                'correosCotizadores' => $arrayCorreos,
                'envio_asunto' => label('finalizar_asuntoContador'),  
                'envio_texto' => label('finalizar_textoContador')
                );

            $this->email->from($correoEmpresa, $nombreEmpresa);
            $this->email->to($data['correosCotizadores']);

            $this->email->subject($data['envio_asunto']);

            $this->email->message($data['envio_texto'].' '.$linkCotizacionVer);
            // $this->email->attach(null);

            
            $this->email->send(); 

        }

        echo $resultado;

    }
    
    public function enviarCotizacionCliente($idEmpresa, $idCotizacionEncriptado){

        $data['idCotizacion'] = decryptIt($idCotizacionEncriptado);

        $data['estado'] = 4; //estado aprobada

        $idCotizacion = $data['idCotizacion'];

        $resultado = $this->Cotizacion_model->editarEstado($data); 

        if ($resultado) {
            $envioPDF = 0;
            if (isset($_POST['envio_pdf'])) {
               $envioPDF = 1;
            }

            $envioLink = 0;
            if (isset($_POST['envio_link'])) {
               $envioLink = 1;
            }

            $data = array('aprobar_destinatario' => $this->input->post('aprobar_destinatario'),  
                'aprobar_destinatarioCC' => $this->input->post('aprobar_destinatarioCC'),  
                'envio_asunto' => $this->input->post('envio_asunto'),  
                'envio_texto' => $this->input->post('envio_texto'),  
                'envio_pdf' => $envioPDF,
                'envio_link' => $envioLink
                );

            $arrayDestinatario = array();
            if ($data['aprobar_destinatario'] != '') {
                $destinatarios = explode(",", $data['aprobar_destinatario']);
                foreach ($destinatarios as $correo) {
                    array_push($arrayDestinatario, $correo);
                }
            }

            $arrayDestinatarioCC = array();
            if ($data['aprobar_destinatarioCC'] != '') {
                $destinatariosCC = explode(",", $data['aprobar_destinatarioCC']);
                foreach ($destinatariosCC as $correo) {
                    array_push($arrayDestinatarioCC, $correo);
                }
            }
            // echo print_r($arrayDestinatario); exit();

            $datosEmpresa = $this->Cotizacion_model->cargarCorreoNombreEmpresa($idEmpresa); 
            $correoEmpresa = $datosEmpresa['correo'];
            $nombreEmpresa = $datosEmpresa['nombre'];


            $rutaSistema = './files/empresas/'.$idEmpresa.'/cotizaciones/'.$idCotizacionEncriptado.'/sistema/cotizacion.pdf';
            $rutaCliente ='./files/empresas/'.$idEmpresa.'/cotizaciones/'.$idCotizacionEncriptado.'/cliente/cotizacion.pdf';
            copy($rutaSistema, $rutaCliente); 
            
            $this->load->library('email');
            $this->email->from($correoEmpresa, $nombreEmpresa);
            // echo print_r($arrayCorreos); exit();
            $this->email->to($arrayDestinatario);
            $this->email->cc($arrayDestinatarioCC);

            $this->email->subject($data['envio_asunto']);

            $texto = $data['envio_texto'];
            if ($data['envio_link']) {
                $texto = $data['envio_texto'].' '.base_url().'files/empresas/'.$idEmpresa.'/cotizaciones/'.$idCotizacionEncriptado.'/cliente/cotizacion.pdf';
            }
            $this->email->message($texto);

            if ($data['envio_pdf']) {
                $this->email->attach($rutaCliente);
            }
            $this->email->send();

            $correo = $this->Cotizacion_model->cargarCorreoVendedor($idCotizacion)['correo'];

            $datosEmpresa = $this->Cotizacion_model->cargarCorreoNombreEmpresa($idEmpresa); 
            $correoEmpresa = $datosEmpresa['correo'];
            $nombreEmpresa = $datosEmpresa['nombre'];

            $data = array( 
                'correoVendedor' => $correo,
                'envio_asunto' => label('aprobar_asuntoVendedor'),  
                'envio_texto' => label('aprobar_textoVendedor')
                );
            // $data = array( 
            //     'correoVendedor' => $correo,
            //     'envio_asunto' => 'prueba',  
            //     'envio_texto' => 'texto';
            //     );

            // echo print_r($data); exit();

            $linkCotizacionVer = base_url().'cotizacion/finalizar/'.$idCotizacionEncriptado;

            
            // $this->load->library('email');
            
            $this->email->clear(true);
            $this->email->from($correoEmpresa, $nombreEmpresa);
            $this->email->to($data['correoVendedor']);

            $this->email->subject($data['envio_asunto']);

            $this->email->message($data['envio_texto'].' '.$linkCotizacionVer);
            // $this->email->attach(null);

            
            $this->email->send(); 

        }

        echo $resultado;

    }

    public function enviarCorreoParaAprobacion($idCotizacionEncriptado){
        $sessionActual = $this->session->userdata('logged_in');
        $idEmpresa = $sessionActual['idEmpresa'];
        
        $idCotizacion = decryptIt($idCotizacionEncriptado);
        $listaCorreos = $this->Cotizacion_model->cargarCorreosAprobadores($idCotizacion);
        $arrayCorreos = array();
        foreach ($listaCorreos as $correo) {
            array_push($arrayCorreos, $correo['correo']);
        }

        $datosEmpresa = $this->Cotizacion_model->cargarCorreoNombreEmpresa($idEmpresa); 
        $correoEmpresa = $datosEmpresa['correo'];
        $nombreEmpresa = $datosEmpresa['nombre'];

        // echo print_r($correoEmpresa); exit();
        

        $this->load->library('email');
        $this->email->from($correoEmpresa, $nombreEmpresa);
        // $this->email->from('brayannr@hotmail.es', 'brayan');
        // echo print_r($arrayCorreos); exit();
        $this->email->to($arrayCorreos);
        // $this->email->cc('brayan.nunez@ucrso.info');

        $this->email->subject('Aprobación touch');
        $this->email->message('Cotización pendiente de aprobar http://touchcr.com/cotizacion/aprobar/'.$idCotizacionEncriptado);

        // $this->email->attach($path);

        $this->email->send();

        echo 'enviado';

    }

    //función para crear y enviar el pdf por email
    //ejemplo de la libreria sin modificar
    public function mail_pdf()
    {

        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();

        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');

        //establecemos el nombre del archivo
        $this->html2pdf->filename('cotizacion.pdf');

        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');

        //datos que queremos enviar a la vista, lo mismo de siempre
        // $data = array(
        //     'title' => 'Listado de las provincias españolas en pdf',
        //     'provincias' => $this->pdf_model->getProvincias()
        // );
        $data = "";

        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode("<h1>Prueba correo</h1>"));


        //Check that the PDF was created before we send it
        if ($path = $this->html2pdf->create('save')) {

            $this->load->library('email');

            $this->email->from('brayannr@hotmail.es', 'Brayan');
            $this->email->to('brayan.nunez@ucrso.info');
            $this->email->cc('brayan.nunez@ucrso.info');

            $this->email->subject('Email PDF Test');
            $this->email->message('Testing the email a freshly created PDF');

            $this->email->attach($path);

            $this->email->send();

            echo "El email ha sido enviado correctamente";

        }

    }
}