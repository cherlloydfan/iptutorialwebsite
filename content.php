<?php include 'sendmessage.php';?>
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
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="tutordashboard.php"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="tutorcourses.php">Courses</a>
              <a href="tutorprojects.php">Projects</a>
              <a href="sessions.php">Sessions</a>
              <a href="content.php">Content</a>
              <a href="meeting.html">Meeting</a>
            
            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
                      <a href="supportpage.html">Support</a>
                      <a href="messages.php">Messages</a>
                      <a href="payment.php">Payments</a>

                      <a href="community.php">Community</a>



                </div></div>
                <div class="dropdown">
                    <button class="dropbtn">Account
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="studentprofile.php">Profile</a>
                      <a href="studentaccount.php">Account details</a>
                      <a href="studentsettings.html">Settings</a>
                      <a href="logout.php">Log out</a>
                      
                    </div></div>
       
    </ul>
</div>
    
 <!-- <div id="background"> -->
 <section>
     <div id="header" style="margin-bottom: 10%;">
<div id="headertext">Content</div>
 </div>
</section  >
<div style="margin-bottom: 10%;padding-bottom: 15%;margin-left: 5%;margin-right: 5%;">

<h3>Files:</h3>
<?php foreach ($files as $file): ?>
<div class="row">
    <div class="column">
        <img src="images/pdf.jpg" width='100' height='100' >
        <h3 class='name'>File name</h3>
        <?php echo $file['file']; ?></p><a href="content.php?file_id=<?php echo $file['id'] ?>">Download</a>
    </div>
    <div class="column">
   <img src="images/pdf.jpg"  width='100' height='100' >
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content.php?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
    <div class="column">
      <img src="images/pdf.jpg"  width='100' height='100' >
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content.php?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
    <div class="column">
       <img src="images/pdf.jpg"  width='100' height='100'>
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content.php?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
  </div>     <?php endforeach;?>
  <div style="margin-top:10%">
  <form method="post" action="uploadfiles1.php" enctype="multipart/form-data"> 

  <h3 style="display:inline-block;padding-right:2%">Upload files:</h3>
 
  <input type="file" name="attachment" multiple accept=".doc,.docx,.pdf,.ppt,.pptx,.txt,.xlsx,image/*,.mp4">
 <button type="submit" name="send" style="display:inline-block">Upload</button> </form>

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

</body>
</html>