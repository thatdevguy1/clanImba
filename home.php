<!doctype html>
<html>
<?php 
	session_start();
	$id = $_SESSION["username"];
	if($id == ""){
		header('Location: index.html');
	}
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
			<a href="https://worldofwarcraft.com/en-us/news/22551243/bring-home-the-blizzcon-wow-classic-demo-with-the-virtual-ticket">
				<div class="article" id="blizzCon">
				</div>
			</a>
			<a href="https://worldofwarcraft.com/en-us/news/20307794/unleashed-monstrosities-a-look-at-world-bosses"></a>
				<div class="article" id="article2">
				</div>
			</a>
			<a href="https://worldofwarcraft.com/en-us/news/20307794/unleashed-monstrosities-a-look-at-world-bosses">
				<div class="article" id="article1">
				</div>
			</a>
			<!--
			<div class="article">
				article 3
			</div>
			<div class="article">
				article 4
			</div>-->
		</div>
	</div>
</body>

</html>