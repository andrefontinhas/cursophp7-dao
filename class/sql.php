<?php 
//classe que conversa com o Banco
class Sql extends PDO {

	private $conn;

	public function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	}

	private function setParams($statement, $parameters = array()) {

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}



	public function query($rawQuery, $params = array() ){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
		

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($results as &$result) {

			foreach ($result as $key => $row) {
				
				if (gettype($row) === "string"){

					$result[$key] = utf8_encode($row);
				}
			}
		}

		return $results;
	}



}


 ?>