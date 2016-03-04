<?php
 include 'connection.php';
 include 'pdoconn.php';
//if button is clicked then succeed
 		
function validation() {
		if (!$_POST['firstname'] || !$_POST['lastname'] || !$_POST['email']  || !$_POST['username'] || !$_POST['password'] || !$_POST['confirmPassword']) {
			echo "You have not entered all the required details.<br />Please go back and try again.";
			return false;
		}
		if ($_POST['password'] !== $_POST['confirmPassword']) {
			echo "Confirm password does not match with password";
			return false;
		}
		return true;
		
} 
		if (validation()) {
			$connection = new pdoconn();
			//$con 				= new connection();
			$firstname 			= 	trim($_POST['firstname']);
			$lastname  			= 	trim($_POST['lastname']);
			$email 				= 	trim($_POST['email']);
			$username			= 	trim($_POST['username']);
			$password 			= 	trim($_POST['password']);
			$confirmPassword 	=   trim($_POST['confirmPassword']);
			$name 				= 	$firstname . $lastname;			
			//create secure password
			$salt 	  			= uniqid(mt_rand(), true);
			$password 			= $password . $salt;
			$password 			= password_hash('password',PASSWORD_DEFAULT);
			$joindate	 		= date('Y-m-d H:i:s');
			$group				= 1;
			 
			$data = array("$username", "$password", "$salt" , "$name" , "$joindate" , "$group");
			$STH = $connection->pdo->prepare("INSERT INTO users (username, password, salt , name , joined, groupnumber) VALUES (?, ?, ?,?,?,?)");
			$STH->execute($data);
			 
			echo "1 record added";
			//$con->myconn->close();
			//mysqli_close($con->myconn);
			echo "Successfully Registered. Please sign in to continue";
			
		}
		else {
			
		} 

?>