<?php
$text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter');
$bid = filter_input(INPUT_POST, 'bid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter2');

require_once 'dbcon.php';

$sql = 'UPDATE `blog` SET `text`=? WHERE `bid`=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $text, $bid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo '<script type="text/javascript">
			alert("Blogindlæg er opdateret");
			window.location = "administration.php"; //avoiding white/ blank page
			</script>';
}
else {
	echo '<script type="text/javascript">
			alert("Blogindlæg er ikke blevet opdateret - Prøv igen");
			window.location = "administration.php"; //avoiding white/ blank page
			</script>';

}
?>