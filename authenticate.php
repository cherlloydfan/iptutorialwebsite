<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tutorialwebsite';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Please fill both the username and password fields!');
}


if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        
        if ($_POST['password'] === $password) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
             
		if ($_POST['type'] = 'student'){	
				header('location: studentdashboard.php');	
           
        }elseif 
        
         ($_POST['type'] = 'tutor'){	
            header('location: tutordashboard.php');	
       
        }elseif
        ($_POST['type'] = 'sponser'){	
            header('location: sponserdashboard.php');	
       
        }
        elseif ($_POST['type'] = 'admin'){	
            header('location: admindashboard.php');	
       
        }else{
           
            echo 'Incorrect username and/or password!';
            }
    

	$stmt->close();
}}
}
?>