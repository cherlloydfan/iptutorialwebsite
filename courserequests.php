<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tutorialwebsite';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT coursename,coursedescription,coursechapters,progress FROM users WHERE id = 2');

$stmt->execute();
$stmt->bind_result($coursename,$coursedescription,$coursechapters,$progress);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/courseprogress.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/courserequests.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="admindashboard.php"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Information
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
             <a href="tutorcourses.php">Courses</a>
              <a href="tutorprojects.php">Projects</a>
              <a href="studentprofile.php">Students</a>
              <a href="studentprofile.php">Tutors</a>
              <a href="payment.php">Payments</a>

            
            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
                       <a href="adminsupportpage.php">Support</a>
          <a href="courserequests.php">Course requests </a>
          <a href="messages.php">Messages</a>
          
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
<div id="headertext">Course requests</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 2%;">
    <table>
        <tr>
       
         
          <td><h3>Course name:</h3></td>
          <td><?=$coursename?></td></tr>
          <td style="width:10%"><h3>Course description:</h3></td>
          <td style="line-height: 1.6; width:40%;padding-right:20%"><?=$coursedescription?></td></tr>
          <td><h3>Chapters:</h3></td>
          <td><?=$coursechapters?></td></tr>
          <td><h3>Status:</h3></td>
          <td><?=$progress?></td></tr>
          <tr><td><form method="post" action="confirmcourse.php"><input type="submit" name="send" id="confirmcourse" value="Confirm course"></input></form></td>
        </tr>
     
      </table>
      
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
<script>
 function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
</body>
</html>