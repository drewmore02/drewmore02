<?php
session_start();
echo $_SESSION['success'];
if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
    die(header("Location: 404.php"));
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Home</title>
        <link rel="icon" type="image/x-icon" href="images/myIcon.ico">
        <link rel="stylesheet" href="css/meetTheboard.css">
        <link rel="stylesheet" href="css/styles.css">
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
        <div class="cards">
            <div class="card">
                <img class="pic" src="images/board.png" alt="icon of group">
                <div class="content">
                    <h2>Edit Board Members:</h2>
                    <br>
                </div>
                <div class = "footer">
                    <h5><a class = "execLink" href="editboard.php">Click here to edit the board members!</a></h5>
                </div>
            </div>
            <div class="card">
                <img class="pic" src="images/news.png" alt="news icon">
                <div class="content">
                    <h2>Edit News Feed:</h2>
                    <br>
                </div>
                <div class = "footer">
                    <h5><a class = "execLink" href="editnews.php">Click here to edit the news feed!</a></h5>
                </div>
            </div>
            <div class="card">
                <img class="pic" src="images/calendar.png" alt="events icon">
                <div class="content">
                    <h2>Edit Events:</h2>
                    <br>
                </div>
                <div class = "footer">
                    <h5><a class = "execLink" href="editevents.php">Click here to edit the events!</a></h5>
                </div>
            </div>
            <div class="card">
                <img class="pic" src="images/lock.png" alt="logout icon">
                <div class="content">
                    <h2>Logout</h2>
                    <br>
                </div>
                <div class = "footer">
                    <h5><a class = "execLink" href="logout.php">Click here to logout of administrator mode!</a></h5>
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