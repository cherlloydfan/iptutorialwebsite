<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class AddprojectController extends Controller
{  public function index(){
session_start();
$projectname = "";
$projectdescription = "";
$projectchapters = "";
$username = $_SESSION['name'];


$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $projectname = mysqli_real_escape_string($db, $_POST['projectname']);
  $projectdescription = mysqli_real_escape_string($db, $_POST['projectdescription']);
  $projectchapters = mysqli_real_escape_string($db, $_POST['projectchapters']);
  
  if (empty($projectname)) { array_push($errors, "Project name is required"); }
  if (empty($projectdescription)) { array_push($errors, "Project description is required"); }
  if (empty($projectchapters)) { array_push($errors, "Chapters is required"); }
  


  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,projectname,projectdescription,projectchapters) 
  			  VALUES('$username','$projectname','$projectdescription','$projectchapters')";
  	mysqli_query($db, $query);
  
return Redirect::to('addproject');  }
}
}}