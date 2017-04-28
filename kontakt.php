<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

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

 <?php 
	include 'navigation.php';
?>

    <!-- Page Content -->
    <div class="container space">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kontakt
                    <small>Tankevirk</small>
				</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Kontaktinformation</h3>
                <p>
                    Tankevirk V/ Hanne Aamand <br>
                        Dronningensvej 7, 1. TH <br>
						5800 Nyborg
                </p>
                <p><i class="fa fa-phone"></i> 
                    <a href="tel:27286099"> 27 28 60 99</a></p>
                <p><i class="fa fa-envelope-o"></i> 
                     <a href="mailto:tankevirk@tankevirk.dk"> Send mig en mail</a>
                </p>
        
            </div>
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2270.7135601761734!2d10.785577815785821!3d55.31062478043738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464d3eef1f2a1675%3A0x54b632727981331d!2sDronningensvej+7%2C+5800+Nyborg!5e0!3m2!1sen!2sdk!4v1493209683592" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h2>Skriv til mig</h2>
                <p>Send mig en besked hvis du vil booke en session hos mig eller blot ønsker at vide mere.</p>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Navn:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Skriv venligst dit navn.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefonnummer:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Skriv venligst dit telefonnummer.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Skriv venligst din email.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Besked</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Udfyld venligst feltet." maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
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
