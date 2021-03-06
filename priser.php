<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Priser</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include_once("analyticstracking.php") ?>
 <?php 
	include 'navigation.php';
?>

    <!-- Page Content -->
    <div class="container space">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                                                 <?php
	//This code is taken from my last project on third semester (One Bowl)//
			require_once 'dbcon.php';
			$sql = "SELECT title, text FROM pages where pid=15";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) { //if it's not empty
								
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				echo "<h1 class='page-header'>".$row[title]."</h1>";
				echo "<p class='multic p'>" .$row[text]."</p>";
			}
			}
?>	
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <p></p>
            </div>

       
        </div>
        <!-- /.row -->
	</div>

        <?php 
	include 'footer.php';
?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
