<?php
//print_r(PDO::getAvailableDrivers());
class pdoconn {
	var $host = '127.0.0.1';
	var $dbname = 'test';
	var $user = 'root';
	var $pass = '';
	var $myconn;
 	var $pdo;
	public function __construct() {
		try {
		$this->pdo = new PDO("mysql:host=localhost;dbname=test","root", "");
		$this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		//$DBH->prepare('select * from users');
		//$this->myconn = $DBH;
		# Typed DELECT instead of SELECT!
		} catch(PDOException $e)
		{
		echo $e->getMessage();
		}
	}


}
/*$connection = new pdoconn();
$STH = $connection->pdo->query('select * from users');
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
while($row = $STH->fetch()) {
echo $row['id'] . "\n";
echo $row['username'] . "\n";
echo $row['hash'] . "\n";

}
//echo $statement->execute();
$STH = null; // doing this is mandatory for connection to get closed
$connection = null;*/
	?>