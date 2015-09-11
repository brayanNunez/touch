<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ManejadorExcel extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');
    }



    public function tablaDescarga()
    {

        if (isset($_POST['miHtml'])) {
            $htmlEntrada = $_POST['miHtml'];
            // $str = '<table class="tableISV"><tr><td>language</td><td>español</td></tr><tr><td>query</td><td>Convertir</td></tr><tr><td>origen</td><td>html</td></tr><tr><td>destino</td><td>array</td></tr><tr><td>user</td><td>username</td><td>root</td></tr><tr><td></td><td>password</td><td>toor</td></tr></table>';
            $str = $htmlEntrada;

            $table = str_get_html($str);
            $rowData = array();

            foreach($table->find('tr') as $row) {
                // initialize array to store the cell data from each row
                $flight = array();
                foreach($row->find('td') as $cell) {
                    // push the cell's text to the array
                    $flight[] = $cell->plaintext;
                }
                $rowData[] = $flight;
            }
            echo print_r($rowData); exit();

        }

    }
}
