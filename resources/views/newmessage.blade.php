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
<div id="headertext">New message</div>
 </div>
</section  >

<div style="margin-left:5%;margin-bottom: 10%;">
<table>
<form action="{{url('sendmessage')}}" method="post" enctype="multipart/form-data">
   @csrf

    <div class="container">
<tr>   <p>
     <td> <h3> <label for="subject">Subject</label></h3></td><br>
       <td> <input type="text" name="subject" min=1 max=100></td><br>
        
    </p></tr> 
    
    <tr>   <p>
        <td style="display: inline-block; position: relative;margin-top:-1%">  <h3> <label for="message" style="display: inline-block; position: relative;margin-top:-19%">Message</label></h3></td><br>
          <td> <textarea name="message" cols="57" rows="10" id="message"></textarea></td><br>
           
       </p></tr>
       <tr><td> <h3> <label>Add attachment</label></h3>
 
        </td><td><input type="file" name="attachment" multiple accept=".doc,.docx,.pdf,.ppt,.pptx,.txt,.xlsx,image/*,.mp4"></td></tr> 
    <tr>   <p>
     <td>  <h3> <label for="sender">Sender name</label></h3></td><br>
       <td> <input type="text" name="sender" min=1 max=100></td><br>
       
    </p></tr> 
    <tr>   <p>
        <td>  <h3> <label for="recipient">Recipient name</label></h3></td><br>
          <td> <input type="text" name="recipient" min=1 max=100></td><br>
           
       </p></tr> 
   
           <tr><td>  <button type="submit" name="send">Send message</button></td></tr> 

      
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
 
</body>
</html>