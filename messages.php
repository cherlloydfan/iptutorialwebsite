<?php include 'sendmessage.php';?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/courseprogress.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="studentdashboard.php"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="courseprogress.php">Courses</a>
                  <a href="projectprogress.php">Projects</a>
            
            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="jobprogress.php">Jobs</a>
            <a href="certificates.html">Certificates</a>
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
  
    
    <section>
        <div id="header" style="margin-bottom: 10%;">
     
       
               
         
         
         
   <div id="headertext">Messages</div>
    </div>
   </section  >
   <section  >
    <div  style=" margin:1%;padding:1%;padding-bottom: 5%;margin-bottom:5%">
      <table >
      <?php foreach ($files as $file): ?>
        <tr><td><h3 > To:</h3></td>
          <td> <?php echo $file['recipient']; ?></td></tr> 
        <tr><td> <h3 >Subject:</h3>   </td>
        <td><p ><?php echo $file['ticketname']; ?></p></td> 
        
       </tr>
   
    
         <tr> <td><h3 > Date:</h3></td> 
         <td> <?php echo $file['postingdate']; ?></td>
       </tr>
         
        <tr><td>  <h3 > Message:</h3></td> 
        <td> <?php echo $file['message']; ?></td>
       </tr>
       <tr><td style="width:10%">  <h3 > Attachment:</h3></td> 
       
        <td style="width:40%"><p style="display:inline"><?php echo $file['file']; ?></p><a href="messages.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
       </tr>
       <tr><td><h3 > From:</h3></td>
        <td> <?php echo $file['sender']; ?></td></tr> 
        <?php endforeach;?>
       </table>
      
           </div>
           <div style=" margin:1%;padding:1%;padding-bottom: 20%;margin-bottom:20%;margin-left:2%">
   <a href="newmessage.html"> <button>New message</button></a>
    </div>

</section>



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