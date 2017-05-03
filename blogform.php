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
	  $( ".selector" ).datepicker({
  dateFormat: "yy-mm-dd"
});
	  // Getter
var dateFormat = $( ".selector" ).datepicker( "option", "dateFormat" );
 
// Setter
$( ".selector" ).datepicker( "option", "dateFormat", "yy-dd-mm" );
  });
	  
  </script>

</head>

<body>
						<form id='blogform' action='form.php' enctype="multipart/form-data" method='POST' >
						<input type='text' name='title' placeholder='Title'><br>
						<input id='datepicker' class="selector" type='date' name='date' placeholder='Date'><br>
						<textarea type='text' cols="85" rows="20" name="text"></textarea><br>
   						<p>Upload a header image:</p>
    					<input type='file' name='fileToUpload'>
						
							<br><br>
							
						<button type='submit'>Læg op</button>
							</form>
<script>
	
	</script>
</body>

</html>