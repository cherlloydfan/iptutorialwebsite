<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials</title>
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
<div id="headertext">Contact us</div>
 </div>
</section  >
<section  >
    <div  style=" margin:1%;padding:1%;padding-bottom: 20%;margin-bottom:40%;height:1200px">
    <div class="left"  >
        <h3 >Contact details</h3>
<p><img src="images/home (1).png" height='16' width='16'> Address</p>
        <p><img src="images/envelope (1).png" height='16' width='16'> Email</p>
        <p><img src="images/telephone.png" height='16' width='16'> Phone number</p>
        <h3 style="padding-top:20px">Social media</h3>
        <p><img src="images/facebook (1).png" height='16' width='16'> Facebook</p>
       <p> <img src="images/instagram (1).png" height='16' width='16'> Instagram</p>
        <p><img src="images/twitter (1).png" height='16' width='16'> Twitter</p>
        <div  style="margin-top:20px;padding-top:20px" id="box4" ></div>
        
 </div>
<div class="right" >
    <h3>Contact form</h3>
    <div class="container">
        <form action="{{url('sendform')}}" method="post">
        @csrf
        <table>
        <tr><td><label for="fname">First Name</label></td><td> <input type="text" id="firstname" name="firstname" placeholder="Your first name" style="font-family: 'Comfortaa', cursive;" min='1' max='100' required>
        </td></tr>  
      <tr><td> <label for="lname">Surname</label></td><td><input type="text" id="surname" name="surname" placeholder="Your surname" style="font-family: 'Comfortaa', cursive;" min='1' max='100' required></td></tr>
         
          
         <tr><td> <label for="phone">Phone </label></td><td><input type="tel" id="phone" name="phone" placeholder="Your phone number" style="font-family: 'Comfortaa', cursive;" min='1' max='11' required></td></tr>
          
         <tr><td><label for="email">Email </label></td><td><input type="email" id="email" name="email" placeholder="Your email address" style="font-family: 'Comfortaa', cursive;" min='1' max='100' required></td></tr> 
          
          
      
         <tr><td><label for="message">Message</label></td><td><textarea id="message" name="message" placeholder="Your message" style="height:200px;font-family: 'Comfortaa', cursive;" min='1' max='1000' required ></textarea></td></tr> 
          
      
         <tr><td><input type="submit" name="send" value="Send"></td></tr> 
        </table>
        </form>
      </div>

</div>

</section>
</div>
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