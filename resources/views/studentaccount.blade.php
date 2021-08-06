
<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/studentaccount.css">
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
<div id="headertext">Account details</div>
 </div>
</section  >
<div style="margin-left:5%;margin-bottom: 10%; ">

 <form id='update' action="{{url('update4')}}" method="post" onsubmit=" return validateForm();checkall();" name="signupform" id="signupform">
 @csrf    
 <table>
    <div style="padding-bottom: 15px;">
  <tr><td> <label style="display: inline;">First name:</label></td>
      <td> <input type="text" name="firstname" id="firstname" minlength="2" maxlength="20"  onkeypress="return /[a-z]/i.test(event.key)" > </input></td></tr>
      </div><br>
      <div style="padding-bottom: 15px;">
       <tr><td> <label style="display: inline;">Surname:</label></td>
         <td> <input type="text" name="surname" id="surname" minlength="2" maxlength="20" onkeypress="return /[a-z]/i.test(event.key)" >  </input></td></tr>
         </div><br>
      <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Email address:</label></td>
     <td><input type="email" name="email" id="email"  minlength="2" maxlength="50" onkeyup="checkemail();"  pattern="^[a-zA-Z0-9]+(\.[_a-zA-Z0-9]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,15})$"   > </input></td></tr>
      </div><br>
      <?php if (isset($email_error)): ?>
      <span><?php echo $email_error; ?></span>
      <?php endif ?>
    <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Username:</label></td>
       <td><input type="text" name="username" id="username"  minlength="2" maxlength="20"  > </input></td></tr>
      </div><br>
      <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Password:</label></td>
    <td> <input type="password" name="password" id="password"  minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*[0-9])(?=.*[A-Z]).{8,20}" oninvalid="this.setCustomValidity('Password must be between 8-20 characters, have at least 1 number, a capital letter and a special character')"
  oninput="this.setCustomValidity('')"> </input></td></tr>
    </div><br>
    <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Address:</label></td>
      <td> <input type="text" name="address" id="address"  minlength="2" maxlength="50"  > </input></td></tr>
      </div><br>
            <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Town:</label></td>
    <td> <input type="text" name="town" id="town"  minlength="2" maxlength="20"  >  </input></td></tr>
     </div><br>

     <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">City:</label></td>
       <td><input type="text" name="city" id="city"  minlength="2" maxlength="20" onkeypress="return /[a-z]/i.test(event.key)" >  </input></td></tr>
       </div><br>

       <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Postcode:</label></td>
     <td><input type = "text" name="postcode" id="postcode"  minlength="6" maxlength="20" pattern="^([A-Z]{1,2}\d[A-Z\d]? ?\d[A-Z]{2}|GIR ?0A{2})$" oninvalid="this.setCustomValidity('Please type in a valid postcode')"
  oninput="this.setCustomValidity('')" > </input></td></tr>
     </div><br>

     <div style="padding-bottom: 15px;">
     <tr><td><label style="display: inline;">Country:</label></td>
       <td><input type="text" name="country" id="country"  minlength="2" maxlength="50" onkeypress="return /[a-z]/i.test(event.key)" >  </input></td></tr>
       </div><br>

     <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Phone number:</label></td>
      <td> <input type="text" pattern="\d*" name="phone" id="phone"  minlength="11" maxlength="11" oninvalid="this.setCustomValidity('Please type in a valid phone number')"
  oninput="this.setCustomValidity('')" > </input></td></tr>
       </div><br>

       <div style="padding-bottom: 15px;">
    <tr><td> <label style="display: inline;">Work experience:</label></td>
     <td><input type="text" name="experience" id="experience"  minlength="2" maxlength="50" > </input></td></tr>
     </div><br>
    
     <div style="padding-top:20px;padding-bottom:20px;"> 
     <?php if(!empty($_SESSION['msg'])) { ?>
    <div>
      <?=$_SESSION['msg']?>
    </div>
    <?php 
      unset($_SESSION['msg']);  
    } 
    ?>
     </div>
     <div style="margin-left:15%; padding-bottom:10%">
   <tr><td> <button style=" width:100px; margin-right:2%" type="submit" name="edit" id="edit" value="signup" id="signup"  onclick="CheckPassword(document.signupform.password);validateEmail(document.signupform.email);validation(document.signupform.firstname,surname,email,username,password,confirmpassword);checkname(document.signupform.username);validateForm();checkemail(document.signupform.email);ValidateEmail(document.signupform.email);validatesurname(document.signupform.surname);validatefirstname(document.signupform.firstname);Validatename(document.signupform.firstname)" onsubmit="return validateForm();" >Save details</button></td></tr>

   
</div>



</table>
</form>
    
</div>

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