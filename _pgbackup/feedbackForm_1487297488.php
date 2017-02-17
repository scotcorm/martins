<?php

if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
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
		mail("scotcorm@uw.edu", "Add to Email List", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
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
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 
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
                        <img src="indexImg/logoT.png" class="brand-img img-responsive pad0 pad-bottom0 img-circle">
                    </a>
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active nav-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Ministries</a>
                        </li>
                        <!--//dropdown-->                         
                        <li class="nav-item">
                            <a href="#">Pastors</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Feedback Form</a>
                        </li>
                        <li class="nav-item">
                            <a href="testForm.html">Test Form</a>
                        </li>
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
    <header id="header-1" class="soft-scroll header-1 bg-sunflower margin-bottom20">
        <h2 class="text-center pad20"><i><b>Feedback Form</b></i></h2>
        <!-- Navbar -->
        <!--// End Navbar -->
    </header>
    <div class="container-fluid text-center margin-top0 pad5"> 
        <div class="row content margin-top0 pad0">
            <div class="col-sm-2 sidenav">
                <ul class="social social-dark">
                    <li>
                        <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-dribbble"></i></a>
                    </li>
                </ul>
                <h5>Quicklinks: This Page</h5>
                <p class="black river-hover"><a href="#" class="black river-hover">Welcome</a></p>
                <p class="black river-hover"><a href="#" class="black river-hover">What to Expect</a></p>
                <p class="black river-hover"><a href="#" class="black river-hover">After the Service</a></p>
                <p class="black white-hover"><a href="#" class="black river-hover">Our Prayer</a></p>
                <p class="black river-hover"><a href="#" class="black river-hover">Core Concepts</a></p>
                <p class="black river-hover"><a href="#" class="black river-hover">Our Family</a></p>
                <p class="black river-hover"><a href="#" class="black river-hover">Link</a></p>
            </div>
            <div class="col-sm-8 pad-bottom0 margin-bottom0 text-left">
                <section id="content-2-9" class="content-2-9 bg-sunflower">
                    <div class="project-wrapper">
                        <div class="col-md-3 col-sm-6 project">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="indexImg/Rhema%20of%20Bliss.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-center">Work Project 1</h3>
                                    <p class="text-center">Mustache retro chillwave YOLO four loko photo booth.</p>
                                    <a href="#" class="btn btn-outline outline-light btn-xs btn-block text-center">See Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="indexImg/prayerRequest.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-center">Work Project 2</h3>
                                    <p class="text-center">Mustache retro chillwave YOLO four loko photo booth.</p>
                                    <a href="#" class="btn btn-outline outline-light btn-block text-center">See Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="indexImg/diggingDeep.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-center">Work Project 3</h3>
                                    <p class="text-center">Mustache retro chillwave YOLO four loko photo booth.</p>
                                    <a href="#" class="btn btn-outline outline-light btn-block text-center">See Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="indexImg/sundayBulletin.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-center">Work Project 4</h3>
                                    <p class="text-center">Mustache retro chillwave YOLO four loko photo booth.</p>
                                    <a href="#" class="btn btn-outline outline-light btn-block text-center">See Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project-wrapper -->
                </section>
                <h1 class="text-center"><i>Send Us a Message, or Join Our Email List!</i></h1>
                <div class="row">
                    <div class="offset-md-3 form col-md-12">
                        <h1>Contact Form</h1> 
                        <?php echo $result;?>
                        <p>Send a message via the form below</p>
                        <form method="post" role="form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?></textarea>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"> I am human
                                </label>
                            </div>
                            <div align="center">
                                <input type="submit" name="submit" class="btn btn-secondary btn-warning btn-lg active" value="send message" />
                            </div>
                        </form>
                    </div>
                </div>                 
                <div class="pad-bottom20 box col-md-11">
                    <section id="contact">
                        <div class="container">
</div>
                    </section>
                    <!-- /.form-container -->
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <h4>Resources</h4>
                <div class="well bg-offwhite">
                    <p>Join our Email List</p>
                </div>
                <div class="well bg-offwhite">
                    <p>USA Churches Listing</p>
                </div>
                <div class="well bg-offwhite">
                    <p>Church Blog!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block contact-3 bg-deepocean">
        <!-- /.container -->
    </div>
    <section class="content-block-nopad footer-wrap-1-2 bg-offwhite">
        <div class="container footer-1-2 pad-bottom0 pad5">
            <img src="indexImg/logoT.png" class="brand-img img-responsive img-circle">
        </div>
        <!-- /.container -->
    </section>
    <section class="content-block-nopad bg-deepocean footer-wrap-1-1">
        <div class="container footer-1-1 pad10">
            <h1 class="white text-center">Rhema Life Ministry</h1>
            <div class="row text-center">
                <div class="col-sm-5 col-sm-offset-0 pull-left footer">
                    <h3><strong>Location</strong></h3>
                    <p>2700 West Oakland Park Boulevard, Suite 26</p>
                    <p>Oakland Park, FL 33311</p>
                </div>
                <div class="col-sm-5 col-sm-offset-1 pull-right">
                    <h3><strong>Mailing Address</strong></h3>
                    <p>PO Box 101617</p>
                    <p>Fort Lauderdale, FL 33310</p>
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
    <body data-spy="scroll" data-target="nav" class="pad0 margin-top0">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
    </body>     
</html>
