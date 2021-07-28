<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
$name = "";
$email = "";
$phone = "";
$ticketname    = "";
$message = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $ticketname = mysqli_real_escape_string($db, $_POST['ticketname']);
  $message = mysqli_real_escape_string($db, $_POST['message']);


  if (empty($name)) { array_push($errors, "Your name is required"); }
  if (empty($email)) { array_push($errors, "Email address is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($ticketname)) { array_push($errors, "Ticket name is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }
  


  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,firstname,email,phone,ticketname,message) 
  			  VALUES('lucy','$name','$email', '$phone', '$ticketname','$message')";
  	mysqli_query($db, $query);
  	
  	header('location: helpform.html');
  }
}