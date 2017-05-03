<?php 
session_start();
$curpage = basename ($_SERVER['PHP_SELF']);
//Using this cause you can't use a class directly since the class is on all pages - instead I have used an if statement --> if the current page is e.g. p5 the echo (show) that the class active. The $_server is a super global variable which holds information about header, locations.
?>
	
   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo" src="img/logohvid.png" alt="logo" title="Til forsiden"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a href="om.php"<?php if($curpage == 'om.php') {echo 'class="active"';}?>>Om Tankevirk</a>
                    </li>
        
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Private <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="eksamensangst.php"<?php if($curpage == 'eksamensangst.php') {echo 'class="active"';}?>>Eksamensangst</a>
                            </li>
                            <!-- Upcoming dropdown system found here: http://bootsnipp.com/snippets/featured/multi-level-dropdown-menu-bs3-->
                             <li class="dropdown-submenu"><a tabindex="-1" href="#">Terapi</a>
                <ul class="dropdown-menu">
					<li><a tabindex="-1" href="samtaleterapi.php<?php if($curpage == 'samtaleterapi.php') {echo 'class="active"';}?>">Samtaleterapi</a></li>
                  <li class="dropdown-submenu">
                    <a href="psykoterapi.php"<?php if($curpage == 'psykoterapi.php') {echo 'class="active"';}?>>Psykoterapi</a>
                    <ul class="dropdown-menu">
                        <li><a href="nlp.php"<?php if($curpage == 'nlp.php') {echo 'class="active"';}?>>NLP</a></li>
					  </ul>
					  <li><a tabindex="-1" href="tre.php"<?php if($curpage == 'tre.php') {echo 'class="active"';}?>>Trauma Release Exercises</a></li>
					  </ul>
					</li></li>
                          <li>
                                <a href="hypnose.php"<?php if($curpage == 'hypnose.php') {echo 'class="active"';}?>>Hypnose</a>
                            </li>
                           <li class="dropdown-submenu"><a tabindex="-1" href="coaching.php">Coaching</a>
                <ul class="dropdown-menu">
					<li><a tabindex="-1" href="hvordan_coaching.php">Hvordan foregår coaching?</a></li></ul>
                            <li>
                                <a href="detsigerkunder.php">Det siger kunderne</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Virksomheder <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="coaching_virksomhed.php">Coaching i virksomheder</a>
                            </li>
                            <li>
                                <a href="kurser_kommunikation.php">Kurser i kommunikation</a>
                            </li>
                            <li>
                                <a href="erhvervskundesiger.php">Det siger erhverskunderne</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.php"<?php if($curpage == 'blog.php') {echo 'class="active"';}?>>Blog</a>
                    </li>
                    <?php
					if($_SESSION['id']) { 
					  echo '<li><a href="administration.php"';
						if($curpage == 'administration.php') {
						   echo ' class="active"';
				        } 
					  echo '>Administration</a></li>';
				 }?>
                    <li>
                        <a href="priser.php"<?php if($curpage == 'priser.php') {echo 'class="active"';}?>>Priser</a>
                    </li>
                    <li>
                        <a href="kontakt.php"<?php if($curpage == 'kontakt.php') {echo 'class="active"';}?>>Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>