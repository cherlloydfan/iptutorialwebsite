<?php 
$conn = mysqli_connect('localhost', 'root', '', 'tutorialwebsite');
session_start();

$sql = "SELECT * FROM users where id=26";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    
    $sql = "SELECT * FROM users WHERE id=26";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'files/' . $file['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('files/' . $file['file']));
        readfile('files/' . $file['file']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE users SET downloads=$newCount WHERE id=26";
        mysqli_query($conn, $updateQuery);
        exit;
    } }?>
<!doctype html>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentdashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&display=swap" rel="stylesheet">

<title> IP tutorials </title>
</head>
<body >
<div id="nav" >
    <p><img src=' 'width="30" height="30">IP tutorials</p>
    <ul>
        <li style="text-align:right;"> <a href="{{url('tutordashboard')}}"> Home </a></li>
        <div class="dropdown">
            <button class="dropbtn">Work
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{url('tutorcourses')}}">Courses</a>
              <a href="{{url('tutorprojects')}}">Projects</a>
              <a href="{{url('sessions')}}">Sessions</a>
              <a href="{{url('content')}}">Content</a>

            </div></div>
            <div class="dropdown">
                <button class="dropbtn">Other
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                
          
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
        <?php echo $file['file']; ?></p><a href="content?file_id=<?php echo $file['id'] ?>">Download</a>
    </div>
    <div class="column">
   <img src="images/pdf.jpg"  width='100' height='100' >
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
    <div class="column">
      <img src="images/pdf.jpg"  width='100' height='100' >
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
    <div class="column">
       <img src="images/pdf.jpg"  width='100' height='100'>
        <h3 class="name">File name</h3>
        <?php echo $file['file']; ?></p><a href="content?file_id=<?php echo $file['id'] ?>">Download</a>    </div>
  </div>     <?php endforeach; ?>
  <div style="margin-top:10%">
  <form method="post" action="{{url('uploadfiles1')}}" enctype="multipart/form-data"> 
  @csrf
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
