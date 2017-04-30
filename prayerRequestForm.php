<?php

if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['number']) {
		$error.="<br/>- Please enter your number";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} 
	
	else {
		mail("rev@rhemalifeministry.org", "Prayer Request", "Name: ".$_POST['name']."
		Email: ".$_POST['email']."
		Phone Number: ".$_POST['number']."
		Message: ".$_POST['message']);
		
		{
		$result='<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>';
		}
	}
}
?>
<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>Rhema Life</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="Rhema Life, Martins Donbruce Idahosa, Fort Lauderdale Church" />
        <meta name="description" content="Rhema Life website" />
        <link rel="shortcut icon" href="indexImg/logoT.png"> 
        <!-- Core CSS -->         
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <!-- Style Library -->         
        <link href="css/style-library-1.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/blocks.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
    </head>
    <body>
        <header id="header-1" class="soft-scroll header-1">
            <!-- Navbar -->
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned">
                <div class="container">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#">
                            <img src="indexImg/logoT.png" class="brand-img img-responsive pad0 pad-bottom0 img-circle" alt="logo">
                        </a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active nav-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="aboutUs.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="ministries.html">Ministries</a>
                            </li>
                            <li class="nav-item">
                                <a href="pastors.html">Pastors</a>
                            </li>
                            <li class="nav-item">
                                <a href="smallGroups.html">Groups</a>
                            </li>
                            <li class="nav-item">
                                <a href="findUs.html">Find Us</a>
                            </li>
                            <!--//dropdown-->                             
                        </ul>
                        <!--//nav-->
                    </div>
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->
        </header>         
        <section id="promo-3" class="content-block promo-3 bg-deepocean min-height-400px">
            <!-- /.container -->
        </section>
        <div class="panel bg-sunflower">
            <h2 class="text-center"><i><b class="text-center">Prayer Request</b></i></h2> 
        </div>
        <div class="container-fluid text-center margin-top0 pad5"> 
            <div class="row content margin-top0 pad0">
                <div class="col-sm-2 sidenav">
</div>
                <div class="col-sm-8 pad-bottom0 margin-bottom0 text-left">
                    <section id="content-2-9" class="content-2-9">
                        <div class="project-wrapper">
</div>
                        <div class="row">
                            <div class="offset-md-3 form col-md-12 btn-secondary contact">
                                <h1 class="text-center"><i>Send a Prayer Request to Us</i></h1> 
                                <?php echo $result;?>
                                <p class="contactp text-center">Send a message via the form below, and don't forget to check the box!</p>
                                <form method="post" role="form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="number" class="form-control" placeholder="Your number" value="<?php echo $_POST['number']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?></textarea>
                                    </div>
                                    <div class="checkbox text-center">
                                        <label>
                                            <input type="checkbox" name="check"> Please check the box.
                                        </label>
                                    </div>
                                    <div align="center">
                                        <input type="submit" name="submit" class="btn btn-secondary btn-warning btn-lg active" value="send prayer" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.project-wrapper -->
                    </section>                     
                    <div class="pad-bottom20 box col-md-11">
                        <section id="contact">
                            <div class="container">
</div>
                        </section>
                        <!-- /.form-container -->
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block contact-3">
            <!-- /.container -->
        </div>
        <section class="content-block-nopad footer-wrap-1-2 bg-offwhite">
            <div class="container footer-1-2 pad-bottom0 pad5">
                <img src="indexImg/logoT.png" class="brand-img img-responsive img-circle" alt="logo">
            </div>
            <!-- /.container -->
        </section>
        <section class="content-block-nopad bg-deepocean footer-wrap-1-1">
            <div class="container footer-1-1 pad10">
                <h1 class="white text-center">Rhema Life Ministry</h1>
                <div class="row text-center footer">
                    <div class="col-sm-5 col-sm-offset-0 pull-left footer">
                        <h3>Location</h3>
                        <p class="footer">2700 West Oakland Park Boulevard, Suite 26</p>
                        <p class="footer">Oakland Park, FL 33311</p>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 pull-right">
                        <h3>Mailing Address</h3>
                        <p class="footer">PO Box 101617</p>
                        <p class="footer">Fort Lauderdale, FL 33310</p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <div class="copyright-bar bg-black">
            <div class="container">
                <p class="pull-left small">© 2017- Rhema Life</p>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
    </body>
</html>
