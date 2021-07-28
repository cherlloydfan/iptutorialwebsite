<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentdashboard.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/content.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
    <div id="nav" >
        <p><img src='images/ 'width="30" height="30">IP tutorials</p>
        <ul>
            <li style="text-align:right;"> <a href="{{ url_for('sponserdashboard') }}"> Home </a></li>
            <div class="dropdown">
                <button class="dropbtn">Work
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="{{url_for('tutorprojects')}}">Projects</a>
                  <a href="{{url_for('sessions')}}">Meetings</a>
                 
                
                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Other
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    
                      <a href="{{url_for('supportpage')}}">Support</a>
                      <a href="{{url_for('messages')}}">Messaging</a>
              
                      <a href="{{url_for('sponserjobs')}}">Jobs</a>
                      <a href="{{url_for('community')}}">Community</a>
                      <a href="{{url_for('advertising')}}">Advertising</a>
                      <a href="{{url_for('webinars')}}">Webinars</a>
                      <a href="{{url_for('blog')}}">Blog</a> 
                    </div></div>
                    <div class="dropdown">
                        <button class="dropbtn">Account
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="{{url_for('studentprofile')}}">Profile</a>
                          <a href="{{url_for('studentaccount')}}">Account details</a>
                          <a href="{{url_for('studentsettings')}}">Settings</a>
                          <a href="{{url_for('logout')}}">Log out</a>
                          
                        </div></div>
           
        </ul>
    </div>
    
 <!-- <div id="background"> -->
 <section>
     <div id="header" style="margin-bottom: 10%;">
<div id="headertext">Webinars</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 5%;margin-right: 5%;">


<div class="row">
    <div class="column">
        <img src="{{url_for('static', filename='images/movie.jpg')}}" width="100" height="100">
        <h3 class='name'>Webinar name</h3>

    </div>
    <div class="column">
   <img src="{{url_for('static', filename='images/movie.jpg')}}" width="100" height="100" >
        <h3 class="name">Webinar name</h3>
    
    </div>
    <div class="column">
      <img src="{{url_for('static', filename='images/movie.jpg')}}" width="100" height="100" >
        <h3 class="name">Webinar name</h3>
       
    </div>
    <div class="column">
       <img src="{{url_for('static', filename='images/movie.jpg')}}" width="100" height="100">
        <h3 class="name">Webinar name</h3>
   
    </div>
  </div>
  <div style="margin-top:10%">
  <form method="post" action="/upload" enctype="multipart/form-data"> 

  <h3 style="display:inline-block;padding-right:2%">Upload files:</h3>
 
 <input type="file" name="inputFile" multiple accept=".doc,.docx,.pdf,.ppt,.pptx,.txt,.xlsx,image/*,.mp4">
 <button type="submit" style="display:inline-block">Upload</button> </form>
 {% with messages = get_flashed_messages() %}
 {% if messages %}
 <ul>
     {% for message in messages %}
     <li>{{ message }}</li>
     {% endfor %}
 </ul>
 {% endif %}
 {% endwith %}
 {% block content %}{% endblock %}
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