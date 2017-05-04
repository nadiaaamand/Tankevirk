<?php
$bid = filter_input(INPUT_POST, 'bid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter1');


require_once 'dbcon.php';

$sql = "DELETE FROM blog WHERE bid =?";

$stmt = $conn->prepare($sql);
	$stmt->bind_param('i', $bid);
	$stmt->execute();
	while ($stmt->fetch()){}

if ($stmt->affected_rows >0 ){
	echo 'Blogindlæg er slettet';
}
else {
	echo 'Ingen ændring - blogindlæg findes stadig..';

}

?>