<?php 
session_start();
include 'dbcon.php';
//getting connection to the database while asking for specific data and where it needs to be put
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$enc_pwd = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (name, email, username, pwd) VALUES ('$name', '$email', '$username', '$enc_pwd')";

$result = mysqli_query($conn, $sql);

header("Location: userpage.php")

?>