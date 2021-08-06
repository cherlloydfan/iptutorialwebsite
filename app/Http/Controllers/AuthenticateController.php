<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class AuthenticateController extends Controller
{  public function index(){
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


if ($stmt = $con->prepare('SELECT id, password,type FROM users WHERE  username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password,$type);
        $stmt->fetch();
        
        if ($_POST['password'] === $password) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['type'] = $type;
		if ($type == 'student'){	
            return Redirect::to('studentdashboard');
           
        }elseif 
        
        ($type == 'tutor'){	
            return Redirect::to('tutordashboard');
       
        }elseif
        ($type == 'sponser'){	
            return Redirect::to('sponserdashboard');
       
        }
        elseif ($type == 'admin'){	
            return Redirect::to('admindashboard');
       
        }else{
           
            echo 'Incorrect username and/or password!';
            return Redirect::to('login');

        }
    

	$stmt->close();
}}
}}}
?>