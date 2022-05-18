<?php
require_once('databaseconn.php');

$getInfo = "SELECT * FROM members WHERE position = 'Vice President'";

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
$profileSrc = $info['profileSrc'];
$memberSrc = $info['memberSrc'];

$css = ["styles.css", "execboardindividual.css"];
include("templates/top.php");
?>

<div class="pageHeader">
    <h1><?php echo $position ?></h1>
</div>
<div class="contentContainer">
    <div class="photoContainer">
    <img class="photo" src="<?php echo $profileSrc ?>" alt = "OmTech Vice President">
    <img class="memberPhoto" src="<?php echo $memberSrc ?>" alt = "Vice President at a meeting">
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
   
 <?php include('templates/bottom.php'); ?>