<?php
require_once('databaseconn.php');

$position = "";

$position_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "\nyes";
    $tempPosition = trim($_POST["position"]);
    if(empty($tempPosition)){
        $position_err = "Please enter a position.";
    }else{
        $position = $tempPosition;
    }

    if(empty($position_err)){
        $memberName = trim($_POST["name"]);
        $gradeYear = trim($_POST["year"]);
        $major = trim($_POST["major"]);
        if(empty($_POST["minor"])){
            $minor = NULL;
        }else{
            $minor = trim($_POST["minor"]);
        }
        $omtechFav = trim($_POST["omtechFav"]);
        $omtechEvent = trim($_POST["omtechEvent"]);
        $uwecFav = trim($_POST["uwecFav"]);
        $funFact = trim($_POST["funFact"]);

        $sql = "UPDATE members SET memberName = '$memberName', gradeYear = '$gradeYear', major = '$major', minor = '$minor', omtechFav = '$omtechFav', omtechEvent = '$omtechEvent', uwecFav = '$uwecFav', funFact = '$funFact' WHERE position = '$position'";
        $result = mysqli_query($dbc, $sql);

        header("Location: editboard.html");
        
    }else{
        echo '<script>window.location.replace("./editboard.html");alert("Please enter a valid position!");</script>';
        exit();
    }
}
?>