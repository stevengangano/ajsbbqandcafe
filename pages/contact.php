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
 
<header class="navbar-margin">
  <nav class="nav-main">
    <div class="logo-img-handle"><span class="logo-img"> <img src="img/cover.png" class="logo-responsive"> </span> </div>
    <div class="logo-handle"><span class="logo-text"> AJ's BBQ and Cafe </span> </div>
    <div class="menu-handle">
      <span class="menu-text"><button id="cpBtn">
        <div></div>
        <div></div>
        <div></div>
      </button></span>
    </div>
    <ul>
      <img src="img/cover.png" class="logo-responsive logo">
      <li class="logo">AJ's BBQ and Cafe</li>
      <a href="#/home"><li>Home</li></a>
      <a href="#/menu"><li>Menu</li></a>
      <a href="#/about"><li>About</li></a>
      <a href="#/contact"><li>Contact</li></a>
    </ul>
  </nav>
</header>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

      <h1 class="contact-header"> Contact </h1>
      <hr class="hr">

     <h4 class="featured-events-news-text">
        <span class="contact-desc"> AJ's BBQ and Cafe is located off the Geneva exit on US-101 at 2275 San Jose Ave, San Francisco, CA 94112. Parking in at AJ's BBQ and Cafe designated lot is available. </span>

        <br>
        <br>
        <br>

         <span class="contact-desc"> Call us at <span> <span class="phone-email">(650) 754-6891</span>

        <br>
        <br>
        <br>
         
         <span class="contact-desc"> For private event inquiries, please contact </span> <span class="phone-email">ajsbbqandcafe@gmail.com.com</span>

        <br>
        <br>
        <br>
         
         <span class="contact-desc"> For inquiries, please contact: 

        <br>
         
        Kevin Guevarra | 650-644-4451 </span>
        <span class="phone-email">ajsbbqandcafe@gmail.com.com</span>  

        <br>
        <br>
        <br>
         
         <span class="contact-desc"> Comments or questions? </span>

        <br>
        <br>
        <br>

         <span class="contact-desc"> Contact us about your experience at </span> <span class="phone-email"> ajsbbqandcafe@gmail.com</span>   
    </h4>
  </div> <!-- end col -->

      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class = "panel-body">
          <img src="img/bbq.jpg" class="img-thumbnail about-photo">
        </div>
      </div>

    </div> <!-- end row -->

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="map-responsive">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6311.716152833115!2d-122.45514191580209!3d37.72300904228709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e820309f599%3A0x4a970cf74aa2d80c!2s2275+San+Jose+Avenue%2C+San+Francisco%2C+CA+94112!5e0!3m2!1sen!2sus!4v1476931816874" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>  
  </div>  

</div> <!-- end container-fluid -->

    <script src="js/jquery2.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


    <script src="js/script.js"></script>

    <!-- Toggles hamburger icon -->
    <script>
      $('.menu-handle').on('click', function(){
        $('nav ul').toggleClass('showing');
    });
    </script>

</body>
<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $city = $_POST['city'];
// $state = $_POST['state'];
$message = $_POST['message'];

$formcontent="From: $name \n Phone: \n $phone \n $ Email: $email \n Message: $message";

$recipient = 'stevengangano@yahoo.com'; //whatever email you want it to go to

$subject = "Message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/sent.php';
  header('Location: ' . $home_url);
 
 

?>

</html>