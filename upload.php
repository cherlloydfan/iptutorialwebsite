<?php
// Include the database configuration file
include 'database.php';
$statusMsg = '';

// File upload path
$targetDir = "files/";
$cv = basename($_FILES["cv"]["name"]);
$coverletter = basename($_FILES["coverletter"]["name"]);
$targetFilePath1 = $targetDir . $cv;
$targetFilePath2 = $targetDir . $coverletter;
$fileType = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
$fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
if(isset($_POST["apply"]) && !empty($_FILES["cv"]["name"])&& !empty($_FILES["coverletter"]["name"]))
{
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx');
    if(in_array($fileType, $allowTypes))
    {
      if(in_array($fileType2, $allowTypes))
      {
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath1, $targetFilePath2))
        {
            // Insert image file name into database
            $insert = $db->query("INSERT into users (cv,coverletter ) VALUES ('".$cv."','".$coverletter."'");
            if($insert)
            {
                $statusMsg = "The files ".$cv. " ".$coverletter. " has been uploaded successfully.";
            }else
            {
                $statusMsg = "File upload failed, please try again.";
            } 
        }}
        {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else
    {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, DOC & PDF files are allowed to upload.';
    }
}else
{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>