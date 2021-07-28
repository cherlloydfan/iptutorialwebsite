<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
$firstname = "";
$surname = "";
$email = "";
$phone = "";
$address = "";
$town = "";
$city = "";
$postcode = "";
$qualifications = "";
$workexperience = "";



$errors = array(); 


$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
$sql = "SELECT * FROM users where id=37";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['apply'])) {
  $filename = $_FILES['attachment']['name'];

 
    $destination = 'files/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $town = mysqli_real_escape_string($conn, $_POST['town']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
  $qualifications = mysqli_real_escape_string($conn, $_POST['qualifications']);
  $workexperience = mysqli_real_escape_string($conn, $_POST['workexperience']);

  
  
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($email)) { array_push($errors, "Email address is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($town)) { array_push($errors, "Town is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($postcode)) { array_push($errors, "Postcode is required"); }
  if (empty($qualifications)) { array_push($errors, "Qualifications is required"); }
  if (empty($workexperience)) { array_push($errors, "Work experience is required"); }

  
  if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','doc','ppt','pptx','txt','xlsx','image/*','mp4'])) {
    echo "You file extension must be .zip, .pdf, .docx, .png, .jpg, .doc, .ppt, .pptx, .txt, .xlsx, .image or .mp4";
} elseif ($_FILES['attachment']['size'] > 1000000) { 
    echo "File too large!";
} else {

  if (count($errors) == 0) {
  if (move_uploaded_file($file, $destination)) {

  


  

  	$sql = "INSERT INTO users (username,firstname,surname, email, phone, address, town, city, postcode,qualifications,workexperience,jobname,jobdescription,jobstage,jobcomments,companyname,jobskills,jobhours,jobtype,file, filesize, downloads) 
  			  VALUES('lucy42','$firstname','$surname','$email', '$phone', '$address','$town','$city','$postcode','$qualifications','$workexperience','PHP programmer',
'Web app development',
'Job application recieved',
'Good CV and cover letter',
'Google',
'PHP web app programming',
'9 am to 5 pm Mon - Fri',
'Full time','$filename', $size, 0)";
  if (mysqli_query($conn, $sql)) {
    echo "Applied for job ";
    header('location: jobapplication.html');
}
} else {
echo "Failed to apply for job.";
header('location: jobapplication.html');
}
}
}

if (isset($_GET['file_id'])) {
$id = $_GET['file_id'];


$sql = "SELECT * FROM users WHERE id=37";
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
$updateQuery = "UPDATE users SET downloads=$newCount WHERE id=37";
mysqli_query($conn, $updateQuery);
exit;
}

}}