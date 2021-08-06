<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tutorialwebsite';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT projectname,projectdescription,projectchapters FROM users WHERE id = 2');

$stmt->execute();
$stmt->bind_result($projectname,$projectdescription,$projectchapters);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/courseprogress.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;">  <a class="active" href="{{url('index')}}"> Home </a></li>
        <li style="text-align:right;">  <a href="{{url('courses')}}"> Courses </a></li>
       <li style="text-align:right;">  <a href="{{url('projects')}}"> Projects </a></li>
       <li style="text-align:right;">   <a href="{{url('login')}}"> Log in </a></li>
        <li style="text-align:right;">   <a href="{{url('aboutus')}}"> About us </a></li>
     <li style="text-align:right;">   <a href="{{url('contactus')}}"> Contact us </a></li>
       
    </ul>
</div>
 <!-- <div id="background"> -->
 <section>
     <div id="header" style="margin-bottom: 10%;">
<div id="headertext">Project details</div>
 </div>
</section  >
<div>
  <table style="margin-left:5%;margin-bottom: 10%;">
    
      <tr> 
        <td><h3>Project name:</h3></td>
        <td><?=$projectname?></td>
       
 
    </tr>
    <tr>
      <td style="width:10%"><h3>Project description:</h3></td>
      <td style="width:40%"><?=$projectdescription?></td>
     

  </tr>
  <tr>
    <td><h3>Chapters:</h3></td>
    <td><?=$projectchapters?></td>
    
   

</tr>
<tr>
  <td style="display: inline-block; position: relative;margin-top:3%" ><h3>Video:</h3></td>
  <td><div style="display: inline-block;"   ><video width="180" height="100" controls>
    <source src="files/Sample_Video1.mp4 " type="video/mp4">
   
  Your browser does not support the video tag.
  </video></div></td>
 

</tr>

<tr><td><h3>Join project:</h3></td><td><form method="post" action="{{url('joinproject')}}"> @csrf <input style="width:100px" type="submit" name="send" id="joincourse" value="Join project"></input></form></td></tr>



  </table>
  </div>
  <div style="margin-left:5%;margin-bottom:10%">
  
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