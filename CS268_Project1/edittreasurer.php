<?php
session_start();
if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
  die(header("Location: 404.php"));
}
require_once('databaseconn.php');

$getInfo = "SELECT * FROM members WHERE position = 'Treasurer'";

$response = @mysqli_query($dbc, $getInfo);

$info = mysqli_fetch_array($response);

$position = $info['position'];
$name = $info['memberName'];
$year = $info['gradeYear'];
$major = $info['major'];

if($info['minor'] === NULL){
  $minor = "";
}else{
  $minor = $info['minor'];
}
$omtechFav = $info['omtechFav'];
$omtechEvent = $info['omtechEvent'];
$uwecFav = $info['uwecFav'];
$funFact = $info['funFact'];
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
  <link rel="stylesheet" href="css/contactus.css" />
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
    <h1>Edit the Treasurer's Information Here:</h1>
  </div>
  <div class="card">
    <form name = "memberForm" action = "boardmemberform.php" method = "post">
      <label for="position">Position:</label>
      <input
        type="text"
        id="position"
        name="position"
        value = "<?php echo $position ?>"
      />
      <label for="name">Name:</label>
      <input
        type="text"
        id="name"
        name="name"
        value = "<?php echo $name ?>"
      />
      <label for="year">Year:</label>
      <input
        type="text"
        id="year"
        name="year"
        value = "<?php echo $year ?>"
      />
      <label for="major">Major:</label>
      <input
        type="text"
        id="major"
        name="major"
        value = "<?php echo $major ?>"
      />
      <label for="minor">Minor:</label>
      <input
        type="text"
        id="minor"
        name="minor"
        value = "<?php echo $minor ?>"
      />
      <label for="omtechFav">Favorite thing about OmTech:</label>
      <textarea
        id="omtechFav"
        name="omtechFav"
      ><?php echo $omtechFav ?></textarea>
      <label for="omtechEvent">Favorite OmTech event:</label>
      <textarea
        id="omtechEvent"
        name="omtechEvent"
      ><?php echo $omtechEvent ?></textarea>
      <label for="uwecFav">Favorite thing about UWEC</label>
      <textarea
        id="uwecFav"
        name="uwecFav"
      ><?php echo $uwecFav ?></textarea>
      <label for="funFact">Fun Fact:</label>
      <textarea
        id="funFact"
        name="funFact"
      ><?php echo $funFact ?></textarea>
      <label for="profileSrc">Profile Photo Link:</label>
      <input
        type="text"
        id="profileSrc"
        name="profileSrc"
        placeholder = "Make sure your photo is already in the images folder!"
      />
      <label for="memberSrc">Member Photo Link:</label>
      <input
        type="text"
        id="memberSrc"
        name="memberSrc"
        placeholder = "Make sure your photo is already in the images folder!"
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