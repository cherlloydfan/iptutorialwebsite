<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$grade = "";
$feedback = "";



if (isset($_POST['send'])) { 
  
   
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
    

            $sql = "INSERT INTO users (username,grade,message,ticketname,coursename,projectname,firstname,surname) VALUES ('lucy28','$grade','$feedback','Homework 1','Intellectual property','Copyright','Lucy','Abbott')";
            if (mysqli_query($conn, $sql)) {
                echo "Work marked ";
                header('location: markwork.php');
            }
        } else {
            echo "Failed to mark work.";
            header('location: markwork.php');
        }
    


