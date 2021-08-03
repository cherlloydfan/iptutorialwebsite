<?php
$target_path = "files/";

$target_path = $target_path . basename( $_FILES['attachment']['name']); 

if(move_uploaded_file($_FILES['attachment']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['attachment']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
//$upload_directory = ''.uniqid().'_'.dirname(__file__) . '/uploaded/'; //set upload directory

$uploaded_file="".$upload_directory ."/".uniqid()."_".$_FILES['attachment']['name'][$i]."";

if (move_uploaded_file($_FILES['attachment']['tmp_name'][$i],$uploaded_file)) {
            $number_of_moved_files++;
        }
?>


<?php
if (isset($_POST['send'])) {
$number_of_file_fields = 0;
$number_of_uploaded_files = 0;
$number_of_moved_files = 0;
$uploaded_files = array();
$upload_directory = dirname(__file__) . '/uploaded/'; //set upload directory


/**
 * we get a $_FILES['attachment'] array ,
 * we procee this array while iterating with simple for loop
 * you can check this array by print_r($_FILES['attachment']);
 */
for ($i = 0; $i < count($_FILES['attachment']['name']); $i++) {
    $number_of_file_fields++;
    if ($_FILES['attachment']['name'][$i] != '') { //check if file field empty or not

        $uploaded_file="".$upload_directory ."".uniqid()."_".$_FILES['attachment']['name'][$i]."";

        $number_of_uploaded_files++;
        $uploaded_files[] = $_FILES['attachment']['name'][$i];
        if (move_uploaded_file($_FILES['attachment']['tmp_name'][$i],$uploaded_file)) {
            $number_of_moved_files++;
        }

    }

}
echo "Number of File fields created $number_of_file_fields.<br/> ";
echo "Number of files submitted $number_of_uploaded_files . <br/>";
echo "Number of successfully moved files $number_of_moved_files . <br/>";
echo "File Names are <br/>" . implode(',', $uploaded_files);
}
?> 