<?php
session_start();
if(isset($_SESSION['success']) && $_SESSION['success'] === TRUE){
  header("Location: adminhome.php");
}

$css = ["styles.css", "contactUs.css"];
include('templates/top.php');

?>

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
    <label for="password">Password</label><br>
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

<?php include('templates/bottom.php'); ?>