<?php
session_start();
mysqli_connect('localhost', 'root', '') or   die(mysqli_error());
mysqli_select_db("tutorialwebsite") or die(mysqli_error());

$id = (int)$_SESSION["id"];

$username = mysqli_real_escape_string($_POST["username"]);
$firstname = mysqli_real_escape_string($_POST["firstname"]);
$surname = mysqli_real_escape_string($_POST["firstname"]);
$email = mysqli_real_escape_string($_POST["email"]);
$password = mysqli_real_escape_string($_POST["password"]);
$address = mysqli_real_escape_string($_POST["address"]);
$town = mysqli_real_escape_string($_POST["town"]);
$city = mysqli_real_escape_string($_POST["city"]);
$postcode = mysqli_real_escape_string($_POST["postcode"]);
$country = mysqli_real_escape_string($_POST["country"]);
$phone = mysqli_real_escape_string($_POST["phone"]);
$experience = mysqli_real_escape_string($_POST["experience"]);


$query="UPDATE users
SET username = '$username', firstname = '$firstname', surname = '$surname',
password = '$password', email = '$email', address = '$address', town = '$town', city = '$city', postcode = '$postcode', country = '$country', phone = '$phone', experience = '$experience' WHERE id = '2'";


mysqli_query($query)or die(mysqli_error());
if(mysqli_affected_rows()>=1){
echo "<p>($id) Record Updated<p>";
}else{
echo "<p>($id) Not Updated<p>";
}
?> 