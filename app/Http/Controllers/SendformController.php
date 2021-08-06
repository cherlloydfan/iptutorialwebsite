<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class SendformController extends Controller
{  public function index(){
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$firstname = "";
$surname = "";
$phone = "";
$email = "";
$message = "";


if (isset($_POST['send'])) { 
  
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    




    
            $sql = "INSERT INTO users (firstname,surname,phone,email,message) VALUES ('$firstname','$surname','$phone','$email','$message')";
            if (mysqli_query($conn, $sql)) {
                echo "Message sent ";
                return Redirect::to('contactus');             }
        } else {
            echo "Failed to send message.";
            return Redirect::to('contactus');         }
    

    }}
