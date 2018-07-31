<?php

	class Cripto{
		public function setCripto($param){

			# -- Exemplos de Criptografia --
			#$_cripto = md5($param);	// 32 caracteres
			#$_cripto = sha1($param);	// 40 caracteres
			#$_cripto = hash('sha256', $param);	// 64 caracteres
			#$_cripto = hash('sha384', $param);	// 96 caracteres
			#$_cripto = hash('sha512', $param);	// 128 caracteres
			#$_cripto = hash('whirlpool', $param);	// 128 caracteres

			$_cripto = md5(hash('whirlpool', $param));

			return $_cripto;
		}
	}

	# -- teste de criptografia MD5 --
	$cpt = new Cripto;
	var_dump ($cpt -> setCripto('a'));

?>