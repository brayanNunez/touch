<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
   function __construct(){
        parent:: __construct();
        $this->load->database();
    }
   
   
   function inserta_usuario($datos = array()){
      if(!$this->_required(array("email_usuario","clave"), $datos)){
         return FALSE;
      }
      //clave, encripto
      $datos['clave']=md5($datos['clave']);
   
      $this->db->insert('usuario', $datos);
      return $this->db->insert_id();
   }
}
?>