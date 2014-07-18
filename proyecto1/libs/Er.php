<?php

class Er 
{
    
	public function valida_email($valor)
	{
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_nombre($valor)
	{
		$exp_reg = '/[a-zA-Z]{2,30}/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_apellido($valor)
	{
		$exp_reg = '/[a-zA-Z]{2,30}/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_peso($valor)
	{
		$exp_reg = '/^(0[1-9]|1\d|2[0-3]).([0-5]\d)$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_estatura($valor)
	{
		$exp_reg = '/[^-0-9\.]/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_edad($valor)
	{
		$exp_reg = "/[^-0-9\.]/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_idequipo($valor)
	{
		$exp_reg = '/^(0[1-9]|1\d|2[0-3])$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_id($valor)
	{
		$exp_reg = "/^\d*$/";
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_idcontinente($valor)
	{
		$exp_reg = '/^(0[1-9]|1\d|2[0-3])$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_idciudad($valor)
	{
		$exp_reg = '/^(0[1-9]|1\d|2[0-3])$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}



	public function valida_fecha($valor)
	{
		$exp_reg = '/^\d{1,2}\/\d{1,2}\/\d{2,4}$/	'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_abreviatura($valor)
	{
		$exp_reg = '/[A-Z]{3}/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_imagen($valor)
	{
		$exp_reg = '/^(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)
		( [a-zA-Z0-9\-\.\?\,\'\/\\\+&%\$#_]*)?$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true; 
		} else { 
		     return false;
		} 
	}

	public function valida_img($valor)
	{	
		
        if ((($valor== "image/gif")
        || ($valor== "image/jpeg")
        || ($valor == "image/jpg")
        || ($valor == "image/pjpeg")
        || ($valor == "image/x-png")
        || ($valor == "image/png")))
        {
        return true;
		}else{
		return false;
		}
	}

	public function valida_pdf($valor)
	{	
		

        if ($valor== "application/pdf")
        
        {
        return true;
		}else{
		return false;
		}
	}

	public function valida_tam($valor)
	{	
		if ($valor < 200000)//bits
        {
        return true;
		}else{
		return false;
		}
	}

	public function valida_nimg($valor)
	{ 
		$exp_reg="/^([_a-z0-9-])*+(\.){1}((jpg|png|gif|jpeg|pjpeg|x-png){1})$/"; 
		if (preg_match($exp_reg, $valor)) 
			{ 
				return true; 
			} else 
			{ 
				return false; 
			} 
		}

}

?>    