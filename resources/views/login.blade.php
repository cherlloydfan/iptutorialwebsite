
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
  
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
<div id="headertext">Login</div>
 </div>
</section  >

<div style="margin-bottom: 10%;height:800px">
  <div class="left">
    <form action="{{url('authenticate')}}" method="post" >
   
    @csrf
    <div class="container">
    <table>
      <tr><td><label for="username">Username:
        
      </label></td>
      <td><input style="width:170px"  type="text" name="username" placeholder="Username" id="username" required></td></tr>
      <tr><td><label for="password">Password:
       
      </label></td>
      <td><input style="width:170px" type="password" name="password" placeholder="Password" id="password" required><br></td>
     <tr><td> <input type="submit" value="Login"></td>
       <td> <p style="display:inline;"><input type="checkbox" checked="checked" name="remember"> Remember me</p></td></tr></table>
 <p class="forgotpassword"  >Forgot <a href="#">password?</a></p>
                    <p class="noaccount" >Not got an account?</p><p> <a href="studentsignup"> Student's sign up here</a></p>
            <p class="tutorsignup" > <a href="tutorsignup"> Tutor's sign up here</a></p>
  <p class="tutorsignup" > <a href="sponsersignup"> Sponser's sign up here</a></p>
          
          </label>
    </div>
  
   
      
      
    
  </form>
  
</div>
  <div class="right"id="box" style="text-align: right;" ></div>
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