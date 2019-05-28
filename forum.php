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
			<a href="general.php">
				<div id="general" class="forumTopic">
					General
				</div>
			</a>
			<!--<a href="">
				<div id="officer" class="forumTopic">
					Officer
				</div>
			</a>
			<a href="">
				<div id="raid" class="forumTopic">
					Raid
				</div>
			</a>
			<a href="">
				<div id="addons" class="forumTopic">
					Add-Ons
				</div>
			</a>-->
		</div>
	</div>
</body>

</html>