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
     
 
<form role="form" method="post" action="contact.php">
  <fieldset>
 
    <label for="name"> Name  </label><br>
    <input type="text" id="name" name="name">
   <br><br>
   
    <label for="email"> Email </label><br>
    <input type="text" id="email" name="email"><br><br>
    
    <label for="comment"> Comment  </label><br>    
    <textarea rows="5" cols="50" name="message"></textarea><br><br>
    <button name="submit" type="submit" class="btn btn-default">Submit</button>
</form>
<!-- form -->
</div>
<!-- wrapper -->

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
$message = $_POST['message'];
$recipient = "stevengangano@yahoo.com";
$subject = "Message"; 

mail($recipient, $subject, $message, "From: " . $name );
echo "Your message has been sent";
 
 

?>



</html>