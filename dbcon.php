<?php 
$conn = mysqli_connect("localhost", "root", "root", "tankevirk");

if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
	
	}

?>