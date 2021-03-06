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

    <title>Lav et blogindlæg</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<!--Found the datepicker here: http://wpandsuch.com/add-a-calendar-date-picker-to-a-form-with-jquery/-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
	  //Found the way to change dateformat here: http://api.jqueryui.com/datepicker/#option-dateFormat
	  $( ".selector" ).datepicker({
  dateFormat: "yy-mm-dd"
});
	  // Getter
var dateFormat = $( ".selector" ).datepicker( "option", "dateFormat" );
// Setter
$( ".selector" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  });
	  
  </script>

</head>

<body class="less">
		<div class="container">
						   <?php if(!isset($_SESSION['id'])){ // if not logged in:
		die('<p class="morespace">Please login to see the content. <br><br> To login go to: <a href="userpage.php">Userpage</a></p>');
		} else {
	?>
		  <!-- Page Heading -->
		<a href="administration.php">Tilbage</a>
           	<div class="row">
            <div class="col-lg-12 blogform">
            <h1 class="less">Nyt blogindlæg</h1>
           <p>Lav dit blogindlæg her - husk der både skal være en titel og tilhørende tekst.</p>
           
			<form action='form.php' enctype="multipart/form-data" method='POST' >
			<input class="blogbg" type='text' name='title' placeholder='Title' required><br>
			<input id='datepicker' class="selector blogbg" type='date' name='date' placeholder='Dato'><br>
			<textarea class="blogbg" type='text' cols="85" rows="20" name="text" required></textarea><br>
   			<p>Upload et header billede:</p>
    		<input type='file' name='fileToUpload'>
						
							<br>
							
			<button class="btn btn-default" type='submit'>Læg op</button>
			</form>
			<p><b>Tips til gøre din blog visuelt bedre:</b></p>
			<p>Ønsker du har bruge nogle af disse skal du blot kopiere dem op i tekstfeltet og erstatte "teksten".</p>
			<!-- Found out how to display html code on website here: http://stackoverflow.com/questions/2820453/display-html-code-in-html-->
			<p><b>Tyk tekst:</b> &lt;b&gt;Ønsket tekst her&lt;/b&gt;</p>
			<p><b>Kursiv tekst:</b> &lt;i&gt;Ønsket tekst her&lt;/i&gt;</p>
				
				</div>
			</div>
	</div>
	<?php
};?>
</body>

</html>