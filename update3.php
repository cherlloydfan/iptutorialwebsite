<?php
$con = new mysqli("localhost", "root", "", "tutorialwebsite");

    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $town=$_POST['town'];
    $city=$_POST['city'];
    $postcode=$_POST['postcode'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $experience=$_POST['experience'];
    
    $stmt = $con->prepare("UPDATE users SET username = ?, firstname = ?, surname = ?, email = ?, password = ?, address = ?, town = ?, city = ?, postcode = ?, country = ?, phone = ?, experience = ? WHERE id = '2'");
    $stmt->bind_param("si",$username,$firstname,$surname,$email,$password,$address,$town,$city,$postcode,$country,$phone,$experience,$id);
    $stmt->execute();

?>