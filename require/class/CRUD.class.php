<?php
	
	// -- Herda da class ConDB.class.php --
	class CRUD extends ConDB{
		private $query;
		
		private function prepExec($prep, $exec){
			$this -> query = $this -> getConn() -> prepare($prep);
			$this -> query -> execute($exec);
		}

		public function insert($table, $prep, $exec){

			$this -> prepExec('INSERT INTO '.$table.' SET '.$prep.'', $exec);

			// -- Retorna o ultimo id gerado no banco --
			return $this -> getConn() -> lastInsertId();
		}
	}
?>