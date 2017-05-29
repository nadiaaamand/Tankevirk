<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
<article>
<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "Hey!";
		echo '</h1>';
		} else {
			echo '<h1 class="form">';
			echo "Bliv en del af teamet!";
			echo '</h1>';
		}
?>
<?php
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "Du er allerede logget ind!";
		echo '</h1>';
		} else {
			echo //Sign up form, needing full name and username + password. Then by using the action (where it directs to another page) and POST method it directs the info to the database
			'<form class="form" action="adduser.php" method="POST">
				<input class="bg" type="text" name="name" placeholder="Name" required><br>
				<input class="bg" type="email" name="email" placeholder="Email" required><br>
				<input class="bg" type="text" name="username" placeholder="Username" required><br>
				<input class="bg" type="password" name="pwd" placeholder="Password" required><br>
				<button id="submit" class="btn btn-default submit" type="submit">Sign Up</button>
		</form>';
		}
?>
</article>
 
</body>
</html>