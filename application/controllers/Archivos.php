<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    function index() {
        //$this->load->view('upload_form', array('error' => ' ' ));
    }
    function do_upload() {
        if($this->input->post('upload')) {
            $config['upload_path'] = './files/';
            $config['allowed_types'] = 'docx|jpg|png|pdf';
            $config['max_size']    = '1024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                //echo $this->upload->display_errors();
                $error = array('error' => $this->upload->display_errors());
//                $this->load->view('upload_form', $error);
                redirect(base_url().'clientes/editar');
            } else {
                $data=$this->upload->data();
                $file=array(
                    'file_name'=>$data['raw_name'],
                    'file_ext'=>$data['file_ext'],
                    'file_size'=>$data['file_size'],
                    'file_date'=>''
                );
//                //$this->upload_model->add_image($file);
                $data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
                redirect(base_url().'clientes/editar');
            }
        } else {
            redirect(base_url().'clientes/editar');
        }
    }
    function files() {
        $data['archivos'] = $this->upload_model->view_files();
        $this->load->view('list_files', $data);
    }
}

?>