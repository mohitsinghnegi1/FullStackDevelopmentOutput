<!DOCTYPE html>

<?php
session_start();
?>
<?php
    
    if(isset($_POST["submit"]))
    {       


            $_SESSION["checkin"]=$_POST["checkin"];
            
            $_SESSION["checkout"]=$_POST["checkout"];
            $_SESSION["adults"]=$_POST["adults"];
            $_SESSION["rooms"]=$_POST["rooms"];
        }
        ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/material-icons.css">
    <link rel="stylesheet" href="assets2/css/styles.css">
    <link rel="stylesheet" href="assets2/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets2/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets2/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets2/css/Bootstrap-Payment-Form.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
            

<body>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Nirwana<span>Exotica<i class="glyphicon glyphicon-lamp"></i> </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="hotelnirvana.html"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                    <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i> Search For Hotels</a></li>
                    <li role="presentation">
                        <a href="gallery.html"> <i class="Gallery.html"></i> Gallery</a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="custom-navbar"> <i class="glyphicon glyphicon-star"></i> Reviews<span class="badge">new</span></a>
                    </li>
                    <li role="presentation"><a href="ResponsiveTeamSection.html"><i class="fa fa-pied-piper-alt"></i> About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets2/img/pic12.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Settings </a></li>
                            <li role="presentation"><a href="payment.php">Payments </a></li>
                            <li role="presentation" class="active"><a href="hotelnirvana.html">Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-left text-info">UNIFIED PAYMENTS INTERFACE (UPI) </h1>
        <p></p>
    </div>
    <div class="media">
        <div class="media-left">
            <a><img src="assets2/img/upi.png"></a>
        </div>
        <div class="media-body">
            <h2>UNIFIED PAYMENTS INTERFACE (UPI) </h2>
            <p class="grey">Unified Payments Interface (UPI) is a system that powers multiple bank accounts into a single mobile application (of any participating bank), merging several banking features, seamless fund routing &amp; merchant payments into one hood. It
                also caters to the “Peer to Peer” collect request which can be scheduled and paid as per requirement and convenience. Each Bank provides its own UPI App for Android, Windows and iOS mobile platform(s). </p>
            <h2>GUIDELINES FOR THE ELECTRONIC PAYMENT &amp; RECEIPTS FOR CASHLESS SERVICES </h2>
            <p class="p2">Ministry of Electronics and Information Technology (MeitY), Government of India envisages Paperless, Cashless and Faceless services across the country, especially in rural and remote parts of India. MeitY further envisages common e-Governance
                infrastructure that will offer end-to-end transactional experience for a citizen, businesses as well as internal government functions, which includes accessing various services and making payments and receipts through electronic modes.
                The Apex Committee on Digital India has recommended a targeted and time bound approach to implement digital payments for citizens across all the e-Services of Government Ministries and Departments. Against this backdrop, MeitY has notified
                Guideline for Electronic Payments and Receipts (EPR), intended for Central Public Sector Undertakings, State Governments, Govt. of India Autonomous Bodies, and Municipalities for expeditiously implementing appropriate mechanism to enable
                electronic payments and receipts. The objective of this guideline is to provide guidelines for Departments to: </p>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
		
		
		
		
		
            <form class="form-horizontal custom-form" id="cd" method="post" action="#cd">
                <h1>PAYMENT DETAILS <img class="img-responsive panel-title-image" src="assets2/img/accepted_cards.png"></h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="glyphicon glyphicon-user"></i>
                        <label class="control-label" for="name-input-field">Name </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="glyphicon glyphicon-envelope"></i>
                        <label class="control-label" for="email-input-field">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" name="email">
						
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="fa fa-key"></i>
                        <label class="control-label" for="pawssword-input-field">Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="password">
						
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="glyphicon glyphicon-credit-card"></i>
                        <label class="control-label" for="repeat-pawssword-input-field">Card No</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="cardno"  placeholder="Valid Card no">
						
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="glyphicon glyphicon-time"></i>
                        <label class="control-label" for="repeat-pawssword-input-field">Expire Date</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="date" name="expire" placeholder="MM/YY">
						
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="glyphicon glyphicon-edit"></i>
                        <label class="control-label" for="repeat-pawssword-input-field">CV Code</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="cvcode" placeholder="CV Code">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><i class="material-icons">call_to_action</i>
                        <label class="control-label" for="repeat-pawssword-input-field">Coupan Code</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="cpcode" placeholder="coupan_code">
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I've read and accept the terms and conditions</label>
                </div>
                <input type="submit" class="btn btn-default submit-button" value="submit" name="submit1" >
            </form>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#"><i class="glyphicon glyphicon-lamp"></i>Nirwana Exocita</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
	
	
	<?php

	
	if(isset($_POST["submit1"]))
    {       
          
			$_SESSION["name"]=$_POST["name"];
            $_SESSION["email"]=$_POST["email"];
            $_SESSION["password"]=$_POST["password"];
            $_SESSION["cardno"]=$_POST["cardno"];
			$_SESSION["expire"]=$_POST["expire"];
         
            $_SESSION["cvcode"]=$_POST["cvcode"];
           
			//echo $_SESSION["checkin"];
			//echo $_SESSION["expire"];

           // echo  "<br> epie date".$_SESSION["checkout"];

            //  echo gettype($_SESSION["hotel"]);
            //  echo gettype($_POST["hotel"]);

            //  echo intval($_POST["rooms"]);
            $name=$_SESSION["name"];
            $email=$_SESSION["email"];
            $checkin=$_SESSION["checkin"];
            $checkout=$_SESSION["checkout"];
            $rooms=$_SESSION["rooms"];
            $adults=$_SESSION["adults"];
           
            //echo $name;
           // echo $email."<br>";
           // echo $rooms.gettype($rooms);







            $con=mysqli_connect("localhost","root","","hotel");
            if($con)
            {
                //echo "connection established sucessfully<br>";
                 $sql="insert into payment(name,email,checkin,checkout,rooms,adults) values('$name','$email','$checkin','$checkout','$rooms',$adults)";

        if($result=mysqli_query($con,$sql))
        {
            echo "<script>
                    swal({
  title: 'Good job! Rooms Booked',
  text: 'Welcome To Our Hotel!',
  icon: 'success',
  button: 'okay',
});



            </script>";
        }
        else
            echo "<script>
                    swal({
  title: 'Unexpected Error Plse Try Again',
  text: 'Sorry For inconvinence',
  icon: 'warning',
  button: 'okay',
});



            </script>";
        
            }
            else
             echo "<script>
                    swal({
  title: 'Server busy Please Try Again later',
  text: 'Sorry For inconvinence',
  icon: 'warning',
  button: 'okay',
});</script>";
    
       
    }






	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
</body>

</html>