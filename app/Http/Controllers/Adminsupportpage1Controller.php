<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class Adminsupportpage1Controller extends Controller
{  public function index(){
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$response = "";
$username = $_SESSION['name'];




if (isset($_POST['send'])) { 
  
   
    $response = mysqli_real_escape_string($conn, $_POST['response']);
    

            $sql = "INSERT INTO users (username,response,message,ticketname,firstname,email,phone,progress,assignedto) VALUES ('$username','$response','I want to change course','Change course','Lucy','lucy426@example.com','07535325325','replied','Tom')";
            if (mysqli_query($conn, $sql)) {
                echo "Response given ";
                return Redirect::to('adminsupportpage');            }
        } else {
            echo "Response not given.";
            return Redirect::to('adminsupportpage');        }
    
    }}

