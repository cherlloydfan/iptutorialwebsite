<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$titleofwork = "";
$firstname = "";
$surname = "";
$projectname = "";
$coursename = "";

$sql = "SELECT * FROM users where id=29";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['send'])) { 
  
    $filename = $_FILES['attachment']['name'];

 
    $destination = 'files/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    $titleofwork = mysqli_real_escape_string($conn, $_POST['titleofwork']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    
    $projectname = mysqli_real_escape_string($conn, $_POST['projectname']);
    $coursename = mysqli_real_escape_string($conn, $_POST['coursename']);

    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','doc','ppt','pptx','txt','xlsx','image/*','mp4'])) {
        echo "You file extension must be .zip, .pdf, .docx, .png, .jpg, .doc, .ppt, .pptx, .txt, .xlsx, .image or .mp4";
    } elseif ($_FILES['attachment']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO users (username,firstname,surname,ticketname,projectname,coursename,file, filesize, downloads) VALUES ('lucy27','$firstname','$surname','$titleofwork','$projectname','$coursename','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "Work submitted ";
                header('location: submitwork.html');
            }
        } else {
            echo "Failed to submit work.";
            header('location: submitwork.html');
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    
    $sql = "SELECT * FROM users WHERE id=29";
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