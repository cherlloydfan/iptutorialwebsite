<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/courses.css">
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
<div id="headertext">Projects</div>
 </div>
</section  >

<section>
    <div class="courses">

<div class="row">
    <div class="column">
        <div id="box2"></div>
        <h3>Project name</h3>
        <p>Project description</p>
        <a href="projectdetails2"><button >More details</button></a>
    </div>
    <div class="column">
        <div id="box2"></div>
        <h3>Project name</h3>
        <p>Project description</p>
        <a href="projectdetails2"><button >More details</button></a>
    </div>
</div>
<div class="row">
    <div class="column">
         <div id="box2"></div>
        <h3>Project name</h3>
        <p>Project description</p>
        <a href="projectdetails2"><button >More details</button></a>
    </div>
    <div class="column">
        <div id="box2"></div>
        <h3>Project name</h3>
        <p>Project description</p>
        <a href="projectdetails2"><button >More details</button></a>
    </div>
  </div>
 
</div>
</section>
    
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