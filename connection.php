<?php /*?>this file contain connection information , we are using class con and two function construct and destruct. destruct close the connection at the end<?php */?>
<?php
require("defin.php");
class connection
{
	var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'test';
    var $myconn;

	function __construct()
	{
		$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		//$this->$conn = new mysqli("localhost",username,pass, db);
	//$this->conn=mysql_connect("localhost",username,pass) or die("error in connection");//usngcopy 	//    ofaman(db)
	
  	//mysql_select_db(db,$this->conn) or die("error in db");//we dont use ""semicolin to definbe   database
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
		} 
		else
		{
			 $this->myconn = $conn;
			//echo "Connection successfull";

		}
	}
	
	function __destruct()
	{
		mysqli_close($this->myconn);
	}

}

$tt = new connection();


?>
