<!doctype html>
<html>
<?php 
	session_start();
	//$id = $_SESSION["username"];
	//if($id == ""){
	//	header('Location: index.html');
	//}
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
					News
				</div>
			</a>
			<a href="schedule.php">
				<div id="schedule" class="link">
					Schedule
				</div>
			</a>
			<a href="forum.php">
				<div id="forum" class="link">
					Forum
				</div>
			</a>
			<a href="roster.php">
				<div id="roster" class="link">
					Roster
				</div>
			</a>
		</div>
		<div id="userInfo">
			<p><?php echo $_SESSION["username"]; ?></p>
		</div>
	</div>
	<div id="contentWrap">
		<div id="content">
				
		</div>
	</div>
</body>

</html>