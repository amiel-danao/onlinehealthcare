<!DOCTYPE html>
<?php
	require_once'logincheck.php';
	$conn = new mysqli("localhost", "cdpqjbjgnr", "jtRvWu7a7A", "cdpqjbjgnr") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
?>
<html lang = "en">
	<head>	
		<title>Patient Record</title>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
	<body>
		<style type="text/css">
		.navbar-fixed-top{
			background-color: mediumvioletred;
		}

	</style>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "" style = "float:left;" height = "55px" /><label class = "navbar-brand">Patient Record In Fabella</label>
		<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php echo $fetch['firstname']." ".$fetch['lastname'] ?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<br />
	<br />
	<br />
	<div class = "well">
		<div class = "panel panel-warning">
			<div class = "panel-heading">
				<center><label>SPUTUM</label></center>
			</div>
		</div>
		<a style = "float:right; margin-top:-4px;" href = "view_sputum_record.php?itr_no=<?php echo $_GET['itr_no']?>" class = "btn btn-info"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a> 
		<br />
		<br />
		<div class = "panel panel-primary">
			<?php
				$q1 = $conn->query("SELECT * FROM `itr` WHERE `itr_no` = '$_GET[itr_no]'") or die(mysqli_error());
				$f1 = $q1->fetch_array();
			?>
			<div class = "panel-heading">
				<h4>Sputum Record / <?php echo $f1['firstname']." ".$f1['lastname']?></h4>
			</div>
			<div class = "panel-body">
				<table id = "table" cellspacing = "0" class = "display">
			<thead>
				<tr>
					<th>Date of Examination</th>
					<th>Examined By</th>
					<th>Disease Classification</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$conn = new mysqli("localhost", "cdpqjbjgnr", "jtRvWu7a7A", "cdpqjbjgnr") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `sputum` WHERE `itr_no` = '$_GET[itr_no]' ORDER BY `date_of_examination` DESC") or die(mysqli_error());
				while($f = $q->fetch_array()){
			?>
				<tr>
					<td><?php echo date("m/d/Y", strtotime($f['date_of_examination']))?></td>
					<td><?php echo $f['examined_by']?></td>
					<td><?php echo $f['disease_classification']?></td>
					<td><center><a class = "btn btn-info" href = "sputum_form.php?itr_no=<?php echo $f['itr_no']?>&sputum_id=<?php echo $f['sputum_id']?>"><span class = "glyphicon glyphicon-search"></span> View Detail</a><center></td>
				</tr>
			<?php
				}
			?>	
			</tbody>
		</table>
			</div>
		</div>
			
		<br />
	</div>
	<div id = "footer">
		
	</div>
	</body>
		<?php require "script3.php" ?>
		<script type = "text/javascript">
			$(document).ready(function(){
				$("#table").DataTable({
					"paging": false,
					"info": false,
					"order": "DESC"
				});
			});
		</script>
</html>