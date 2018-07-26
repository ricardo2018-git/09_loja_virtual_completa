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
		}
	# -- END Herda da class ConDB.class.php --
?>