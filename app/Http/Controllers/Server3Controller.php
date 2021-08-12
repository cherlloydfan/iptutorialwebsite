<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class Server3Controller extends Controller
{  public function index(){
session_start();
$firstname = "";
$surname = "";
$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['signup'])) {
 
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);

  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirmpassword) {
	array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (firstname,surname,username, email, password,type) 
  			  VALUES('$firstname','$surname','$username', '$email', '$password','sponser')";
  	mysqli_query($db, $query);
  	
    return Redirect::to('login');   }
}}}