<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ManejadorExcel extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->lang->load('content');
        $this->load->library('simple_html_dom');
        $this->load->library('PHPExcel');
    }



    public function tablaDescarga()
    {

        if (isset($_POST['miHtml'])) {
            $htmlEntrada = $_POST['miHtml'];

            $titulo = 'Empleados';

            $str = $htmlEntrada;

            $table = str_get_html($str);
            $rowData = array();

            foreach($table->find('tr') as $row) {
                // initialize array to store the cell data from each row
                $flight = array();
                foreach($row->find('td') as $cell) {
                    // push the cell's text to the array
                    $flight[] = trim($cell->plaintext);

                }
                $rowData[] = $flight;
            }

        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        // date_default_timezone_set('Europe/London');

        if (PHP_SAPI == 'cli')
            die('This example should only be run from a Web Browser');

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator(label('nombreSistema'))
            ->setLastModifiedBy(label('nombreSistema'));
            // ->setSubject("Prueba de descarga de tabla de personas")
            // ->setDescription("Documento de prueba de descarga de tabla de excel desde PHP")
            // ->setKeywords("office 2007 openxml php")
            // ->setCategory("Documento de prueba");

        $hoja = $objPHPExcel->getSheet(0);
        $hoja->setTitle($titulo);

        $hoja->fromArray($rowData, '', 'A1');

        $header = 'a1:f1';
        $hoja->getStyle($header)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF00');
        $style = array(
            'font' => array('bold' => true,),
            'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
        );
        $hoja->getStyle($header)->applyFromArray($style);

        for ($col = ord('a'); $col <= ord('z'); $col++)
        {
            $hoja->getColumnDimension(chr($col))->setAutoSize(true);
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$titulo.'.xls"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        // header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;

        }

    }
}
