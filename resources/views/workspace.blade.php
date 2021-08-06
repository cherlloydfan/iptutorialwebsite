<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/courseprogress.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<div id="headertext">Workspace</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 5%;margin-right: 5%;">
<table>
<th><h3 style="text-align:left">Chapter 1</h3></th>
<tr><td><h3 >Documents:</h3></td><td><embed src="files/Chapter1.pdf"type="application/pdf" width="200px" height="400px" /></td></tr>
<tr><td><h3>Video:</h3></td><td><video width="200" height="100" controls>
    <source src="files/Jun 21 SimDH Webinar - Google Slides.mp4 " type="video/mp4">
   
  Your browser does not support the video tag.
  </video></td></tr>
   <tr><td><h3 >Quiz:</h3></td><td>
  <a href="quiz"><button  >Do quiz</button></a></td></tr>
  <th><h3 style="text-align:left">Chapter 2</h3></th>
<tr><td><h3 >Documents:</h3></td><td><embed src="files/Chapter2.pdf"type="application/pdf" width="200px" height="400px" /></td></tr>
<tr><td><h3>Video:</h3></td><td><video width="200" height="100" controls>
    <source src="files/Jun 21 SimDH Webinar - Google Slides (1).mp4 " type="video/mp4">
   
  Your browser does not support the video tag.
  </video></td></tr>
   <tr><td><h3 >Quiz:</h3></td><td>
  <a href="quiz"><button  >Do quiz</button></a></td></tr>
  <th><h3 style="text-align:left">Chapter 3</h3></th>
<tr><td><h3 >Documents:</h3></td><td><embed src="files/Chapter3.pdf"type="application/pdf" width="200px" height="400px" /></td></tr>
<tr><td><h3>Video:</h3></td><td><video width="200" height="100" controls>
    <source src="files/Jun 21 SimDH Webinar - Google Slides (2).mp4 " type="video/mp4">
   
  Your browser does not support the video tag.
  </video></td></tr>


 <tr><td><h3 >Quiz:</h3></td><td>
  <a href="quiz"><button  >Do quiz</button></a></td></tr>
  
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

    <script>
     /*  $(document).ready(function() {
    $('#btnSaveCheckBox').click(function() {
        addCheckbox($('#checkBoxName').val());
        $('#checkBoxName').val("");
    });

    $(document).on('change', 'input[type="checkbox"]', updateProgress);

    $("#myBar").progressbar({
        value: 0,
        max: 100
    });        
});

function updateProgress() {
    var numAll = $('input[type="checkbox"]').length;
    var numChecked = $('input[type="checkbox"]:checked').length;

    if (numAll > 0) {
        var perc = (numChecked / numAll) * 100;
        $("#myBar").progressbar("value", perc);
    }
} */
/* $(document).ready(function() {
  var $checkboxes = $('.checkbox');
  var $progress = $('#CheckProgress');
  var total = $checkboxes.length;
  
  $checkboxes.on('change', function() {
    var checked = $checkboxes.filter(':checked').length;
    var progressWidth = (checked / total) * 100;
    $('#myBar').css('width', progressWidth + '%');
  });
}); */
$(document).ready(function() {
  
  // get box count
  var count = 0;
  var checked = 0;
  function countBoxes() { 
    count = $("input[type='checkbox']").length;
    console.log(count);
  }
  
  countBoxes();
  $(":checkbox").click(countBoxes);
  
  // count checks
  
  function countChecked() {
    checked = $("input:checked").length;
    
    var percentage = parseInt(((checked / count) * 100),10);
    $("#myBar").progressbar({
            value: percentage
        });
    $(".progressbar-label").text(percentage + "%");
  }
  
  countChecked();
  $(":checkbox").click(countChecked);
});
    </script>
</body>
</html>