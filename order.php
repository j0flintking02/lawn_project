<!doctype html>
<html>
    
<head>
    <title>LANDSCAPER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/testimonies.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
 queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page 
TUTORIALS POINT
Simply Easy Learning
 via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
 html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
 respond.min.js"></script>
 <![endif]-->
</head>

    <body>
  
<?php 
if(isset($_POST['submit']))
{
include("connection.php");	
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$loc=$_POST['addr'];

$input="INSERT INTO orders(order_ID,name,contact,email,address)VALUES('','$name','$email','$contact','$loc')";
if(mysqli_query($connect,$input)){
echo  "<p>Your Order is Being Processed</p>";

}else{
	echo "<p>Error ,Please Try Again</p>";
}

}
else{
	require("index.php");
}
?>
         <nav class="navbar navbar-inverse" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">LANDSCAPER</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li >
                                <a href="portfolio.php">portfolio</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Services <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="order.php">lawn maintiance</a></li>
                                    <li><a href="#">landscaping</a></li>
                                    <li><a href="#">gardening</a></li>
                                    <li><a href="#">pest control</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contactus.php">contact us</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class=""><a href="#" class="">Register</a></li>
                            <li id="nav-login-btn" class=""><a href="login.php" class="">Login</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>

         <footer>
                <div class="footer" id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3> Contact </h3>
                                <ul>
                                    <li> tel:+256752940475</li>
                                    <br>
                                    <li> email:landscaper@ug.com</li>
                                    <br>
                                    <li>
                                        <a href="#"> <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i> landscaper
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> @landscaper </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> landscaper
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3> Important Links </h3>
                                <ul>
                                    <li> <a href="#"> Admission </a> </li>
                                    <li> <a href="#"> Academic </a> </li>
                                    <li> <a href="#"> Career </a> </li>
                                    <li> <a href="#"> Administration </a> </li>
                                    <li> <a href="#"> Notice </a> </li>
                                    <li> <a href="#"> Tender </a> </li>
                                    <li> <a href="login.php"> Teacher Login </a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3> Location </h3>
                                <ul>
                                    <li> <a href="#"> Lorem Ipsum </a> </li>
                                    <li> <a href="#"> Lorem Ipsum </a> </li>
                                    <li> <a href="#"> Lorem Ipsum </a> </li>
                                    <li> <a href="#"> Lorem Ipsum </a> </li>
                                </ul>
                            </div>
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </div>
                <!--/.footer-->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="pull-left"> Copyright © 2017, landscaper. All rights reserved.</p>
                        <div class="pull-right">
                            <ul class="nav nav-pills payments">
                                <li><i class="fa fa-cc-visa"></i></li>
                                <li><i class="fa fa-cc-mastercard"></i></li>
                                <li><i class="fa fa-cc-amex"></i></li>
                                <li><i class="fa fa-cc-paypal"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.footer-bottom-->
            </footer>
        <script src="js/main.js"></script>
    </body>
</html>