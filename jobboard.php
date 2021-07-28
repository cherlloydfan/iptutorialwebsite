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
$stmt = $con->prepare('SELECT jobname,companyname,jobdescription,jobdate,jobhours,jobtype,jobskills FROM users WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($jobname,$companyname,$jobdescription,$jobdate,$jobhours,$jobtype,$jobskills);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/courseprogress.css">
        <link rel="stylesheet" href="{{ url_for('static', filename='css/index.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials</title>
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
<div id="headertext">Jobs board</div>
 </div>
</section  >
<div style="height:1200px;margin-left:5%;margin-bottom: 10%;">

 
        <div class="left">
  <table >
    
      <tr>
        <td><h3>Job name:</h3></td>
        <td><?=$jobname?></td>
       
 
    </tr>
    <tr>
        <td><h3>Company name:</h3></td>
        <td><?=$companyname?></td>
       
    
    </tr>
    <tr>
      <td><h3>Job description:</h3></td>
      <td><?=$jobdescription?></td>
     

  </tr>
  <tr>
    <td style="display: inline-block;position: relative;margin-top:-5%"><h3>Skills required:</h3></td>
    <td><?=$jobskills?></td>
   

</tr>
<tr>
    <td><h3>Deadline date to apply:</h3></td>
    <td><?=$jobdate?></td>
   

</tr>
<tr>
    <td><h3>Job hours:</h3></td>
    <td><?=$jobhours?></td>
   

</tr>
<tr>
    <td><h3>Job type:</h3></td>
    <td><?=$jobtype?></td>
   

</tr>

<tr>
    <td style= "display: inline-block; position: relative;margin-top:-5%"><h3>Related jobs:</h3></td>
    <td><ul style="margin:0;padding-left:18px">
        <li><a href="#">Job name</a></li>
        <li><a href="#">Job name</a></li>
        <li><a href="#">Job name</a></li>
    </ul></td>
   

</tr>
<tr><td><a href="jobapplication.php">   <button style=" width:100px"  >Apply for job</button></a></td></tr>
  

  </table>
  </div>
  


 
    

 

<div  class="right" style="text-align:right"  ><img src="images/programmer.jpg" height='100' width='100'></div>
</div>
<div style="background-color: #d4d4d4;">
    <footer style="background-color: #d4d4d4;">
      <div style="position:relative;background-color:#d4d4d4" class="footer" id="footer">
        <div class="logo">
          <p style="font-size: 10pt;"><img src=' ' width="30" height="30" align="left" style="display: inline-block;">IP tutorials</p>
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