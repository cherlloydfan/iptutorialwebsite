<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class SendmessageController extends Controller
{  public function index(){
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$subject = "";
$message = "";
$sender = "";
$recipient = "";
$username = $_SESSION['name'];

$sql = "SELECT * FROM users where id=26";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['send'])) { 
  
    $filename = $_FILES['attachment']['name'];

 
    $destination = 'files/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $sender = mysqli_real_escape_string($conn, $_POST['sender']);
    $recipient = mysqli_real_escape_string($conn, $_POST['recipient']);




    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','doc','ppt','pptx','txt','xlsx','image/*','mp4'])) {
        echo "You file extension must be .zip, .pdf, .docx, .png, .jpg, .doc, .ppt, .pptx, .txt, .xlsx, .image or .mp4";
    } elseif ($_FILES['attachment']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO users (username,ticketname,message,sender,recipient,file, filesize, downloads) VALUES ('$username','$subject','$message','$sender','$recipient','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "Message sent ";
                return Redirect::to('newmessage');
            }
        } else {
            echo "Failed to send message.";
            return Redirect::to('newmessage');
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    
    $sql = "SELECT * FROM users WHERE id=26";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'files/' . $file['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('files/' . $file['file']));
        readfile('files/' . $file['file']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE users SET downloads=$newCount WHERE id=26";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}}}