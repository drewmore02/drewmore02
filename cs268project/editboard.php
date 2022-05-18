<?php
session_start();
if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
    die(header("Location: 404.php"));
}

$css = ["styles.css", "meettheboard.css"];
include('templates/top.php');
?>

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

<?php include('templates/bottom.php'); ?>