<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class AddcourseController extends Controller
{  public function index(){
session_start();
$coursename = "";
$coursedescription = "";
$coursechapters = "";

$username = $_SESSION['name'];

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $coursename = mysqli_real_escape_string($db, $_POST['coursename']);
  $coursedescription = mysqli_real_escape_string($db, $_POST['coursedescription']);
  $coursechapters = mysqli_real_escape_string($db, $_POST['coursechapters']);
  
  if (empty($coursename)) { array_push($errors, "Course name is required"); }
  if (empty($coursedescription)) { array_push($errors, "Course description is required"); }
  if (empty($coursechapters)) { array_push($errors, "Chapters is required"); }
  


  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,coursename,coursedescription,coursechapters) 
  			  VALUES('$username','$coursename','$coursedescription','$coursechapters')";
  	mysqli_query($db, $query);
  
    return Redirect::to('addcourse');
  }
}}}