
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <link rel="stylesheet" href="css/signup.css">
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
<div id="headertext">Sponser sign up</div>
 </div>
</section  >

<div style="margin-bottom: 10%;height:1100px">
<form action="{{url('server3')}}" method="post" >
   @csrf
  <table>
    <div class="container">

       <tr><td> <label style="padding-bottom:20px"  for="firstname"><b>* First name:</b></label></td>
    <td>  <input type="text" placeholder="Enter first name" name="firstname" required minlength='2' maxlength='20' onkeyup="allLetter(this)"  pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter letters only. ')"></td></tr>
 
     <tr><td> <label style="padding-bottom:20px" for="surname"><b>* Surname:</b></label></td>
     <td> <input type="text" placeholder="Enter surname" name="surname" required minlength='2' maxlength='20' onkeyup="allLetter(this)"  pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter letters only. ')" ></td></tr>
   
      <span id="name_status"></span>
     <tr><td> <label for="email"><b>* Email address:</b></label></td>
    <td>  <input type="email" placeholder="Enter email address" id= "email" name="email" required  minlength='2' maxlength='50' onkeyup="checkemail();"></td></tr>
   
      <?php if (isset($email_error)): ?>
      <span><?php echo $email_error; ?></span>
      <?php endif ?>
      <span id="name_status"></span> 
      <span></span></br>
      <span id="email_status"></span>
    <tr><td>  <label style="padding-bottom:20px" for="username" ><b>* Username:</b></label></td>
     <td> <input type="text" placeholder="Enter Username" name="username"  id="username" onfocusout="checkname();" required minlength='2' maxlength='20' onkeyup="checkname();"></td></tr>

      <?php if (isset($name_error)): ?>
      <span><?php echo $name_error; ?></span>
      
      <?php endif ?>
      <span></span>
      <span id="name_status"></span>
    <tr><td>  <label for="password"><b>* Password:</b>
      </label></td>
      
      <td><input type="password" placeholder="Enter Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"minlength='8' maxlength='20' oninvalid="this.setCustomValidity('Password must be between 8-20 characters, have at least 1 number, a capital letter and a special character')"
  oninput="this.setCustomValidity('')" ></td></tr>
     
 <td> <label for="confirmpassword"><b>* Confirm password:</b></label></td>
    <td>  <input type="password" placeholder="Confirm Password" name="confirmpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength='8' maxlength='20'   oninvalid="this.setCustomValidity('Password must be between 8-20 characters, have at least 1 number, a capital letter and a special character')"
  oninput="this.setCustomValidity('')"></td></tr>

      <div style="color:red" id="error_message"></div>
      <div  style="color:red" id="error_msg"></div>
    </table>
      <button type="submit" name="signup" value="signup" id="signup"  onclick="CheckPassword(document.signupform.password);validateEmail(document.signupform.email);validation(document.signupform.firstname,surname,email,username,password,confirmpassword);checkname(document.signupform.username);validateForm();checkemail(document.signupform.email);ValidateEmail(document.signupform.email);validatesurname(document.signupform.surname);validatefirstname(document.signupform.firstname);Validatename(document.signupform.firstname)" onsubmit="return validateForm();">Sign up</button><br>
      <label>
       
        <p >Already got an account? <a  href="login.html">Login here</a></p>
      
      </label>
    </div>
  
  
   
      
      
    
  </form>

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