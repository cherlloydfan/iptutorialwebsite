<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/courseprogress.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title>IP tutorials </title>
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
<div id="headertext">Certificates</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 5%;margin-right: 5%;">

<h3 >Certificates:</h3>
<embed src="files/IPT-DummyCertificate.pdf"type="application/pdf" width="200px" height="400px" />

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