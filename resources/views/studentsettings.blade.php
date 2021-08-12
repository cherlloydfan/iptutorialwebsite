
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/studentsettings.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
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
<div id="headertext">Settings page</div>
 </div>
</section  >
<div  style="margin-left:5%;margin-bottom: 10%;">
  
     <form action="{{url('update5')}}" method="post" >
  @csrf
   
    <div class="container" >
    <table>
     <div style="padding-bottom:5%">
      <tr><td>  <h3>Change password:</h3></td></tr>
     
     <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Password:</label></td>
    <td> <input type="password" name="password" id="password"  minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*[0-9])(?=.*[A-Z]).{8,20}" oninvalid="this.setCustomValidity('Password must be between 8-20 characters, have at least 1 number, a capital letter and a special character')"
  oninput="this.setCustomValidity('')"> </input></td></tr>
    </div><br>
      <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Confirm password:</label></td>
    <td> <input type="password" name="confirmpassword" id="confirmpassword"  minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*[0-9])(?=.*[A-Z]).{8,20}" oninvalid="this.setCustomValidity('Password must be between 8-20 characters, have at least 1 number, a capital letter and a special character')"
  oninput="this.setCustomValidity('')"> </input></td></tr>
    </div><br>
       <div style="padding-bottom:5%">
  <tr><td>
        <h3> Change email address:</h3></td></tr>
       <tr>
       <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Email address:</label></td>
     <td><input type="email" name="email" id="email"  minlength="2" maxlength="50" onkeyup="checkemail();"  pattern="^[a-zA-Z0-9]+(\.[_a-zA-Z0-9]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,15})$"   > </input></td></tr>
      </div><br>
         <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Confirm email address:</label></td>
     <td><input type="email" name="confirmemail" id="confirmemail"  minlength="2" maxlength="50" onkeyup="checkemail();"  pattern="^[a-zA-Z0-9]+(\.[_a-zA-Z0-9]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,15})$"   > </input></td></tr>
      </div><br>
       <tr><td> <button style=" width:100px; margin-right:2%" type="submit" name="edit" id="edit" value="signup" id="signup"  onclick="CheckPassword(document.signupform.password);validateEmail(document.signupform.email);validation(document.signupform.firstname,surname,email,username,password,confirmpassword);checkname(document.signupform.username);validateForm();checkemail(document.signupform.email);ValidateEmail(document.signupform.email);validatesurname(document.signupform.surname);validatefirstname(document.signupform.firstname);Validatename(document.signupform.firstname)" onsubmit="return validateForm();" >Save details</button></td></tr>

</p></tr></td>
 </div>
</table>
</form>
<table>
  <div style="padding-bottom:5%">
  <tr><td>
         <h3>Verify account:</h3></td></tr>
         <form action="{{url('verify')}}" method="POST"> @csrf
        <tr><td style="width:220px"> <label style="margin-right:6.3%">Enter email address:</label></td><td><input style="margin-right:2%;" type="email" name="email"></td></tr>
       <tr><td>  <input type="submit" name="verify" value="Verify account"></td></tr></form>
       
  </div>
  </table>
  <table>
  <div style="padding-bottom:5%">
      <tr><td> <h3>Login activity:</h3></td></tr>
      <tr><td> <b><u><i><p style="display: inline-block; margin-right:13%;text-decoration: underline;">Location:</p></i></u></b></td><td> <button type="button" onclick="getLocation()" style="margin-right:20px;width:100px">Get location</button><p style="display: inline-block;line-height:1.6" id="location"></p><br></td></tr>
      <tr><td> <b><u><i><p style="display: inline-block; margin-right:12%;text-decoration: underline;">Date/Time:</p></i></u></b></td><td><p style="display: inline-block;"> <?php
echo  date("d/m/y h:i:sa"); 

?></p><br></td></tr>
      <tr><td> <b><u><i><p style="display: inline-block; margin-right:14.5%;text-decoration: underline;">Device:</p></i></u></b></td><td><p style="display: inline-block;"> <input style="width:100px" type="button" OnClick="DetectIphone()" value="Check device" /></p><p style="display: inline-block;line-height:1.6;width:200px" id="device"></p></td></tr>
 
        </div>
        </table>
 
 
  
    
   
 
    
  

<table>
<div style="padding-bottom:5%">
    <tr><td>  <h3>Delete account:</h3></td></tr>
<form action="{{url('delete')}}" method="post">
 @csrf
  <tr><td> <p><input type="submit" id="deleteaccount" name="deleteaccount" value="Delete account" onclick="confirm()"></p></td></tr>
    
</form>

<p id="demo"></p>
</div>
</table>

</div></div>
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
function confirm() {
  var txt;
  if (confirm("Are you sure that you want to delete your account?")) {
     id = 8
    user = User2.query.filter(id == id).first()
    
    
   
    db.session.delete(user)
    db.session.commit()

    txt = "Account deleted!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
<script>
var x = document.getElementById("location");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<script>
  var x = document.getElementById("device");

    function DetectIphone()
    {
       var uagent = navigator.userAgent.toLowerCase();
       
       x.innerHTML = "Device name:" + uagent; 
    }
</script>
</body>
</html>