<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class VerificationController extends Controller
{  public function index(){
if(isset($_POST['verify']))
{
	$email=$_POST['email'];

	
	$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');



	
    $query = "insert into users (email,active) values('$email','1')";

    mysqli_query($db, $query);
    return Redirect::to('studentsettings');

	}
}}

?>