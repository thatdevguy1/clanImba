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
	WHERE UPPER(topic)='GENERAL' GROUP BY tname");
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
		<br/>
			<div id="" class="forumTopicC">
				<div id="topicTitle">
					<div class="abittotheleft">General</div>
				</div>
				<a href="">
					<form action="newtopic.php" name="newt" method="POST" id="newBtn">
						<input type="hidden" name="topic" value="general" />
						<input type="submit" value="New Post" id="postBtn" />
					</form>
				</a>
			</div>
			<br/>
			<br/>
			<?php for($x = 0; $x < sizeof($rows); $x++){
				echo"<div id='' class='forumTopic'>".$rows[$x]['tname']."
						<form action='posts.php' name='titleForm' method='post'>
						<div id='byUser'> ".$rows[$x]['username']."
						</div>
						<div id='datePosted'> ".$rows[$x]['date']."
						</div>
						<input type='hidden' name='topicName' value='".$rows[$x]['tname']."'>
						<input type='hidden' name='titleName' value='general'>
						<input type='submit' id='sub'> 
						</form>
					</div>
					";
			}
			?>
		</div>
	</div>
</body>
