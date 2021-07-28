<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();





$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');


if (isset($_POST['send'])) {
 

  	$query = "INSERT INTO users (username,coursename,coursedescription,coursechapters,progress) 
  			  VALUES('tom15','Intellectual property','Types of intellectual property','22','confimed')";
  	mysqli_query($db, $query);
  
  	header('location: courserequests.php');
  }
