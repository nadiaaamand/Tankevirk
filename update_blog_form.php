<?php
$text = $_POST['text'];
$pid = $_POST['bid'];

require_once 'dbcon.php';

$sql = "UPDATE `blog` SET `text`=? WHERE `bid`=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $text, $pid);
$stmt->execute();

if ($stmt->affected_rows >0 ){
	echo 'Information Updated';
}
else {
	echo 'No change';

}
?>