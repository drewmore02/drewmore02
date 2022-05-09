<?php
require_once('databaseconn.php');

$getInfo = "SELECT position, memberName, gradeYear, major, minor, omtechFav, omtechEvent, uwecFav, funFact FROM members WHERE position = 'Vice President'";

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
  <link rel="stylesheet" href="css/execboardindividual.css" />
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
        <h1><?php echo $position ?></h1>
    </div>
    <div class="contentContainer">
        <div class="photoContainer">
        <img class="photo" src="images/laura_headshot.jpg" alt = "OmTech VP">
            <img class="memberPhoto" src="images/omtech_icecreamsocial_1.jpg" alt = "Laura at a meeting">
        </div>
        <div class="card">
            <div class="container">
                <div class="nameHeader">
                    <h2 class="execNameHeader">Name: </h2>
                </div>
                <div class="yearHeader">
                    <h2 class="execNameHeader">Year: </h2>
                </div>
                <div class="majorHeader">
                    <h2 class="execNameHeader">Major: </h2>
                </div>
            </div>
            <div class="container">
                <div class="name">
                    <p class="bioFont"><?php echo $name ?></p>
                </div>
                <div class="year">
                    <p class="bioFont"><?php echo $year ?></p>
                </div>
                <div class="major">
                    <p class="bioFont"><?php echo $major ?></p>
                    <p class="subtitleFont">Minors: <?php echo $minor ?></p>
                </div>
            </div>
            <div class="sectionHeader">
                <h2 class="execNameHeader">Favorite Part About OmTech:</h2>
            </div>
            <div class="omTechPart">
                <p class="bioFont"><?php echo $omtechFav ?></p>
            </div>
            <div class="sectionHeader">
                <h2 class="execNameHeader">Favorite OmTech Event:</h2>
            </div>
            <div class="omTechEvent">
                <p class="bioFont"><?php echo $omtechEvent ?></p>
            </div>
            <div class="sectionHeader">
                <h2 class="execNameHeader">Favorite Part About UWEC:</h2>
            </div>
            <div class="uwecPart">
                <p class="bioFont"><?php echo $uwecFav ?></p>
            </div>
            <div class="sectionHeader">
                <h2 class="execNameHeader">Fun Fact:</h2>
            </div>
            <div class="funFact">
                <p class="bioFont"><?php echo $funFact ?></p>
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
 