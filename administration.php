 <?php 
	include 'navigation.php';
?>
<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>

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

    

    <!-- Page Content -->
    <div class="container space">
        <?php if(!isset($_SESSION["id"])){ // if not logged in:
		die('<p class="morespace">Please login to see the content. <br><br> To login go to: <a href="userpage.php">Userpage</a></p>');
		} else {
	?>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
        	<div class="col-md-6">
                <h1 class="page-header">Administration
				</h1>
           <?php
	//This code is taken from my last project on third semester (One Bowl)//
			$uid = $_SESSION["id"];
			require_once 'dbcon.php';
			$sql = 'SELECT name FROM user WHERE uid=?';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $uid);
			$stmt->execute();
			$stmt->bind_result($name);
			while ($stmt->fetch()){
				echo 'Hej ' . "<b>" . $name . "</b>" . "!" .'<br><br>'; 	 
				}

?>
<p>Her kan du opdatere dine sider, lave, opdatere og slette blogindlæg.</p>
            </div>
            
            <div class="col-md-6">
            <br>
            
<?php
			if (isset($_SESSION["id"])){
				echo '<form class="space morespace" id="loginform" action="logout.php">
						<p>Husk at logge ud når du er færdig!</p>
						<button class="btn btn-default">Log ud</button>
						</form>';
			} 
			
			?>
				</div>
        </div>
		</div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            
            <!-- Details Column -->
            <div class="col-md-12">
               <div class="col-md-6">
                

<h2>Oversigt over dine sider:</h2><br>	
        
          <?php
	//This code is taken from my last project on third semester (One Bowl)//
			$sql = 'SELECT pid, title FROM pages';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->bind_result($pid, $title);

			while($stmt->fetch()){
				echo '<li class="back">'.$title.' <a class="pdetails" href="updatepage.php?pid='.$pid.'">(Opdater)</a></li>';
				
				
			}
			
?>	
				  
				</div>
          <div class="col-md-6">
        
        <h2>Oversigt over dine blogindlæg:</h2><br>	
         <!-- Found a way to make button redirect elsewhere here: http://stackoverflow.com/questions/2906582/how-to-create-an-html-button-that-acts-like-a-link-->
          
          <form action="blogform.php">
          <button class="btn btn-default">Lav et nyt blogindlæg</button>
		</form>
        
         <?php
	//This code is taken from my last project on third semester (One Bowl)//
			
			$sql = 'SELECT bid, title FROM blog order by bid desc';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->bind_result($bid, $title);
								
			// output data of each row
			//Found the confirm pop up here: https://www.w3schools.com/jsref/met_win_confirm.asp
			while($stmt->fetch()){
			echo '<li>'.$title.' <a class="pdetails" href="updateblog.php?bid='.$bid.'">(Opdater)</a> 
			
			<form action="deleteblog.php" onsubmit="return confirm(\'Er du sikker på du vil slette dette blogindlæg?\');">
				<input type="hidden" name="bid" value="'.$bid.'" />
				<input class="slet" type="submit" name="Submit" value="Slet blogindlæg" />
			</form>
			
			</li>';
			}
			
?>	
			  
          </div>
           </div>
            </div>
       
        
        <!-- /.row -->
	</div>
<br>
        <?php 
	include 'footer.php';
};
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
