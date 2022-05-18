<?php

require("databaseconn.php");
$getPresInfo = "SELECT memberName, profileSrc FROM members WHERE position = 'President'";
$getVPInfo = "SELECT memberName, profileSrc FROM members WHERE position = 'Vice President'";
$getSecInfo = "SELECT memberName, profileSrc FROM members WHERE position = 'Secretary'";
$getWebmasterInfo = "SELECT memberName, profileSrc FROM members WHERE position = 'Webmaster'";
$getTreasurerInfo = "SELECT memberName, profileSrc FROM members WHERE position = 'Treasurer'";

$presResponse = @mysqli_query($dbc, $getPresInfo);
$presInfo = mysqli_fetch_array($presResponse);

$vpResponse = @mysqli_query($dbc, $getVPInfo);

$vpInfo = mysqli_fetch_array($vpResponse);

$secResponse = @mysqli_query($dbc, $getSecInfo);

$secInfo = mysqli_fetch_array($secResponse);

$webmasterResponse = @mysqli_query($dbc, $getWebmasterInfo);

$webmasterInfo = mysqli_fetch_array($webmasterResponse);

$treasurerResponse = @mysqli_query($dbc, $getTreasurerInfo);

$treasurerInfo = mysqli_fetch_array($treasurerResponse);

$presName = $presInfo["memberName"];
$presSrc = $presInfo["profileSrc"];

$vpName = $vpInfo["memberName"];
$vpSrc = $vpInfo["profileSrc"];

$secName = $secInfo["memberName"];
$secSrc = $secInfo["profileSrc"];

$webmasterName = $webmasterInfo["memberName"];
$webmasterSrc = $webmasterInfo["profileSrc"];

$treasurerName = $treasurerInfo["memberName"];
$treasurerSrc = $treasurerInfo["profileSrc"];

$css = ["styles.css", "meetTheboard.css"];
include("templates/top.php");
?>

<div class="cards">
    <div class="card">
        <img class="pic" src="<?php echo $presSrc?>" alt="OmTech President">
        <div class="content">
            <h2>President:</h2>
            <h3><?php echo $presName?></h3>
            <br/>
        </div>
        <div class = "footer">
            <h5><a class = "execLink" href="meetthepres.php">Meet the President!</a></h5>
        </div>
    </div>
    <div class="card">
        <img class="pic" src="<?php echo $vpSrc?>" alt="OmTech VP & Treasurer">
        <div class="content">
            <h2>Vice President:</h2>
            <h3><?php echo $vpName?></h3>
            <br/>
        </div>
        <div class = "footer">
            <h5><a class = "execLink" href="meetthevp.php">Meet the Vice President!</a></h5>
        </div>
    </div>
    <div class="card">
        <img class="pic" src="<?php echo $secSrc?>" alt="OmTech Secretary">
        <div class="content">
            <h2>Secretary:</h2>
            <h3><?php echo $secName?></h3>
            <br/>
        </div>
        <div class = "footer">
            <h5><a class = "execLink" href="meetthesecretary.php">Meet the Secretary!</a></h5>
        </div>
    </div>
    <div class="card">
        <img class="pic" src="<?php echo $webmasterSrc?>" alt="OmTech Webmaster">
        <div class="content">
            <h2>Webmaster:</h2>
            <h3><?php echo $webmasterName?></h3>
            <br/>
        </div>
        <div class = "footer">
            <h5><a class = "execLink" href="meetthewebmaster.php">Meet the Webmaster!</a></h5>
        </div>
    </div>
    <div class="card">
        <img class="pic" src="<?php echo $treasurerSrc?>" alt="OmTech VP & Treasurer">
        <div class="content">
            <h2>Treasurer:</h2>
            <h3><?php echo $treasurerName?></h3>
            <br/>
        </div>
        <div class = "footer">
            <h5><a class = "execLink" href="meetthetreasurer.php">Meet the Treasurer!</a></h5>
        </div>
    </div>
</div>

<?php include("templates/bottom.php");