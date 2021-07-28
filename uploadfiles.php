<?php 

$hostname     = "localhost";
$username     = "root";
$password     = ""; 
$databasename = "tutorialwebsite"; 
// Create connection 
$conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }


$tableName='users'; // Enter your table Name;
// fetching files from database
$fetchFiles=fetch_files($tableName);
// uploading files on submit
if(isset($_POST['apply'])){ 
    //  uploading files
    echo upload_files($tableName); 
}
  function upload_files($tableName){
   
    $uploadTo = "files/"; 
    $allowFileExt = array('jpg','png','jpeg','gif','pdf','doc','csv','zip','docx');
    $fileName = array_filter($_FILES['file']['name']);
    $fileTempName=$_FILES["file"]["tmp_name"];
    $tableName= trim($tableName);
    if(empty($fileName)){ 
       $error="Please Select files..";
       return $error;
     }else if(empty($tableName)){
       $error="You must declare table name";
       return $error;
     }else{
    
     $error=$storeFilesBasename='';
    foreach($fileName as $index=>$file){
         
    $fileBasename = basename($fileName[$index]);
    $filePath = $uploadTo.$fileBasename; 
    $fileExt = pathinfo($filePath, PATHINFO_EXTENSION); 
    if(in_array($fileExt, $allowFileExt)){ 
        // Upload file to server 
        if(move_uploaded_file($fileTempName[$index],$filePath)){ 
        
         // Store Files into database table
         $storeFilesBasename .= "('".$fileBasename."'),"; 
          
         }else{ 
         $error = 'File Not uploaded ! try again';
         } 
     }else{
       $error .= $_FILES['file']['name'][$index].' - file extensions not allowed<br> ';
     }
    }
    store_files($storeFilesBasename, $tableName);
  }
    return $error;
}
    // File upload configuration 
    function store_files($storeFilesBasename, $tableName){
      global $db;
      if(!empty($storeFilesBasename))
      {
      $value = trim($storeFilesBasename, ',');
       $store="INSERT INTO ".$tableName." (file) VALUES".$value;
      
      $exec= $db->query($store);
       if($exec){
       
        echo "files are uploaded successfully";
         
       }else{
        echo  "Error: " .  $store . "<br>" . $db->error;
       }
      }
    }
   
      
 
?>