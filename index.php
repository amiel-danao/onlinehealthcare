<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Patient Record In Fabella</title>
		<meta charset = "utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
<style type="text/css">
	body{
		
		background-image: url(img2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
</style>

<style type="text/css">
		.navbar-default{
			background-color: mediumvioletred;
		}

		{

		}

	</style>

<body>
	<div class = "navbar navbar-default navtop">
		<img src = "" style = "float:left;" height = "55px" /><label class = "navbar-brand">Patient Record In Fabella</label>
	</div>
		<div id = "sidelogin">
			<form action = "login.php" enctype = "multipart/form-data" method = "POST" >
				<label class = "lbllogin">Login</label>
				<br />
				<hr />
				<br />
				<div class = "form-group">
					<label for = "username">Username</label>
					<input class = "form-control" type = "text" name = "username"  required = "required"/>
				</div>
				<br />
				<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password" required = "required" />
				</div>
				<br />
				<br />
				<div class = "form-group">
					<button class  = "btn btn-success form-control" type = "submit" name = "login" ><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
			</form>
		</div>	
		
	
</body>
<?php
	include("admin/script.php");
?>
</html>