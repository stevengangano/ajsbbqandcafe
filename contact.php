?php 



$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$message = $_POST['message'];

$formcontent="From: $name \n Email: $email \n  City: $city \n State: $state \n Message: $message";

$recipient = 'stevengangano@yahoo.com.com'; //whatever email you want it to go to

$subject = "Message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/sent.php';
  header('Location: ' . $home_url);
 
 

?>
