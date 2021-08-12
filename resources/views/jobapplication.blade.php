
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
<div id="headertext">Apply for job</div>
 </div>
</section  >

<div style="margin-bottom: 10%;">
  <table>
<form action="{{url('applyforjob')}}" method="post" enctype="multipart/form-data">
   
  @csrf
    <div class="container">
     <tr><td><label style="padding-bottom:20px" for="firstname"><b>First name:</b></label></td><td>      <input type="text" placeholder="Enter first name" name="firstname" min=1 max=50 required></td></tr>   

     <tr><td><label style="padding-bottom:20px" for="surname"><b>Surname:</b></label></td><td>      <input type="text" placeholder="Enter surname" name="surname" min=1 max=50 required></td></tr> 

    <tr><td> <label style="padding-bottom:20px" for="email"><b>Email address:</b></label></td><td>      <input type="email" placeholder="Enter email address" name="email" min=1 max=100 required></td></tr> 

  
     <tr><td><label for="phone"><b>Phone number:</b></label></td><td>      <input type="tel" placeholder="Enter phone number" name="phone" min=11 max=11 required></td></tr> 

     <tr><td><label for="address"><b>Address:</b></label></td><td>      <input type="text" placeholder="Enter address" name="address" min=1 max=50 required></td></tr> 

     <tr><td><label for="town"><b>Town:</b></label></td><td><input type="text" placeholder="Enter town" name="town" min=1 max=50 required>
     </td></tr> 
     <tr><td><label for="city"><b>City:</b></label></td><td><input type="text" placeholder="Enter city" name="city" min=1 max=50 required></td></tr> 
      
    <tr><td><label for="postcode"><b>Postcode:</b></label></td><td>      <input type="text" placeholder="Enter postcode" name="postcode" min=1 max=7 required></td></tr>  

    <tr><td style="display: inline-block; position: relative;margin-top:10%"><label for="qualifications"><b>Qualifications:</b></label></td><td>      <textarea rows='10' placeholder="Enter qualifications" name="qualifications" min=1 max=1000 required></textarea></td></tr>  

    <tr><td style="display: inline-block; position: relative;margin-top:10%"><label for="work"><b>Work experience:</b></label></td><td><textarea rows='10' placeholder="Enter work experience" name="workexperience" min=1 max=1000 required></textarea></td></tr>  
     <tr><td><label><h3>CV:</h3></label></td>
   
  <td> <input type="file" name="attachment" multiple accept=".doc,.docx,.pdf,.ppt,.pptx,.txt,.xlsx,image/*"></td></tr> 

      

  
     
      <tr><td><button   type="submit" name="apply">Apply </button><br></td></tr>
     
  
  
   
      
      
    
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

</body>
</html>