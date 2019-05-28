<?php
session_start();
//check valid username/password
$username = $_POST["username"];
$password = $_POST["password"];
$password = md5($password);

$dsn = "mysql:host=localhost;dbname=thatdevg_imba";
$dsnUsername = "thatdevg_dave";
$dsnPassword="InHqOF8X";
$pdo = new PDO($dsn, $dsnUsername, $dsnPassword); 

$stmt = $pdo->prepare("SELECT * FROM `users` 
WHERE `username`='$username' 
AND `password` = '$password'");
$stmt->execute();
if($row = $stmt->fetch()){
	//there is a record, they are a valid user in the database with a correct password!
	$_SESSION["username"]=$row["username"];
	$_SESSION["id"]="1";
	session_write_close();
	header('Location: home.php');
}else{
	//not found in database
	header('Location: http://www.clanimba.com/index.html');
}
?>

