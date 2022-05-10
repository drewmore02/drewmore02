<?php
session_start();
if(isset($_SESSION['success']) && $_SESSION['success'] === TRUE){
  header("Location: adminhome.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="icon" type="image/x-icon" href="images/myIcon.ico">
    <link rel="stylesheet" href="css/contactus.css" />
    <link rel="stylesheet" href="css/styles.css" />
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
            <li><a href="events.php">Events</a></li>
            <li><a href="meettheboard.php">Board</a></li>
            <li><a href="news.php">News</a></li>
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
                <li><a href="events.php">Events</a></li>
                <li><a href="meettheboard.php">Board</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="loginpage.php">Admin Login</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="pageHeader">
        <h1>Webpage Administrator Login:</h1>
      </div>
      <div class="card">
        <form name = "loginForm" action = "login.php" method = "post">
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Please enter your username..."
          />
          <br />
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Please enter your password..."
          />
          <br />
            <input type="submit" value="Submit" />
        </form>
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