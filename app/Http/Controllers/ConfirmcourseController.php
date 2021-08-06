<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class ConfirmcourseController extends Controller
{  public function index(){
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();



$username = $_SESSION['name'];


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 

  	$query = "INSERT INTO users (username,coursename,coursedescription,coursechapters,progress) 
  			  VALUES('$username','Intellectual property','Types of intellectual property','22','confimed')";
  	mysqli_query($db, $query);
  
	  return Redirect::to('courserequests'); 
	}
}}
