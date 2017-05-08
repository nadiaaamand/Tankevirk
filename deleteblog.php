<?php
$bid = filter_input(INPUT_GET, 'bid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');


require_once 'dbcon.php';

$sql = "DELETE FROM blog WHERE bid =?";

$stmt = $conn->prepare($sql);
	$stmt->bind_param('i', $bid);
	$stmt->execute();
	while ($stmt->fetch()){}

if ($stmt->affected_rows >0 ){
	header( 'Location:administration.php');
}
else {
	echo 'Ingen ændring - blogindlæg findes stadig..';

}

?>