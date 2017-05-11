<?php
session_start();
require_once 'dbcon.php'; 

$title = $_POST['title'];
$date = $_POST['date'];
$text = $_POST['text'];



//image upload from MARC 2. semester:
$uploadOk = true;

if(!empty($_FILES['fileToUpload']['name'])) {

$target_dir = "img/"; //specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); //specifies the path of the file to be uploaded


$uploadOk = 1;
echo move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); //tmp_name contains the actual copy of your file content on the server



}else {
	$uploadOk = false;
}


				
				if($uploadOk == 1){ // with image
					$sql = "INSERT INTO blog (title, date, text, headimg) 
					VALUES ('$title', '$date', '$text', '$target_file')";
					echo $sql;
					
					$result = mysqli_query($conn, $sql);
					
					
					// found at: stackoverflow 
					echo '<script type="text/javascript">
					alert("Du har lavet et nyt blogindlæg se det under blog.");
					window.location = "administration.php"; //avoiding white/ blank page
					</script>';
				}else { // without image
					$sql = "INSERT INTO blog (title, date, text) 
					VALUES ('$title', '$date', '$text')";
					echo '<script type="text/javascript">
					alert("Du har lavet et nyt blogindlæg uden header billede se det under blog.");
					window.location = "administration.php";
					</script>';
					
					$result = mysqli_query($conn, $sql);
				}
				
				if($uploadOk == 1){
					echo '<script type="text/javascript">
					alert("Du har lavet et nyt blogindlæg se det under blog.");
					window.location = "administration.php";
					</script>';
				}else{
					echo '<script type="text/javascript">
					alert("Noget gik galt, prøv igen.");
					window.location = "blogform.php";
					</script>';
				}
				
			

?>