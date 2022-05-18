<?php
session_start();
// echo $_SESSION['success'];

if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
    die(header("Location: loginpage.php"));
}

$css = ["styles.css", "meetTheboard.css"];
include('templates/top.php');
?>

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

<?php include('templates/bottom.php'); ?>