<?php
session_start();

$email    = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  
  if (empty($email)) { array_push($errors, "Email is required"); }
 


  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users ( email) 
  			  VALUES('$email')";
  	mysqli_query($db, $query);
  	
  	header('location: landing.html');
  }
}