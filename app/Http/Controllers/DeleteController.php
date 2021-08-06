<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class DeleteController extends Controller
{  public function index(){
  session_start();

$username1 = $_SESSION['name'];
$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');

// sql to delete a record
$sql = "DELETE FROM users WHERE username='$username1'";
mysqli_query($db, $sql);

if ($db->query($sql) === TRUE) {
  echo "Account deleted successfully";
} else {
  echo "Error deleting account: " . $db->error;
}

$db->close();
session_destroy();
return Redirect::to('login');


}}
?>