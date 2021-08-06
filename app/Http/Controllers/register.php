<?php
   
    // Database connection
    include('database.php');
    $firstname = "";
    $surname = "";
    $username = "";
    $email    = "";
    $db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
    // Error & success messages
    global $success_msg, $email_exist, $username_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5, $emptyError6;
    

    if(isset($_POST["signup"])) {
        $firstname     = $_POST["firstname"];
        $surname      = $_POST["surname"];
        $email         = $_POST["email"];
        $username        = $_POST["username"];
        $password      = $_POST["password"];
        $confirmpassword      = $_POST["confirmpassword"];

        // verify if email exists
        $emailCheck = $connection->query( "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = $emailCheck->fetchColumn();
        $usernameCheck = $connection->query( "SELECT * FROM users WHERE username = '{$username}' ");
        $rowCount = $usernameCheck->fetchColumn();

        // PHP validation
        if(!empty($firstname) && !empty($surname) && !empty($email) && !empty($username) && !empty($password)  && !empty($confirmpassword)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } 
            if($rowCount > 0) {
                $username_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with username already exist!
                    </div>
                ';
            }
            if ($password != $confirmpassword) {
                $passwords_dont_match = '
                <div class="alert alert-danger" role="alert">
                        The passwords dont match
                    </div>
                ';
              }
               else {

            // Password hash
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO users (firstname,surname,username, email, password) 
  			  VALUES('$firstname','$surname','$username', '$email', '$password')";
  	mysqli_query($db, $query);
  
            
                if(!$sql){
                    die("MySQL query failed!" . mysqli_error($connection));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: studentdashboard.php');
                }
            }
        } else {
            if(empty($firstname)){
                $emptyError1 = '<div class="alert alert-danger">
                    First name is required.
                </div>';
            }
            if(empty($surname)){
                $emptyError2 = '<div class="alert alert-danger">
                    Surname is required.
                </div>';
            }
            if(empty($email)){
                $emptyError3 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
            }
            if(empty($username)){
                $emptyError4 = '<div class="alert alert-danger">
                    Username is required.
                </div>';
            }
            if(empty($password)){
                $emptyError5 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
            }  
            if(empty($confirmpassword)){
                $emptyError6 = '<div class="alert alert-danger">
                    Confirm password is required.
                </div>';
            }                 
        }
    }
?>