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
<script>
	var json;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
		if (this.readyState == 4 && this.status == 200) {
			json = JSON.parse(this.responseText);

			for(i = 0; i < json.members.length; i++){
				console.log(json.members[i].character);
			}
			for(var i = 0; i < json.members.length; i++){
				document.getElementById('content').innerHTML +="<a target='_blank' href='https://worldofwarcraft.com/en-us/character/tichondrius/"+json.members[i].character.name+"'><div class='member'><div class='thumbnail'><img src='http://render-us.worldofwarcraft.com/character/" + json.members[i].character.thumbnail + "' /></div><div class='name'>" +json.members[i].character.name+"</div><div class='level'>"+json.members[i].character.level+"</div><div class='class'>"+json.members[i].character.spec.name+"</div></div></a>";
			};
		}
	};
	xhttp.open("GET", "https://us.api.battle.net/wow/guild/tichondrius/iMBA?fields=members&locale=en_US&apikey=cs5wt827hmejxswdaeb3mdgd7vnbc5zt", true);
	xhttp.send();
</script>
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
			<div id="titleBar">
				<div id="nameTitle" class="titleInfo">
					<h4>Name</h4>
				</div>
				<div id="levelTitle" class="titleInfo">
					<h4>Level</h4>
				</div>
				<div id="classTitle" class="titleInfo">
					<h4>Class/Spec</h4>
				</div>
			</div>
		</div>
	</div>
</body>

</html>