<?php
	$conn = new mysqli("localhost", "cdpqjbjgnr", "jtRvWu7a7A", "cdpqjbjgnr") or die(mysqli_error());
	$conn->query("DELETE FROM `user` WHERE `user_id` = '$_GET[id]' && `lastname` = '$_GET[lastname]'") or die(mysqli_error());
	header("location:user.php");

?>