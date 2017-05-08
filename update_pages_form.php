<?php

//$text = filter_input(INPUT_POST, '$text', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter');
//$pid = filter_input(INPUT_POST, '$pid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter2');
$text = $_POST['text'];
$pid = $_POST['pid'];

require_once 'dbcon.php';

$sql = "UPDATE `pages` SET `text`=? WHERE `pid`=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $text, $pid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo "<script type='text/javascript'>
					alert('Siden er hermed opdateret');
					window.location = 'administration.php'; //avoiding white/ blank page
					</script>";
}
else {
	echo 'No change';

}
//if ($stmt->affected_rows >0 ){
	
	//header("Location: index.php");
//}
//else {
	
	//header("Location: administration.php");
//}
?>