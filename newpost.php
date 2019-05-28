<?php
session_start();

//check valid username/password
//implement duplicate newtopics to not overlap
$dsn = "mysql:host=localhost;dbname=thatdevg_imba";
$dsnUsername = "thatdevg_admin";
$dsnPassword="InHqOF8X";
$pdo = new PDO($dsn, $dsnUsername, $dsnPassword); 

$topic = $_POST["topicName"];
$username = $_SESSION["username"];
$date = date("Y-m-d");
$tname = $_POST["titleName"];
$post = $_POST["newPost"];

$stmt = $pdo->prepare("INSERT INTO topics(tname, username, topic, post) VALUES(:topicName, :username, :titleName, :newPost)");
$stmt2 = $pdo->prepare("UPDATE topics SET date = '$date' WHERE tname = '$tname'");
$stmt->bindParam(':topicName', $tname);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':titleName', $topic);
$stmt->bindParam(':newPost', $post);

$stmt->execute();
$stmt2->execute();

$_SESSION["topicName"] = $topic;
$_SESSION["titleName"] = $tname;

header('Location: post.php');

?>
