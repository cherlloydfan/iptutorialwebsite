<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$response = "";




if (isset($_POST['send'])) { 
  
   
    $response = mysqli_real_escape_string($conn, $_POST['response']);
    

            $sql = "INSERT INTO users (username,response,message,ticketname,firstname,email,phone,progress,assignedto) VALUES ('lucy208','$response','I want to change course','Change course','Lucy','lucy426@example.com','07535325325','replied','Tom')";
            if (mysqli_query($conn, $sql)) {
                echo "Response given ";
                header('location: adminsupportpage.php');
            }
        } else {
            echo "Response not given.";
            header('location: adminsupportpage.php');
        }
    


