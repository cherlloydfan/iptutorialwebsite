<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();
$subject = "";
$message = "";
$sender = "";
$recipient = "";
$sql = "SELECT * FROM users where id=26";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_POST['send'])) { 
  
    $filename = $_FILES['attachment']['name'];

 
    $destination = 'files/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    




    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','doc','ppt','pptx','txt','xlsx','image/*','mp4'])) {
        echo "You file extension must be .zip, .pdf, .docx, .png, .jpg, .doc, .ppt, .pptx, .txt, .xlsx, .image or .mp4";
    } elseif ($_FILES['attachment']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO users (username, file, filesize, downloads) VALUES ('tom4','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded ";
                header('location: content.php');
            }
        } else {
            echo "Failed to upload file.";
            header('location: content.php');
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

}