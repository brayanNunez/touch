<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
   function __construct(){
        parent:: __construct();
        $this->load->database();
    }
   
   function existe_email($email){
      $this->db->select('email_usuario');
      $this->db->where('email_usuario', $email); 
      $query = $this->db->get('usuario');
      if ($query->num_rows() > 0){
         return 1;
      }
      return 0;
   }
   function usuario_login($usuario){
      $this->db->where('nombreUsuario', $usuario); 
      //$this->db->where('clave', md5($clave)); 
      $query = $this->db->get('usuario');
      if ($query->num_rows() > 0){
         return 1;
      }
      return 0;
   }
   // function usuario_login($usuario){
   //    $this->db->where('nombreUsuario', $usuario); 
   //    //$this->db->where('clave', md5($clave)); 
   //    $query = $this->db->get('usuario');
   //    if ($query->num_rows() > 0){
   //       return $query->row();
   //    }
   //    return 0;
   // }
   
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