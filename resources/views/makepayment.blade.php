
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <link rel="stylesheet" href="css/helpform.css">
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
<div id="headertext">Make a payment</div>
 </div>
</section  >

<div style="margin-left:5%;margin-bottom: 10%;">
  <table>
<form action="{{url('makepayment')}}" method="post" >
   
  @csrf
    <div class="container">
      
  <tr>   <p>
     <td> <h3>  <label for="firstname">First name</label></h3</td><br>
       <td><input type="text" name="firstname" min='1' max='100' required></td><br>
        
    </p></tr> 
    <tr>   <p>
        <td>  <h3> <label for="surname">Surname</label></h3></td><br>
          <td> <input type="text" name="surname" min='1' max='100' required></td><br>

       </p></tr> 
       <tr>   <p>
        <td> <h3> <label for="address">Address</label></h3></td><br>
          <td> <input type="text" name="address" min='1' max='100' required></td><br>

       </p></tr> 
       <tr>   <p>
        <td>  <h3> <label for="town">Town</label></h3></td><br>
          <td> <input type="text" name="town" min='1' max='100' required></td><br>

       </p></tr> 
       <tr>   <p>
        <td>  <h3> <label for="city">City</label></h3></td><br>
          <td> <input type="text" name="city" min='1' max='100' required></td><br>
 
       </p></tr> 
       <tr>   <p>
        <td>  <h3> <label for="postcode">Postcode </label></h3></td><br>
          <td> <input type="text" name="postcode" min='1' max='8' required></td><br>
   
       </p></tr> 
       <tr>   <p>
        <td> <h3>  <label for="phone">Phone number</label></h3></td><br>
          <td> <input type="tel" name="phone" min='1' max='11' required></td><br>
           
       </p></tr> 
       <tr>   <p>
        <td> <h3>  <label for="email">Email address</label></h3></td><br>
          <td> <input type="email" name="email" min='1' max='100' required></td><br>
           
       </p></tr> 
       <tr>   <p>
        <td>  <h3> <label for="service">Service</label></h3></td><br>
          <td> <input type="text" name="service" min='1' max='100' required></td><br>

       </p></tr> 
       <tr>   <p>
        <td>   <h3><label for="amount">Amount</label></h3></td><br>
          <td> <input type="number" name="amount" min="1" step="any"  required ></td><br>
          
       </p></tr> 
    <tr>
    <p>
    <td><h3> <label for="cardno">Card number</label></h3></td> <br>
     <td><input type="number" name="cardno" min="1" step="any"  required></td> <br>
   
  </p></tr>
  <tr>
  <p>
   <td><h3> <label for="expirydate">Expiry date</label></h3></td><br>
   <td> <input type="text" name="expirydate" min='4' max='17' required></td><br>
   
</p></tr>
<tr>   <p>
    <td> <h3>  <label for="securitycode">Security code</label></h3></td><br>
      <td> <input type="number" name="securitycode" min='1'  required></td><br>
       
   </p></tr> 
  
    
     <tr><td>  <p><input type="submit" name="send" value="Make payment"></p></td></tr> 
       
      
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