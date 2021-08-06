<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class FinishcourseController extends Controller
{  public function index(){
session_start();
$coursename = "";
$coursedescription = "";
$coursechapters = "";

$username = $_SESSION['name'];

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  

  	$query = "INSERT INTO users (username,coursename,coursedescription,coursechapters,progress) 
  			  VALUES('$username','Intellectual property','Types of intellectual property','22','finished')";
  	mysqli_query($db, $query);
  
    return Redirect::to('courseprogress');
  }
}}