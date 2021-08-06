<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class Update4Controller extends Controller
{  public function index(){
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();
$firstname = "";
$surname = "";
$username = "";
$email    = "";
$password = "";
$address = "";
$town = "";
$city = "";
$postcode = "";
$country = "";
$phone = "";
$experience = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['edit'])) {
 
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $town = mysqli_real_escape_string($db, $_POST['town']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);

  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($town)) { array_push($errors, "Town is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($postcode)) { array_push($errors, "Postcode is required"); }
  if (empty($country)) { array_push($errors, "Country is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($experience)) { array_push($errors, "Experience is required"); }




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
  

  	$query = "UPDATE users SET username = '$username', firstname = '$firstname', surname = '$surname',
    password = '$password', email = '$email', address = '$address', town = '$town', city = '$city', postcode = '$postcode', country = '$country', phone = '$phone', workexperience = '$experience' WHERE id = 2";
  	mysqli_query($db, $query);
  	
    return Redirect::to('studentaccount');
  }
}
}}