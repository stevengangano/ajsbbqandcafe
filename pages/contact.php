<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Home page design for Lion Clouds Production">
    <title>Contact</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body style="min-height:100%">

   <nav class="navbar color">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar hamburger"></span>
        <span class="icon-bar hamburger"></span>
        <span class="icon-bar hamburger"></span>
      </button>
     <a href='#/' class='navbar-brand'> 
          <img alt='logo' class='img-responsive nav-logo' src='img/cover.png'> 
           <a href='#/' class='navbar-brand title'> 
            AJ's BBQ and Cafe
          </a>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="hamburger-font" href="#/">Home</a></li>
        <li><a class="hamburger-font" href="#/menu">Menu</a></li>
        <li><a class="hamburger-font" href="#/about">About Us</a></li>
        <li><a class="hamburger-font" href="#/contact">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="wrapper" style="padding-left:12px" >
      <h1><strong>Contact Page </strong> </h1>
      <hr>
     
 
<form role="form" method="post" action="pages/email.html">
  <fieldset>
 
    <label for="name"> Name  </label><br>
    <input type="text" id="name" name="name">
   <br><br>
   
    <label for="email"> Email </label><br>
    <input type="text" id="email" name="email"><br><br>
    
       <label for="city">City </label><br>
    <input type="text" id="city" name="city"><br><br>

       <label for="state"> State </label><br>
    <input type="text" id="state" name="state"><br><br>

<br>
    <label for="comment"> Comment  </label><br>    
    <textarea rows="5" cols="50" name="message"></textarea><br><br>
    <button name="submit" type="submit" class="btn btn-default">Submit</button>
</form>
<!-- form -->
</div>
<!-- wrapper -->

<br>

<div class="map-responsive">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6311.716152833115!2d-122.45514191580209!3d37.72300904228709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e820309f599%3A0x4a970cf74aa2d80c!2s2275+San+Jose+Avenue%2C+San+Francisco%2C+CA+94112!5e0!3m2!1sen!2sus!4v1476931816874" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div

    <footer>
      
    </footer>
    <!-- footer -->

    <script src="js/jquery2.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


    <script src="js/script.js"></script>

</body>
<?php 



$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$message = $_POST['message'];

$formcontent="From: $name \n Email: $email \n  City: $city \n State: $state \n Message: $message";

$recipient = 'stevengangano@yahoo.com'; //whatever email you want it to go to

$subject = "Message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/sent.php';
  header('Location: ' . $home_url);
 
 

?>



</html>