<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class AddjobController extends Controller
{  public function index(){
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
$jobname = "";
$companyname = "";
$jobdescription = "";
$jobskills = "";
$jobdate = "";
$jobhours = "";
$jobtype = "";
$username = $_SESSION['name'];


$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $jobname = mysqli_real_escape_string($db, $_POST['jobname']);
  $companyname = mysqli_real_escape_string($db, $_POST['companyname']);
  $jobdescription = mysqli_real_escape_string($db, $_POST['jobdescription']);
  $jobskills = mysqli_real_escape_string($db, $_POST['jobskills']);
  $jobdate = mysqli_real_escape_string($db, $_POST['jobdate']);
  $jobhours = mysqli_real_escape_string($db, $_POST['jobhours']);
  $jobtype = mysqli_real_escape_string($db, $_POST['jobtype']);

  if (empty($jobname)) { array_push($errors, "Job name is required"); }
  if (empty($companyname)) { array_push($errors, "Company name is required"); }
  if (empty($jobdescription)) { array_push($errors, "Job description is required"); }
  if (empty($jobskills)) { array_push($errors, "Job skills is required"); }
  if (empty($jobdate)) { array_push($errors, "Job date is required"); }
  if (empty($jobhours)) { array_push($errors, "Job hours is required"); }
  if (empty($jobtype)) { array_push($errors, "Job type is required"); }



  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,jobname,companyname,jobdescription,jobskills,jobdate,jobhours,jobtype) 
  			  VALUES('$username','$jobname','$companyname','$jobdescription','$jobskills','$jobdate','$jobhours','$jobtype')";
  	mysqli_query($db, $query);
  
    return Redirect::to('addjob'); 
  }
}}}