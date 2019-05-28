<!doctype html>
<html>
<?php 
	session_start();
	$id = $_SESSION["username"];
	if($id == ""){
		header('Location: index.html');
	}
	
	$dsn = "mysql:host=localhost;dbname=thatdevg_imba";
	$dsnUsername = "thatdevg_admin";
	$dsnPassword="InHqOF8X";
	$pdo = new PDO($dsn, $dsnUsername, $dsnPassword); 

	$stmt = $pdo->prepare("SELECT * FROM topics
	WHERE UPPER(topic)='GENERAL'");
	$stmt->execute();
	if($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		
	}else{
		Echo "Error";
	};
?>
<head>
<script></script>
<meta charset="utf-8">
<title>Clan iMBA</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="header">
		<div id="logo">
		</div>
		<div id="linkWrap">	
			<a href="home.php">
				<div id="news" class="link">
					<p>News</p>
				</div>
			</a>
			<a href="schedule.php">
				<div id="schedule" class="link">
					<p>Schedule</p>
				</div>
			</a>
			<a href="forum.php">
				<div id="forum" class="link">
					<p>Forum</p>
				</div>
			</a>
			<a href="roster.php">
				<div id="roster" class="link">
					<p>Roster</p>
				</div>
			</a>
		</div>
		<div id="userInfo">
			<p>Welcome <?php echo $_SESSION["username"]; ?></p>
		</div>
	</div>
	<div id="contentWrap">
		<div id="content">
			<form action="newpost.php" name="topicForm" method="POST">
				<br/>
				<input type="hidden" name="topicName" value="<?php echo $_POST['topic']; ?>" />
				<span class="formTitle">Title</span>
				<input type="text" name="titleName" id="" class="formInput" />
				<br/>
				<br/>
				<span class="formTitle">Message</span>
				<textarea name="newPost" id="textAreaInput" class="formInput" rows="20" cols="100"></textarea>
				<br/>
				<br/>
				<input type="submit" id="submit" value="Post" />
			</form>
		</div>
	</div>
</body>
