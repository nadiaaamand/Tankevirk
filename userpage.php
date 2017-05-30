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

<body class="less">
<?php include_once("analyticstracking.php") ?>
<div class="row">
<div class="col-lg-12 form">
		<h1>Velkommen</h1>
		<p>Login for at opdatere dine sider eller lave et nyt blogindslag.</p>
			<?php
			if (isset($_SESSION['id'])){
				echo '<form action="logout.php">
						<p>You are already logged in! <br> You can log out by pressing the log out button.</p>
						<button>LOG OUT</button>
						</form>';
			} else {
				echo '<form class="form" action="login.php" method="POST">
						<input class="bg" type="username" name="username" placeholder="Username"><br>
						<input class="bg" type="password" name="pwd" placeholder="Password"><br>
						<button class="btn btn-default submit" type="submit">LOGIN</button>
					</form>';
			}
			
	?>
		
		
		</div>
</div>
</body>

</html>
