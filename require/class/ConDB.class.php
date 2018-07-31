<?php

	# -- Carrega class´s automaticamente --
		function __autoload($class){
			require_once"{$class}.class.php";
		}
	# -- END Carrega class´s automaticamente --

	# -- Conexao com o banco --
		abstract class ConDB{

			private $cnx;

			private function setConn(){
				return
				is_null($this -> $cnx) ?
						$this -> $cnx = new PDO("mysql:host=localhost;dbname=desenvolvendophp", "root", "") :
						$this -> $cnx;
			}

			public function getConn(){
				return $this -> setConn();
			}
		}
	# -- END Conexao com o banco --

#########################################################################

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

	# -- Alterando um registro --
		$upd = $crud -> update('user','user=?,email=?,cidade=? WHERE idUser=?', array('Ricardo', 'rp@hotmail.com', 'carapicuiba', 1));
	# -- END Alterando um registro --

	# -- Deletando um registro --
		$crud -> delete('user', 'WHERE idUser=?', array(2));
	# -- END Deletando um registro --

	# -- Instancia um objeto --
	$vle = new ValidaEmail;

	# -- entra com um e-mail --
	var_dump($vle -> setValidaEmail('adriana@hotmail.com.bre'));
*/
	# -- Instancia o objeto senha --
	$vPass = new ValidaSenha;

	var_dump($vPass -> setValidaSenha('aqwerri'));
?>