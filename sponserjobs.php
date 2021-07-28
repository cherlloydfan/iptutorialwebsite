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
$stmt = $con->prepare('SELECT jobname,jobdescription,jobdate,jobstage,firstname,surname,companyname FROM users WHERE id = 23');

$stmt->execute();
$stmt->bind_result($jobname,$jobdescription,$jobdate,$jobstage,$firstname,$surname,$companyname);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="{{ url_for('static', filename='css/index.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
        <p><img src='images/ 'width="30" height="30">IP tutorials</p>
        <ul>
            <li style="text-align:right;"> <a href="sponserdashboard.php"> Home </a></li>
            <div class="dropdown">
                <button class="dropbtn">Work
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="tutorprojects.php">Projects</a>
                  <a href="sessions.php">Meetings</a>
                 
                
                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Other
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    
                      <a href="supportpage.html">Support</a>
                      <a href="messages.php">Messaging</a>
              
                      <a href="sponserjobs.php">Jobs</a>
                      <a href="community.php">Community</a>
                      <a href="community.php">Blog</a>
                      <a href="community.php">Advertising</a>
                      <a href="content.php">Webinars</a>
   
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
<div id="headertext">Sponser jobs</div>
 </div>
</section  >
<div style="margin-left:5%;margin-bottom: 10%;height:800px">
<div class="left">
  <table >
   
      <tr>
        <td><h3>Job name:</h3></td>
        <td><?=$jobname?></td>
       
 
    </tr>
    <tr>
      <td><h3>Job description:</h3></td>
      <td><?=$jobdescription?></td>
     

  </tr>
  <tr>
    <td><h3>Deadline date to apply:</h3></td>
    <td><?=$jobdate?></td>
   

</tr>
<tr>
    <td><h3>Stage:</h3></td>
    <td><?=$jobstage?></td>
   

</tr>

<tr>
    <td><h3>Student's applied:</h3></td>
    <td><?=$firstname?> <?=$surname?></td>
   

</tr>
<tr>
    <td><h3>Company name:</h3></td>
    <td><?=$companyname?></td>
   

</tr>

  


  </table>
  
  


 
</div>
<div  class="right" style="text-align:right" ><img src="images/programmer.jpg" height='100' width='100'></div>
</div>
<div style="margin-left:22%; padding-bottom:10%">
    <a href="jobboard.php"><button style=" width:120px">Job board</button></a>  <div style="display:inline;margin-left:5%">  <a href="addjob.html"><button style=" width:120px">Add new job</button></a> <div style="display:inline;margin-left:5%">  <a href="studentsapplications.php"><button style=" width:120px">Job applications</button></a></div> 
</div></div>
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