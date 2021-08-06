<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class FinishprojectController extends Controller
{  public function index(){
session_start();
$projectname = "";
$projectdescription = "";
$projectchapters = "";

$username = $_SESSION['name'];

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  

  	$query = "INSERT INTO users (username,projectname,projectdescription,projectchapters,progress) 
  			  VALUES('$username','Copyright','Copyright laws','22','finished')";
  	mysqli_query($db, $query);
  
    return Redirect::to('projectprogress');
  }
}}