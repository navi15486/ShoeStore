<?php include 'includes/header.php'; 
 include 'pdoconn.php'; ?>
<?php
//session_start();
$message = "";
/*** check if the users is already logged in ***/
if(isset( $_SESSION['user'] ))
{
    $message = 'Users is already logged in';
}
else {
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}

/*** check the username is the correct length ***/
/*
elseif (strlen( $_POST['phpro_username']) > 20 || strlen($_POST['phpro_username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
*/
/*** check the password is the correct length 
elseif (strlen( $_POST['phpro_password']) > 20 || strlen($_POST['phpro_password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
 check the username has only alpha numeric characters 
elseif (ctype_alnum($_POST['phpro_username']) != true)
{
    if there is no match 
    $message = "Username must be alpha numeric";
}
 check the password has only alpha numeric characters 
elseif (ctype_alnum($_POST['phpro_password']) != true)
{ 
        $message = "Password must be alpha numeric";
}
*/
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $phpro_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $con = new pdoconn();
    $dbh =  $con->pdo;
    /*** now we can encrypt the password ***/
    //$phpro_password = sha1( $phpro_password );
    
        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT username, password, salt FROM users 
                    WHERE username = :phpro_username");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
       // $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);
        
          //  $data = $stmt->single();
        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        //$user_id = $stmt->fetchColumn();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($row = $stmt->fetch()) {
        echo $row['username'] . "\n";
        echo $row['username'] . "\n";
        echo $row['salt'] . "\n";

        // echo $data['password'];
            $salt               = $row['salt'];//uniqid(mt_rand(), true);

            $phpro_password           = $phpro_password . $salt;
            $phpro_password           = password_hash('phpro_password',PASSWORD_DEFAULT);
            if(password_verify($row['password'], $row['password']))
            {

                echo "yees!";
            }
                
                /*** set the session user_id variable ***/
                $_SESSION['user'] = $row['username'];

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
                header("Location: index.html");
        }
        	
        /*** if we have no result then fail boat ***/
       /* if($user_id == false)
        {
                $message = 'Login Failed';
        }*/
        /*** if we do have a result, all is well ***/
        else
        {
           $message = "user not foud";
        }

        
     
}
}
echo $message;
?>
<?php include 'includes/footer.php';?>