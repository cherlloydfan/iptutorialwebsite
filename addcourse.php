<?php
session_start();
$coursename = "";
$coursedescription = "";
$coursechapters = "";


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
  			  VALUES('tom1','$coursename','$coursedescription','$coursechapters')";
  	mysqli_query($db, $query);
  
  	header('location: addcourse.html');
  }
}