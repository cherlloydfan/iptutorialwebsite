<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tutorialwebsite';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT firstname,surname,address,town,city,postcode,phone,email,service,amount,cardno,expirydate,securitycode,postingdate FROM users WHERE id = 2');

$stmt->execute();
$stmt->bind_result($firstname,$surname,$address,$town,$city,$postcode,$phone,$email,$service,$amount,$cardno,$expirydate,$securitycode,$postingdate);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/courseprogress.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/payment.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="studentdashboard.php"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="courseprogress.php">Courses</a>
                  <a href="projectprogress.php">Projects</a>
            
            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="jobprogress.php">Jobs</a>
            <a href="certificates.html">Certificates</a>
                      <a href="supportpage.html">Support</a>
                      <a href="messages.php">Messages</a>
                <a href="payment.php">Payments</a>
                      <a href="community.php">Community</a>
                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Account
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="studentprofile.php">Profile</a>
                      <a href="studentaccount.php">Account details</a>
                      <a href="studentsettings.html">Settings</a>
                      <a href="logout.php">Log out</a>
                      
                    </div></div>
       
    </ul>
</div>

 <!-- <div id="background"> -->
 <section>
     <div id="header" style="margin-bottom: 10%;">
<div id="headertext">Payments</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 2%;">
    <table>
        <tr>
          
    
          <td><h3>First name:</h3></td>
        <td><?=$firstname?></td></tr>
         <tr><td><h3>Surname:</h3></td>
          <td><?=$surname?></td></tr> 
          <tr><td><h3>Address:</h3></td>
            <td><?=$address?></td></tr>
         <tr> <td><h3>Town:</h3></td>
          <td><?=$town?></td></tr>
         <tr> <td><h3>City:</h3></td>
          <td><?=$city?></td></tr>
         <tr> <td><h3>Postcode:</h3></td>
          <td><?=$postcode?></td></tr>
         <tr> <td><h3>Phone number:</h3></td>
          <td><?=$phone?></td></tr>
         <tr> <td><h3>Email address:</h3></td>
          <td><?=$email?></td></tr>
         <tr> <td><h3>Service:</h3></td>
          <td><?=$service?></td></tr>
         <tr> <td><h3>Amount:</h3></td>
          <td><?=$amount?></td></tr>
         <tr> <td><h3>Card number:</h3></td>
          <td><?=$cardno?></td></tr>
         <tr> <td><h3>Expiry date:</h3></td>
          <td><?=$expirydate?></td></tr>
         <tr> <td><h3>Security code:</h3></td>
          <td><?=$securitycode?></td></tr>
         <tr> <td><h3>Date:</h3></td>
          <td><?=$postingdate?></td></tr>
          
       
       
      </table>
      <div style="margin-top:5%;margin-left: 2%;">
      <a href="makepayment.html"><button>Make payment</button></a>
</div></div>
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 2%;">{% with messages = get_flashed_messages() %}
  </div>
<div style="background-color: #d4d4d4;">
    <footer style="background-color: #d4d4d4;">
      <div style="position:relative;background-color:#d4d4d4" class="footer" id="footer">
        <div class="logo">
          <p style="font-size: 10pt;"><img src='' width="30" height="30" align="left" style="display: inline-block;">IP tutorials</p>
        </div>
        <div class="column">
          <h3>Pages</h3>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
        </div>
        <div class="column">
          <h3>Pages</h3>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
  
        </div>
        <div class="column">
          <h3>Pages</h3>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
          <p>Link</p>
        </div>
      </div>
    </footer>
  </div>

</body>
</html>