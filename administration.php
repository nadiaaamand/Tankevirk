<div class="row">
<div class="col-lg-6">
<?php
	
			$uid = $_SESSION['id'];
			require_once 'dbcon.php';
			$sql = "SELECT name FROM user WHERE uid=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($vname);
			while ($stmt->fetch()){
				echo "Hej " . '<b>' . $vname . '</b>' . '!' ."<br><br>"; 	 
					}

?>
	</div>
</div>