<?php
session_start();
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

<body class="less">
       <div class="container">
        <?php 
		if(!isset($_SESSION["id"])){ // if not logged in:
		die('<p class="morespace">Please login to see the content. <br><br> To login go to: <a href="userpage.php">Userpage</a></p>');
		} else {
	?>
	<!-- Page Heading -->
        <a href="administration.php">Tilbage</a>
           <div class="row">
            <div class="col-lg-12">
        
                <h1 class="less">Opdater side
				</h1>
           <p>Her kan du opdatere din side.</p>
            </div>
                <div class="row">
            
            <!-- Details Column -->
            <div class="col-md-12">
                 <?php
			$pid = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
	//This code is taken from my last project on third semester (One Bowl)//
			
			require_once 'dbcon.php';
			$sql = 'SELECT `text` FROM pages WHERE `pid`=?';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('i', $pid);
			$stmt->execute();
			$stmt->bind_result($text);
			while ($stmt->fetch()){
				echo '<form class="blogform" action="update_pages_form.php" method="POST">';
				echo '<input class="blogbg" type="hidden" name="pid" value="'.$pid.'">';
				echo '<textarea class="blogbg" type="text" cols="85" rows="20" name="text">' . $text . '</textarea>';
				echo '<br>';
				echo '<button class="btn btn-default button" type="submit" value="Opdater siden">Opdater siden</button>';
				echo '</form>';
					}
				?>
      
       <p><b>Tips til gøre din side visuelt bedre:</b></p>
			<p>Ønsker du har bruge nogle af disse skal du blot kopiere dem op i tekstfeltet og erstatte "teksten".</p>
			<!-- Found out how to display html code on website here: http://stackoverflow.com/questions/2820453/display-html-code-in-html-->
			<p><b>Tyk tekst:</b> &lt;b&gt;Ønsket tekst her&lt;/b&gt;</p>
			<p><b>Kursiv tekst:</b> &lt;i&gt;Ønsket tekst her&lt;/i&gt;</p>
        </div>
        <!-- /.row -->
	
	</div>
			</div>
			</div>
			
	<?php
			};
		   ?>
		   
	</body>

</html>
