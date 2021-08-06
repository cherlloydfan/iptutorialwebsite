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
$stmt = $con->prepare('SELECT projectname,projectdescription,projectchapters,grade,message FROM users WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($projectname,$projectdescription,$projectchapters,$grade,$message);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/courseprogress.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials</title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="{{url('studentdashboard')}}"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{url('courseprogress')}}">Courses</a>
                  <a href="{{url('projectprogress')}}">Projects</a>
            
            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="{{url('jobprogress')}}">Jobs</a>
            <a href="{{url('certificates')}}">Certificates</a>
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
<div id="headertext">Project progress</div>
 </div>
</section  ><div style="margin-bottom:10%;height:1200px">
<div class="left">
  <table style="margin-left:5%;margin-bottom: 10%;">

      <tr>
        <td><h3>Project name:</h3></td>
        <td> <?=$projectname?></td>
       
 
    </tr>
    <tr>
      <td style="width:10%"><h3>Project description:</h3></td>
      <td style="line-height: 1.6; width:40%"> <?=$projectdescription?></td>
     

  </tr>
  <tr>
    <td ><h3>Chapters:</h3></td>
    <td>
    <?=$projectchapters?>
       
    </td>
   

</tr>
<tr>
    <td ><h3>Grade:</h3></td>
    <td>
    <?=$grade?>
       
    </td>
   

</tr>
<tr>
    <td ><h3>Feedback:</h3></td>
    <td>
    <?=$message?>
       
    </td>
   

</tr>

<tr><td><form action="{{url('finishproject')}}" method="post"> @csrf <button type="submit" onclick="finishcourse()" name="send">Finish project</button></form></td>
<td> <a href="workspace"><button >Workspace</button></td></tr></a>

  </table>
  
  
</div>



 <div  class="right" style="text-align: right" > <img src="images/wood-3350571_6402.jpg" height='100' width='200'style="margin-right:5%;margin-left:2%"></div></div>
<div style="background-color: #ffecec;">
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
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

 function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  
</script>
<script>
  function finishcourse() {
  if ( $('input[type="checkbox"]').not(':checked').length > 0 ) {
    alert('You need to complete all of the chapters')
  else: 
  course = Courses(name='Intellectual property', description='copyright laws',chapters='20',status='confirmed',user_id=current_user.id,completed='1')
  db.session.add(course)
  db.session.commit()
  flash('Finished course')
  }}
</script>
</body>
</html>