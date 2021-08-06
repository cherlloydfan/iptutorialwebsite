<?php
$db = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');

if(isset($_POST['submit']))
{

    $verificationcode = rand(999999, 111111);
    $status = "notverified";
    $insert_data = "INSERT INTO users ( email,  code, status)
                    values( '$email',  '$code', '$status')";
    $data_check = mysqli_query($con, $insert_data);
    if($data_check){
        $subject = "Email Verification Code";
        $message = "Your verification code is $verificationcode";
        $sender = "From: info@iptutorials.com";
        if(mail($email, $subject, $message, $sender)){
            $info = "We've sent a verification code to your email - $email";
            $_SESSION['info'] = $info;
            $_SESSION['email'] = $email;
 
            header('location: user-otp.php');
            exit();
        }else{
            $errors['otp-error'] = "Failed while sending code!";
        }
    }else{
        $errors['db-error'] = "Failed while inserting data into database!";
    }
}

    ?>