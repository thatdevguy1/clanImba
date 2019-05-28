<!doctype html>
<html>
<?php 
	session_start();
	$id = $_SESSION["username"];
	if($id == ""){
		header('Location: index.html');
	}
	
		$topic = $_SESSION["topicName"];
		$title = $_SESSION["titleName"];	
		
	/*
	if(empty($_POST("topicName") || is_null($_POST("topicName")){
		$topic = $_SESSION["topicName"];
		$title = $_SESSION["titleName"];
	}else{
		$topic = $_POST["topicName"];
		$title = $_POST["titleName"];
	}*/
		$dsn = "mysql:host=localhost;dbname=thatdevg_imba";
		$dsnUsername = "thatdevg_admin";
		$dsnPassword="InHqOF8X";
		$pdo = new PDO($dsn, $dsnUsername, $dsnPassword); 

		$stmt = $pdo->prepare("SELECT * FROM topics
		WHERE topic='$topic' AND tname ='$title' ORDER BY topicId");
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
					<div class="abittotheleft"><?php echo $rows[0]['tname'] ?></div>
				</div>
				<!--<a href="">
					<form action="newtopic.php" name="newt" method="POST" id="newBtn">
						<input type="hidden" name="topic" value="general" />
						<input type="submit" value="New Post" id="postBtn" />
					</form>
				</a>-->
			</div>
			<br/>
			<br/>
			<?php for($x = 0; $x < sizeof($rows); $x++){
				echo" 
					<div id='' class='postSlot'>
						<div class='userinfo'>
							<div class='userPostInfo'> ".$rows[$x]['username']."
							</div>
							<div class='datePostInfo'> ".$rows[$x]['date']."
							</div>
						</div>
						<div class='post'> <pre>" .stripslashes($rows[$x]['post']). "</pre>
						</div>
					</div>";
			}
			?>
			<div id="msgBox">
				<form action="newpost.php" name="newPostForm" method="POST">
					<input type="hidden" name="topicName" value="<?php echo $topic ?>">
					<input type="hidden" name="titleName" value="<?php echo $title ?>">
					<textarea name="newPost" class="formTextArea"></textarea>
					<br/>
					<input type="submit" id="submitPost" value="Post" />
				</form>
			</div>
		</div>
	</div>
</body>
