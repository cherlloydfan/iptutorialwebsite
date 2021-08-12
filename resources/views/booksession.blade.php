<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/helpform.css')}}">
   
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
<div id="headertext">Book session</div>
 </div>
</section  >
<div style="margin-left:5%;margin-bottom: 10%;">
<table>
    <form method='post' action="{{url('booksession')}}">
    @csrf 
    <div class="container">
     
  <tr>   <p>
     <td> <h3>  <label for="sessionname">Session name</label></h3></td><br>
       <td> <input type="text" name="sessionname" min='1' max='100' required></td><br>
        
    </p></tr> 
 
  <tr>   <p>
     <td>  <h3> <label for="date">Date</label></h3></td><br>
       <td> <input type="date" name="date" min='1' max='8' required></td><br>
       
    </p></tr> 
     <tr>   <p>
     <td><h3>   <label for="time">Time</label></h3></td><br>
       <td> <input type="time" name="time" min="1" max="6" required></td><br>
        
    </p></tr> 
     <tr>   <p>
     <td>  <h3> <label for="duration">Duration</h3></td><br>
       <td><input type="text" name="duration" min='1' max='100' required></td><br>
        
    </p></tr> 
     <tr>   <p>
     <td>  <h3> <label for="coursename">Course name</h3></td><br>
       <td> <input type="text" name="coursename" min='1' max='100' required></td><br>
        
    </p></tr> 
    
<tr><td>  <p><input type="submit" name="send" value="Book session"></p></td></tr> 

</div>
</form>
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