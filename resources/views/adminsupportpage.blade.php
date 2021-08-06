<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tutorialwebsite';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT ticketname,jobdate,message,firstname,surname,email,phone,progress,assignedto FROM users WHERE id = 24');

$stmt->execute();
$stmt->bind_result($ticketname,$jobdate,$message,$firstname,$surname,$email,$phone,$progress,$assignedto);
$stmt->fetch();
$stmt->close();
?>

<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/courseprogress.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="{{url('admindashboard')}}"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Information
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
             <a href="{{url('tutorcourses')}}">Courses</a>
              <a href="{{url('tutorprojects')}}">Projects</a>
              <a href="{{url('studentprofile')}}">Students</a>
              <a href="{{url('studentprofile')}}">Tutors</a>
              <a href="{{url('payment')}}">Payments</a>

            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
                       <a href="{{url('adminsupportpage')}}">Support</a>
          <a href="{{url('courserequests')}}">Course requests </a>
          <a href="{{url('messages')}}">Messages</a>
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
  
    
            
      
      
      
<div id="headertext">Support tickets</div>
 </div>
</section  >
<div style="margin-left:5%;margin-bottom: 10%;"  >
  
<table >
     
     <tr><td> <h3 >Ticket name:</h3>   </td>
     <td><p ><?=$ticketname?></p></td> 
     
    </tr>

 
      <tr> <td><h3 > Date/time:</h3></td> 
      <td><?=$jobdate?> </td>
    </tr>
    
       <tr> <td><h3 > Message:</h3></td>
       <td> <?=$message?></td>
    </tr>
     <tr><td>  <h3 > Name:</h3></td> 
     <td> <?=$firstname?></td>
    </tr>
       <tr><td><h3 > Email address:</h3></td>
       <td> <?=$email?></td></tr> 
       <tr><td><h3 > Phone number:</h3></td>
        <td> <?=$phone?></td></tr>
     <tr> <td><h3 > Progress:</h3></td>
       <td> <?=$progress?></td>
    </tr>
    
       <tr><td><h3 > Assigned to:</h3></td>
       <td> <?=$assignedto?></td></tr> 
      <form method="POST" action="{{url('adminsupportpage1')}}">
      @csrf
        <tr>   <p>
     <td >  <h3> <label>Response: </label></h3></td>
       <td > <textarea name=response rows=10 min='1' max='1000'></textarea></td>
  </tr> 
  
        
 <tr><td>  <p><input type='submit' value="Send" name="send" ></p></td></tr> 
 </form>
      
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
 
</body>
</html>