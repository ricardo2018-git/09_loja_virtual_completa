<?php
	
	# -- Herda da class ConDB.class.php --
		class CRUD extends ConDB{

			private $query;
			
			private function prepExec($prep, $exec){
				$this -> query = $this -> getConn() -> prepare($prep);
				$this -> query -> execute($exec);
			}

			# -- Insere dados no banco --
				public function insert($table, $prep, $exec){

					$this -> prepExec('INSERT INTO '.$table.' SET '.$prep.'', $exec);

					# -- Retorna o ultimo id gerado no banco --
					return $this -> getConn() -> lastInsertId();
				}
			# -- END Insere dados no banco --

			# -- Faz uma busca no banco --
				public function select($fields, $table, $prep, $exec){

					$this -> prepExec('SELECT '.$fields.' FROM '.$table.' '.$prep.' ', $exec);
					return $this -> query;
				}
			# -- END Faz uma busca no banco --

			# -- Altera um registro no banco --
				public function update($table, $prep, $exec){

					$this -> prepExec('UPDATE '.$table.' SET '.$prep.'', $exec);
					return $this -> query;
				}
			# -- END Altera um registro no banco --

			# -- Deletando um registro --
				public function delete($table, $prep, $exec){
					$this -> prepExec('DELETE FROM '.$table.' '.$prep.'', $exec);
				}
			# -- END Deletando um registro --
		}
	# -- END Herda da class ConDB.class.php --
?>