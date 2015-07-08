<?php 

function label($label){
	$instancia =& get_instance();
	$resultado = $instancia->lang->line($label);
	if ($resultado) {
		return $resultado;
	} else {
		return $label;
	}
}

 ?>