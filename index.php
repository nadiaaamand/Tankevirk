<!DOCTYPE html>
<html lang="en">

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
    <!-- Slider start from here: http://bootsnipp.com/snippets/featured/bootstrap-carousel-with-text -->
    <header>
    <div class="container">
	<div class="row">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="img/banner1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Kurser i<strong> kommunikation</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Styrk dialogen i dit firma sammen med dine medarbejdere</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="kurser_kommunikation.php">Læs mere</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="img/banner2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Bliv klar til arbejdsmarkedet</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Styrk dig selv og dine kompetencer</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="kommune_kursus.php">Læs mere</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="img/banner3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Priser</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Se priserne for terapi og coaching</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="priser.php">Læs mere</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
	<!-- /carousel -->
	</div>
</div>
</header>
   <!-- Slider end -->
    
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row cta">
            <div class="col-lg-12">
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <a><img src="img/cta_terapi.jpg" alt="terapi session"></a>
                       <div class="panel-heading">
                        <h4>Terapi</h4>
                    </div>
                    
                    <div class="panel-body">
                        <p>Føler du dig mere stresset end normalt, har du problemer med din selvtillig/selværd
                        eller føler du sorg? Så kan terapi være noget for dig. Jeg udbyder forskellige former for terapi alt efter hvilke behov du som person har.</p>
                        <a href="samtaleterapi.php" class="btn btn-default">Læs mere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                   <a><img src="img/cta_hypnose.jpg" alt="Hypnose session"></a>
                    <div class="panel-heading">
                        <h4>Hypnose</h4>
                    </div>
                    <div class="panel-body">
                        <p>Ønsker du at stoppe med at ryge eller har du problemermed at slippe bestemte vaner som i længden sætter en stopper for ting du gerne vil? Så kan hypnoseterapi være en god mulighed at overveje. </p>
                        <a href="hypnose.php" class="btn btn-default">Læs mere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                   <a><img src="img/cta_coaching_virksomheder.jpg" alt="Coaching for en virksomhed"></a>
                    <div class="panel-heading">
                        <h4>Coaching i virksomheder</h4>
                    </div>
                    <div class="panel-body">
                        <p>Uanset størrelsen af et firma er medarbejdere noget af det vigtigste. Ved hjælp af coaching kan enkelte medarbejdere såvel som teams blive gjort stærkere, gladere og ikke mindst mere produktive. </p>
                        <a href="coaching_virksomhed.php" class="btn btn-default">Læs mere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tag styringen i dit privatliv og dit arbejdsliv</h1>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, ad sale graeco torquatos eum, est ad epicuri sensibus forensibus. His dico nusquam ne. Sea aeque omnesque ex, ne eum meliore delectus, qui melius feugiat indoctum cu. Pertinax complectitur an usu, mea an euripidis intellegam comprehensam.<br><br>

Per ne fierent facilisis. Omnium apeirian cu vix, detracto evertitur at pri. Ne erat dissentiet est, ei vel eros detracto. Vidit labitur quaestio te eum. Nec cu eruditi deseruisse disputationi, te vix errem docendi salutandi. In lorem concludaturque pro, facilisi expetenda omittantur quo in. Cum verear mandamus efficiendi ea, mei zril reformidans et, mel no putent aperiri persequeris.

</p>
            </div>
            <div class="col-md-6">
                <p>Unum propriae posidonium ei his. Suas soluta labore sit ne, imperdiet mnesarchum ei eam, mei ei gubergren deseruisse. Nam omnis semper vituperatoribus no, mel ad admodum lobortis. At per posse nulla deseruisse. Ea qui nemore mollis fabulas, ad illud omittam vis.<br><br>

Vix cu vidit autem intellegat. Essent gloriatur sadipscing id duo, ad quas mentitum vituperatoribus pro. In pro viderer fuisset, ius sonet cetero ad. Et omnes sanctus adipisci his, ei mea purto munere maluisset, te ius fugit conclusionemque. Eu nec molestiae delicatissimi. Has dolores probatus id, mel cu solum intellegat.

.</p>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
