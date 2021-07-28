<?php
session_start();
$firstname = "";
$surname = "";
$address = "";
$town = "";
$city = "";
$postcode = "";
$phone = "";
$email = "";
$service = "";
$amount = "";
$cardno = "";
$expirydate = "";
$securitycode = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $town = mysqli_real_escape_string($db, $_POST['town']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $service = mysqli_real_escape_string($db, $_POST['service']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $cardno = mysqli_real_escape_string($db, $_POST['cardno']);
  $expirydate = mysqli_real_escape_string($db, $_POST['expirydate']);
  $securitycode = mysqli_real_escape_string($db, $_POST['securitycode']);

  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($town)) { array_push($errors, "Town is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($postcode)) { array_push($errors, "Postcode is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($service)) { array_push($errors, "Service is required"); }
  if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($cardno)) { array_push($errors, "Card number is required"); }
  if (empty($expirydate)) { array_push($errors, "Expiry date is required"); }
  if (empty($securitycode)) { array_push($errors, "Security code is required"); }



  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,firstname,surname,address,town,city,postcode,phone,email,service,amount,cardno,expirydate,securitycode) 
  			  VALUES('lucy','$firstname','$surname' ,'$address','$town', 
'$city','$postcode','$phone', '$email','$service','$amount','$cardno'
,'$expirydate','$securitycode')";
  	mysqli_query($db, $query);
  
  	header('location: makepayment.html');
  }
}