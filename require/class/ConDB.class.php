<?php

	# -- Carrega class´s automaticamente --
	function __autoload($class){
		require_once"{$class}.class.php";
	}

	# -- Conexao com o banco --
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
	# -- END Conexao com o banco --

	# -- Instancia um objeto --
	$crud = new CRUD;

/*
	# -- chama class crud e faz um insert --
		$crud -> insert('user', 'user=?, email=?, cidade=?', array('nomeDoUsuario', 'teste@hotmail.com', 'cidadeDeDeus'));
	# -- END chama class crud e faz um insert --

	# -- Faz uma busca no banco --
		$sel = $crud -> select('*', 'user', 'WHERE idUser = ?', array(2));
		foreach($sel as $reg){
			$_SESSION['user'] = $reg;
		}
	# -- END Faz uma busca no banco --


	var_dump($_SESSION['user']['email']);
*/
?>