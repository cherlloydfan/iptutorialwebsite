<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	return Redirect::to('login');
	exit;
}
?>

<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentdashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >

<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="{{url('tutordashboard')}}"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{url('tutorcourses')}}">Courses</a>
              <a href="{{url('tutorprojects')}}">Projects</a>
              <a href="{{url('sessions')}}">Sessions</a>
              <a href="{{url('content')}}">Content</a>

            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
                      <a href="{{url('supportpage')}}">Support</a>
                      <a href="{{url('messages')}}">Messages</a>
                   <a href="{{url('payment')}}">Payments</a>

                      <a href="{{url('community')}}">Community</a>
                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Account
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="{{url('studentprofile')}}">Profile</a>
                      <a href="{{url('studentaccount')}}">Account details</a>
                      <a href="{{url('studentsettings')}}">Settings</a>
                      <a href="{{url('logout')}}">Log out</a>
                      
                    </div></div>
       
    </ul>
</div>
    

 <!-- <div id="background"> -->
 <section>
     <div id="header" style="margin-bottom: 10%;">
    
<div id="headertext">Tutor dashboard</div>
 </div>
</section  >
<div style="margin-bottom: 20%;padding-bottom: 15%;margin-left: 10%;height:800px;margin-top:10%">
<h2>Welcome back,  <?=$_SESSION['name']?>!</h2>
<div class="left">
  <h2>My courses</h2>
  <h3> <a href="tutorcourses">Introduction to IP</a></h3>
  
  

</div>
<div class="right">
 <h2> Project submissions</h2>
 <table>
 <tr><td><h3 >Date/time:</h3></td><td>	2021-07-26 12:47:40</td></tr>
 <tr><td><h3  >Project name:</h3></td><td>Copyright</td></tr>
 <tr><td><h3 style="line-height: 1.4;">Course name:</h3></td><td style="line-height: 1.4;">Intellectual property</td></tr>
 <tr><td><h3 style="line-height: 1.4;" >Student name:</h3></td><td style="line-height: 1.4;">Lucy Abbott</td></tr>
<tr><td> <a href="markwork"><button >Mark submission</button></a></td></tr>


</table></div></div>
<div style="background-color: #d4d4d4;">
    <footer style="background-color: #d4d4d4;">
      <div style="position:relative;background-color:#d4d4d4" class="footer" id="footer">
        <div class="logo">
          <p style="font-size: 10pt;"><img src='images/DBA LOGO.png ' width="30" height="30" align="left" style="display: inline-block;">IP tutorials</p>
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