<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class Update5Controller extends Controller
{  public function index(){
session_start();

$email    = "";
$password = "";
$confirmemail = "";
$confirmpassword = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['edit'])) {
 
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $confirmemail = mysqli_real_escape_string($db, $_POST['confirmemail']);

  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);


  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($confirmpassword)) { array_push($errors, "Confirm password is required"); }
  if (empty($confirmemail)) { array_push($errors, "Confirm email is required"); }
  
  if ($password != $confirmpassword) {
	array_push($errors, "The two passwords do not match");
  }
  if ($email != $confirmemail) {
	array_push($errors, "The two emails do not match");
  }



  $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  if (count($errors) == 0) {
  

  	$query = "UPDATE users SET 
    password = '$password', email = '$email' WHERE id = 2";
  	mysqli_query($db, $query);
  	
    return Redirect::to('studentsettings');
  }
}
}}