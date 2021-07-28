<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$personname = "";
$postname = "";
$postbody = "";

$sql = "SELECT * FROM users where id=28";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['send'])) { 
  
    $filename = $_FILES['attachment']['name'];

 
    $destination = 'files/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    $personname = mysqli_real_escape_string($conn, $_POST['personname']);
    $postname = mysqli_real_escape_string($conn, $_POST['postname']);
    $postbody = mysqli_real_escape_string($conn, $_POST['postbody']);
    




    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','doc','ppt','pptx','txt','xlsx','image/*','mp4'])) {
        echo "You file extension must be .zip, .pdf, .docx, .png, .jpg, .doc, .ppt, .pptx, .txt, .xlsx, .image or .mp4";
    } elseif ($_FILES['attachment']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO users (username,sender,ticketname,message,file, filesize, downloads) VALUES ('lucy26','$personname','$postname','$postbody','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "Post sent ";
                header('location: newpost.html');
            }
        } else {
            echo "Failed to send post.";
            header('location: newpost.html');
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    
    $sql = "SELECT * FROM users WHERE id=28";
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

}