<?php 

/**
* 
*/
class db
{
	public $isConn;
	public $datab;
	
	public function __construct($user = "root",$password = "",$host = "localhost", $dbname ="itech")
	{
		$this->isConn = TRUE;
		try {

				$this->datab = new PDO("mysql:host=$host;dbname=$dbname",$user,$password,$option);
				$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function disconected(){
		$this->datab = NULL;
		$this->datab = FALSE;
	}

	public function getRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();

		}catch (PDOException $e){
				echo $e->getMessage();
		}


	}

	public function getRows($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();

		}catch (PDOException $e){
				echo $e->getMessage();
		}
	}

	public function insertRow($query, $params = []){
		
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return TRUE;

		}catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function updateRow($query, $params = []){
		$this->insertRow($query,$params);
	}

	public function deleteRow($query, $params = []){
		$this->insertRow($query,$params);
	}



}



?>