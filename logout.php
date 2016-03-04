 <?php
 include 'includes/header.php'; 
//unset($_SESSION["user"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
session_unset();
header("Location: index.html");
?>