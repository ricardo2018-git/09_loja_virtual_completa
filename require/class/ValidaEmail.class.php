<?php

	# -- Validar E-mail --
		class ValidaEmail{

			public function setValidaEmail($email){

				$ext = array('.com', '.br', '.net', '.gov', '.org', '.tv');
			
				# -- Verifica se esta vazio --
					if(strlen($email) < 1){	
						return 'Informe o e-mail';
					}else{

						# -- Valida primeira parte do e-mail segundo e ultima, "primeira@segunda.resto" --
						if(!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i', $email)){
							return 'E-mail invalido';
						}else if(!in_array(strrchr($email, '.'), $ext)){
							return 'E-mail invalido';
						}else{
							return $email;
						}
					}
				# -- END Verifica se esta vazio --
			}
		}
	# -- END Validar E-mail --

?>