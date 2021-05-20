<?php
	$db=mysqli_connect('localhost','root','','entekhabat');
	$sql="CREATE TABLE ara
	(name varchar(30),family varchar(30),cod int,ray varchar(30))";
	mysqli_query($db,$sql);
	mysqli_close($db);
?>