
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
        <p><img src='images/ 'width="30" height="30">IP tutorials</p>
        <ul>
            <li style="text-align:right;"> <a href="{{url('sponserdashboard')}}"> Home </a></li>
            <div class="dropdown">
                <button class="dropbtn">Work
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="{{url('tutorprojects')}}">Projects</a>
                  <a href="{{url('sessions')}}">Meetings</a>
                 
                
                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Other
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    
                      <a href="{{url('supportpage')}}">Support</a>
                      <a href="{{url('messages')}}">Messaging</a>
                      <a href="{{url('payment')}}">Payments</a>

                      <a href="{{url('sponserjobs')}}">Jobs</a>
                      <a href="{{url('community')}}">Community</a>
                      <a href="{{url('community')}}">Blog</a>
                      <a href="{{url('community')}}">Advertising</a>
                      <a href="{{url('content')}}">Webinars</a>
   
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
<div id="headertext">Add new job</div>
 </div>
</section  >

<div style="margin-left:5%;margin-bottom: 10%;">
  <table>
<form action="addjob" method="post" >
   @csrf
  
    <div class="container">
    
  <tr>   <p>
     <td>  <h3> <label for="jobname">Job name</label></h3></td><br>
       <td> <input type="text" name="jobname" min='1' max='100' required></td><br>
       
    </p></tr> 
    <tr>   <p>
     <td>  <h3> <label for="companyname">Company </label></h3></td><br>
       <td> <input type="text" name="companyname" min='1' max='100' required></td><br>
        
    </p></tr> 
    <tr>
    <p>
    <td><h3> <label for="jobdescription">Job description</label></h3></td> <br>
     <td><textarea name="jobdescription" cols="44" rows="10" id="description"></textarea></td> <br>
      
  </p></tr>
  <tr>
  <p>
   <td><h3> <label for="jobskills">Skills required</label></h3></td><br>
   <td> <input type="text" name="jobskills" min='1' max='1000' required></td><br>
    
</p></tr>
<tr>
  <p>
   <td><h3> <label for="jobdate">Deadline date to apply</h3></td><br>
   <td> <input type="datetime" name="jobdate" min='1' max='18' required></td><br>
    
</p></tr>
<tr>
  <p>
   <td><h3> <label for="jobhours">Job hours</h3></td><br>
   <td> <input type="text" name="jobhours" min='1' max='100' required></td><br>
    
</p></tr>
    <tr>
  <p>
   <td><h3> <label for="jobtype">Job type</h3></td><br>
   <td> <input type="text" name="jobtype" min='1' max='100' required>
   
</p></tr>
     <tr><td>  <p><input type="submit" name="send" value="Add job"></p></td></tr> 
       
      
    </div>
  
   
      
    
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