<?php

	// -- Carrega class´s automaticamente --
	function __autoload($class){
		require_once"{$class}.class.php";
	}

	// -- Conexao com o banco --
	abstract class ConDB{

		private static $cnx;

		private function setConn(){
			return
			is_null(self::$cnx) ?
					self::$cnx = new PDO("mysql:host=localhost;dbname=desenvolvendophp", "root", "") :
					self::$cnx;
		}

		public function getConn(){
			return $this -> setConn();
		}
	}

	// -- Insere um registro no banco --
	$crud = new CRUD;
	$crud -> insert('user', 'user=?, email=?, cidade=?', array('nomeDoUsuario', 'teste@hotmail.com', 'cidadeDeDeus'));
?>