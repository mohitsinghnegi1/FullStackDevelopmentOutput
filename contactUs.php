<?php


session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page4</title>
    <link rel="stylesheet" href="assets4/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets4/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets4/css/user.css">
    <link rel="stylesheet" href="assets4/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets4/css/Pretty-Registration-Form.css">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-lamp"></i><strong>NIRWANA EXOTICA</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="hotelnirvana.html">HOME </a></li>
                    <li class="active" role="presentation"><a href="ResponsiveTeamSection.html"><strong>ABOUT US</strong></a></li>
                    <li role="presentation"><a href="gallery.html">GALLERY </a></li>
                    <li role="presentation"><a href="hotelnirvana.html#book">BOOK MY STAY</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"></div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1>Downlod Our Free App</h1>
                    <p>Now You Can Book Our Hotel From Your Smarphone</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="#"><i class="fa fa-apple"></i> Available on the App Store</a><a class="btn btn-success btn-lg" role="button" href="#"><i class="fa fa-google"></i> Available on Google Play</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">People Love It!</h2>
        <blockquote>
            <p>Contact to us For Any Queries We Are 24xactive </p>
            <footer class="do white">Famous Nirwana Exocita</footer>
        </blockquote>
        <div class="media">
            <div class="media-left">
                <a></a>
            </div>
            <div class="media-body">
                <div class="container"><img src="assets4/img/cutomer.svg"><img src="assets4/img/msg.svg"><img src="assets4/img/phone.svg"></div>
                <div class="container">
                    <div class="col-md-4">
                        <h1>Customer Support </h1>
                        <p>Get in touch with customer support for assistance with your Achieve3000 implementation. </p>
                    </div>
                    <div class="col-md-4">
                        <h1>Sales Inquiry </h1>
                        <p>Reach out to our Sales team directly for immediate assistance with all sales-related&nbsp;inquiries. </p>
                    </div>
                    <div class="col-md-4">
                        <h1>Request A Demo</h1>
                        <p>Request a demonstration of Achieve3000's award-winning, differentiated instruction&nbsp;solutions. </p>
                    </div>
                </div>
                <div class="container middle">
                    <h1><i class="glyphicon glyphicon-user"></i>About Us</h1></div>
            </div>
        </div>
        <div class="row Contact Us">
            <div class="col-md-8 col-md-offset-2">



                <!--form start-->


                <form class="form-horizontal custom-form" id="own" method="post" action="#own">
                    <h1 class="contact_form">Contact Form</h1>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Name </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Email </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="pawssword-input-field">Phone no</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" min="999999999" max="9999999999" name="phoneno">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="repeat-pawssword-input-field">Subject </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="subject">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Message" name="message"></textarea>
                    <div class="form-group"></div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">I've read and accept the terms and conditions</label>
                    </div>
                    <input  class="btn btn-default submit-button" type="submit" name="submit" value="submit">
                    <hr>
                </form>


                    <!--form end-->

            </div>
        </div>
        <h1 class="head">Contact Information</h1>
        <div class="media">
            <div class="media-left">
                <a></a>
            </div>
            <div class="media-body">
                <p><i class="glyphicon glyphicon-envelope"></i>E<strong>mai-mohit</strong>l:mohit sin3232@gmail.com</p>
                <p><i class="fa fa-gamepad"></i><strong>Email -Sagar:</strong>sagar2323@gmail.com</p>
                <p><i class="fa fa-envelope-square"></i><strong>Email-surbesh:</strong>subesh3232@gmail.com </p>
                <p><i class="glyphicon glyphicon-phone-alt"></i><strong>Contect us </strong>:9779564550,8194997428</p>
                <p><i class="fa fa-facebook"></i><strong>Facebook us:</strong>https://www.facebook.com/profile.php?id=10000940914096<strong>8</strong></p>
            </div>
        </div>
        <hr>
        <div class="media">
            <div class="media-left">
                <a></a>
            </div>
            <div class="media-body"></div>
        </div>
    </section>
    <p class="leave it"> </p>
    <div class="container">
        <a href="ResponsiveTeamSection.html"><button class="btn btn-success btn-lg" type="button">Click To See Our Team</button></a>
    </div>
    <section class="features m">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Fantastic Features</h2>
                    <p><i class="fa fa-wifi"></i>Wifi Avaliable.<i class="fa fa-asterisk"></i> Air conditionor</p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-cloud"></i>
                            <p>Cloud-ready </p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-piggy-bank"></i>
                            <p>Saves You Money</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-fire"></i>
                            <p>Fire Proof</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Company<span>logo </span></a></h3>
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
    <script src="assets4/js/jquery.min.js"></script>
    <script src="assets4/bootstrap/js/bootstrap.min.js"></script>
   

<?php

   // echo "hello";
    if(isset($_POST["submit"]))
    {       
          
            $_SESSION["name"]=$_POST["name"];
            $_SESSION["email"]=$_POST["email"];
            $_SESSION["phoneno"]=$_POST["phoneno"];
            $_SESSION["subject"]=$_POST["subject"];
            $_SESSION["message"]=$_POST["message"];
         
            
           //echo "helo";
            $name=$_SESSION["name"];
            $email=$_SESSION["email"];
            $phoneno=$_SESSION["phoneno"];
            $subject=$_SESSION["subject"];
            $message=$_SESSION["message"];
           

           
           
            $con=mysqli_connect("localhost","root","","hotel");
            if($con)
            {
                echo "connection established sucessfully<br>";
                 $sql="insert into contactus(name,email,phoneno,subject,message) values('$name','$email','$phoneno','$subject','$message')";

        if($result=mysqli_query($con,$sql))
        {
            //echo "connection established";
            echo "<script>
                    swal({
  title: 'Thanks for Contacting us! ',
  text: 'We Will Reply soon',
  icon: 'success',
  button: 'okay',
});



            </script>";
        }
        else
           {//echo "connection failed";
            echo "<script>
                    swal({
  title: 'Unexpected Error Plse Try Again',
  text: 'Sorry For inconvinence',
  icon: 'warning',
  button: 'okay',
});



            </script>";
        
            }}
            else
            {echo "<script>
                    swal({
  title: 'Server busy Please Try Again later',
  text: 'Sorry For inconvinence',
  icon: 'warning',
  button: 'okay',
});



            </script>";
    
       }
    }
    
    ?>



</body>

</html>
