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

$css = ["styles.css", "contactUs.css"];
include('templates/top.php');
?>

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
      readonly
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

<?php include('templates/bottom.php'); ?>