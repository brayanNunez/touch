<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pdf_ci extends CI_Controller 
{

 
    public function __construct()
    {
        parent::__construct();
        //cargamos la libreria html2pdf
        $this->load->library('html2pdf');
        //cargamos el modelo pdf_model
        // $this->load->model('pdf_model');
        $this->load->helper('file');
    }
 
    private function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }
 
 
    public function index()
    {

        if (isset($_POST['miHtml']))
        {
            $htmlEntrada = $_POST['miHtml'];

        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
 
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        $data = "";
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        // $this->html2pdf->html(utf8_decode($this->load->view('index', $data, true)));
        $this->html2pdf->html(utf8_decode($htmlEntrada));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            
             $this->show();
            
            
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
        $this->html2pdf->filename('test.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        $data = "";
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
         $this->html2pdf->html(utf8_decode($this->load->view('basura', $data, true)));
        // $this->html2pdf->html(utf8_decode($htmlEntrada));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        // }
        }
        
    } 
 
    //funcion que ejecuta la descarga del pdf
    public function downloadPdf()
    {
        //si existe el directorio
        if(is_dir("./files/pdfs"))
        {
            //ruta completa al archivo
            $route = base_url("files/pdfs/test.pdf"); 
            //nombre del archivo
            $filename = "test.pdf"; 
            //si existe el archivo empezamos la descarga del pdf
            if(file_exists("./files/pdfs/".$filename))
            {
                header("Cache-Control: public"); 
                header("Content-Description: File Transfer"); 
                header('Content-disposition: attachment; filename='.basename($route)); 
                header("Content-Type: application/pdf"); 
                header("Content-Transfer-Encoding: binary"); 
                header('Content-Length: '. filesize($route)); 


                readfile($route);
            }
        }    
    }
 
 
    //esta función muestra el pdf en el navegador siempre que existan
    //tanto la carpeta como el archivo pdf
    public function show()
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = "test.pdf"; 
            $route = base_url("files/pdfs/test.pdf"); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
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
        $this->html2pdf->filename('test.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        // $data = array(
        //     'title' => 'Listado de las provincias españolas en pdf',
        //     'provincias' => $this->pdf_model->getProvincias()
        // );
        $data ="";
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('basura', $data, true)));


        //Check that the PDF was created before we send it
        if($path = $this->html2pdf->create('save')) 
        {

            $this->load->library('email');
 
            $this->email->from('brayannr@hotmail.es', 'Brayan');
            $this->email->to('brayan.nunez@ucrso.info'); 
            
            $this->email->subject('Email PDF Test');
            $this->email->message('Testing the email a freshly created PDF');    
 
            $this->email->attach($path);
 
            $this->email->send();
            
            echo "El email ha sido enviado correctamente";
                        
        }
        
    } 
}
/* End of file pdf_ci.php */
/* Location: ./application/controllers/pdf_ci.php */