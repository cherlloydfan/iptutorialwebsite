<?php
session_start();
$sessionname = "";
$date = "";
$time = "";
$duration = "";
$coursename = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 
  $sessionname = mysqli_real_escape_string($db, $_POST['sessionname']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $duration = mysqli_real_escape_string($db, $_POST['duration']);
  $coursename = mysqli_real_escape_string($db, $_POST['coursename']);

  if (empty($sessionname)) { array_push($errors, "Session name is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }
  if (empty($time)) { array_push($errors, "Time is required"); }
  if (empty($duration)) { array_push($errors, "Duration is required"); }
  if (empty($coursename)) { array_push($errors, "Course name is required"); }



  
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO users (username,sessionname,date,time,duration,coursename) 
  			  VALUES('tom3','$sessionname','$date','$time','$duration','$coursename')";
  	mysqli_query($db, $query);
  
  	header('location: booksession.html');
  }
}