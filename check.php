if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE verificationcode = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['verificationcode'];
            $email = $fetch_data['email'];
            $verificationcode = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET verificationcode = $verificationcode, status = '$status' WHERE verificationcode = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
    
                $_SESSION['email'] = $email;
                header('location: studentsettings.html');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }