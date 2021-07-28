
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentdashboard.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/admindashboard.css') }}">
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
<div id="headertext">Admin dashboard</div>
 </div>
</section  >
<div style="margin-bottom: 20%;padding-bottom: 15%;margin-left: 10%;height:800px;margin-top:10%">
<h2>Welcome back,  <?=$_SESSION['name']?>!</h2>

<div class="left">
  <h2>Courses</h2>
  <h3> <a href="tutorcourses.php">Course name</a></h3>
 

</div>
<div class="right">
 <h2> Support tickets</h2>
 <table>
<tr><td> <h3>Date: </h3></td><td>Here will be the date.</td></tr>
 <tr><td><h3 >Ticket name: </h3></td><td>Here will be the name of the ticket.</td></tr>
<tr><td> <h3 >Sender name: </h3></td><td>Here will be the name of the sender. </td>
 <tr><td><a href="adminsupportpage.php"><button >View query</button></a></td></tr></table>
</div>
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