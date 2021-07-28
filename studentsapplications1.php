<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$stage = "";
$comments = "";
$interview = "";



if (isset($_POST['send'])) { 
  
   
    $stage = mysqli_real_escape_string($conn, $_POST['stage']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $interview = mysqli_real_escape_string($conn, $_POST['interview']);


            $sql = "INSERT INTO users (username,jobstage,jobcomments,jobinterviews,firstname,surname, email, phone, address, town, city, postcode,qualifications,workexperience,jobname,jobdescription,companyname,jobskills,jobhours,jobtype) VALUES ('lucy87','$stage','$comments','$interview','Lucy','Abbott','lucy420@example.com', '07535325325', '228 Chigwell road','South Woodford','London','E18 1HA','computer science degree','programmer','PHP programmer',
            'Web app development',
            
            'Google',
            'PHP web app programming',
            '9 am to 5 pm Mon - Fri',
            'Full time')";
            if (mysqli_query($conn, $sql)) {
                echo "Feedback sent ";
                header('location: studentsapplications.php');
            }
        } else {
            echo "Failed to give feedback.";
            header('location: studentsapplications.php');
        }
    


