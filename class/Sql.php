<?php 

class Sql extends PDO{

	private $conn;

	//o metodo construtor cria uma nova conecao
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=Agenda", "root","");

	}

	//monta o bind dos parametros
	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement,$key, $value);
		}	


	}

	//seta o bind chave valor
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}
	//monta o stetement
	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();

		return $stmt;
	}

	//faz uma pesquisa
	public function select($rawQuery, $params = array()):array{


		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}

}


 ?>