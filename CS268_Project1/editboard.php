<?php
session_start();
if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
    die(header("Location: 404.php"));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OmTech</title>
  <link rel="icon" type="image/x-icon" href="images/myIcon.ico">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/meetTheboard.css">
  <script type="text/javascript" src = "my-react-app\src\pages\index.js"></script>
</head>

<body>
  <header>
    <img class="logo" src="images/omtech_old_logo_2.png" alt="OmTech Logo">
    <h2>Organization for Minorities in TECHnology</h2>
  </header>
  <div class="header">
        <div class="navBar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="meettheboard.html">Board</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="loginpage.php">Admin Login</a></li>
            </ul>
        </div>
        <div class="dropDown">
            <button class="menuButton">Menu</button>
            <div class="dropDownChild">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="meettheboard.html">Board</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="loginpage.php">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </div>
<div class="pageHeader">
  <h1>Choose Which Member to Edit:</h1>
</div>
<div class="cards">
  <div class="card">
      <img class="pic" src="images/katie_headshot.jpg" alt="OmTech President">
      <div class="content">
          <h2>President:</h2>
          <h3>Katie Brand</h3>
      </div>
      <div class = "footer">
          <h5><a class = "execLink" href="editpres.php">Edit the President!</a></h5>
      </div>
  </div>
  <div class="card">
      <img class="pic" src="images/laura_headshot.jpg" alt="OmTech VP & Treasurer">
      <div class="content">
          <h2>Vice President</h2>
          <h3>Laura Pryor</h3>
      </div>
      <div class = "footer">
          <h5><a class = "execLink" href="editvp.php">Edit the Vice President!</a></h5>
      </div>
  </div>
  <div class="card">
      <img class="pic" src="images/hannah_headshot.jpg" alt="OmTech Secretary">
      <div class="content">
          <h2>Secretary:</h2>
          <h3>Hannah Good</h3>
      </div>
      <div class = "footer">
          <h5><a class = "execLink" href="editsecretary.php">Edit the Secretary!</a></h5>
      </div>
  </div>
  <div class="card">
    <img class="pic" src="images/laura_headshot.jpg" alt="OmTech VP & Treasurer">
    <div class="content">
        <h2>Treasurer:</h2>
        <h3>Laura Pryor</h3>
    </div>
    <div class = "footer">
        <h5><a class = "execLink" href="edittreasurer.php">Edit the Treasurer!</a></h5>
    </div>
</div>
  <div class="card">
      <img class="pic" src="images/collin_headshot.jpg" alt="OmTech Webmaster">
      <div class="content">
          <h2>Webmaster:</h2>
          <h3>Collin Kozlowski</h3>
      </div>
      <div class = "footer">
          <h5><a class = "execLink" href="editwebmaster.php">Edit the Webmaster!</a></h5>
      </div>
  </div>
</div>
</div>

  <footer>
    <div class = "contactUs">
      <h4>Contact Us</h4>
        <p>Email: omTechUWEC@outlook.com</p>
    </div>
    <div class = "facebookInfo">
      <h4>Follow our Facebook Group</h4>
        <p><a class="footerLink" href = "https://www.facebook.com/groups/uwecomtech" target = "_blank" >UWEC OMTech - Organization for Minorities in Technology</a></p>
    </div>
  </footer>
</body>

</html>