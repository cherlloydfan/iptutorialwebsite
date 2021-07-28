<?php 

session_start();

function updateAccount(){
    $pdo=new PDO('mysql:host=localhost;tutorialwebsite', 'root', '');

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


//Execute the query


{
 $st = $pdo->prepare("UPDATE users SET firstname = :firstname, surname = :surname, email = :email, username = :username, password = :password, address = :address, town = :town, city = :city, postcode = :postcode, country = :country, phone = :phone, experience = :experience WHERE id = '2'");

    if(!isset($error)){
        //no error
        $st->execute(array('firstname' => $firstname, 'surname'=>$surname, 'email'=>$email, 'username'=> $username, 'password' => $password, 'address' => $address, 'town' => $town, 'city' => $city, 'postcode' => $postcode, 'country' => $country, 'phone' => $phone, 'experience' => $experience));



        header("Location: studentaccount.php");

    }else {
        echo "Error";
    }
} }


?>