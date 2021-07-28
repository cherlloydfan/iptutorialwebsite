<?php

include 'sendmessage.php';
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
$stmt = $con->prepare('SELECT firstname,surname,coursename,projectname,ticketname,date,file FROM users WHERE id = 29');

$stmt->execute();
$stmt->bind_result($firstname,$surname,$coursename,$projectname,$ticketname,$date,$file);
$stmt->fetch();
$stmt->close();


?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentdashboard.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/markwork.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="tutordashboard.php"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="tutorcourses.php">Courses</a>
              <a href="tutorprojects.php">Projects</a>
              <a href="sessions.php">Sessions</a>
              <a href="content.php">Content</a>
              <a href="meeting.html">Meeting</a>

            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
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
<div id="headertext">Mark work</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 5%;margin-right: 5%;">

  <table><tr><td><h3 >Student first name:</h3></td><td><?=$firstname?></td></tr>
 <tr><td style="width:10%"><h3>Student surname:</h3></td><td style="width:40%"><?=$surname?></td></tr>
 <tr><td><h3>Course name:</h3></td><td><?=$coursename?></td></tr>
 <tr><td><h3>Project name:</h3></td><td><?=$projectname?></td></tr>
 <tr><td><h3>Title of work:</h3></td><td><?=$ticketname?></td></tr>
 <tr><td><h3>Date:</h3></td><td><?=$date?></td></tr>
 <?php foreach ($files as $file): ?><tr><td><h3 >Submission:</h3></td><td><?php echo $file['file']; ?><div style="display:inline-block">

 </p><a href="markwork.php?file_id=<?php echo $file['id'] ?>">Download</a></td></tr>  <?php endforeach;?>
  <form method="post" action="markwork1.php" > 
  <tr><td><h3 >Grade:</h3></td><td><input type="text" name='grade' min="1" max= "100" style="width:165px" required></input></td></tr>
<tr><td style="display: inline-block; position: relative;margin-top:-11%"><h3 >Feedback:</h3></td><td><textarea rows="4" style="width:165px" type="text" name="feedback" min="1" max="1000" required></textarea></td></tr>
<tr><td><button type="submit" name="send">Save</button></td></tr></form>

</table>

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