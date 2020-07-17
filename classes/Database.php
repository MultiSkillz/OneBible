<?php 

class Database
{
	private $con;
	private $pdo;
	private $db_server = '127.0.0.1';
	private $db_driver = 'mysql';
	private $db_name = 'onebible';
	private $db_user = 'root';
	private $db_pass = '';
	//qe6KQbqkq7X8Cq@
	//3452999_onebible

	public function connect()
	{
		try{
			$this->con = new PDO($this->db_driver . ':host=' . $this->db_server . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			if ($this->con) {
				return $this->con;
			}else{echo 'Error in connection.';}

		}catch(PDOException $e){
			echo $this->con . '<br/>' . $e->getMessage();
		}
	}


}