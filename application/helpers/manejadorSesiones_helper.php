<?php 

	function verificarLogin() {
		$instancia =& get_instance();
        $sessionActual = $instancia->session->userdata('logged_in');
        $instancia->session->set_userdata('urlInicial', current_url());
        if(!$sessionActual) {
            redirect(base_url().'welcome/index/1');
        } 
    }

 ?>