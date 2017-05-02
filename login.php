<?php
session_start();
include 'dbcon.php'; 

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

/* Password hashing variables*/
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

/*If the $hash is false = error message*/
if($hash == 0){
	header("Location: userpage.php?error=incorrect");
	exit();
} else  {
	$sql = "SELECT * FROM user WHERE username='$username' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);

	// if there is no match from the database, do 'else'
	if (!$row = mysqli_fetch_assoc($result)){
		echo "<script type='text/javascript'>alert('Your email or password is incorrect. Please try again or contact you adminstrator');</script>";
	} else {
		$_SESSION['id'] = $row['uid'];
		header("Location: administration.php");
	}
}
?>
		
	


