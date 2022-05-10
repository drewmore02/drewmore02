<?php
session_start();
if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
  die(header("Location: 404.php"));
}
?>
<?php
  $css = ["styles.css"];
  include("templates/top.php");
?>



<?php include("templates/bottom.php");