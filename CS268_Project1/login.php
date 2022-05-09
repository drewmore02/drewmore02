<?php
session_start();
require_once('databaseconn.php');

$username = "";
$password = "";

$username_err = "";
$password_err = "";
$_SESSION['success'] = FALSE;
$success = TRUE;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tempUser = trim($_POST["username"]);
    $tempPass = trim($_POST["password"]);
    if(empty($tempUser)){
        $username_err = "Please enter a username.";
    }else{
        $username = $tempUser;
    }

    if(empty($tempPass)){
        $password_err = "Please enter a password.";
    }else{
        $password = trim($_POST["password"]);
    }

    echo $username;
    echo $password;
    echo $username_err;
    echo $password_err;

    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, passcode FROM logins WHERE username = '$username' AND passcode = '$password'";
        $result = mysqli_query($dbc, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($row['username'] === $username && $row['passcode'] === $password){
                $_SESSION['success'] = $success;
                header("Location: ./adminhome.php");
            }else{
                echo '<script>window.location.replace("./loginpage.php");alert("Incorrect username or password!");</script>';
            }
        }else{
            echo '<script>window.location.replace("./loginpage.php");alert("Incorrect username or password!");</script>';
        }
        
    }else{
        echo '<script>window.location.replace("./loginpage.php");alert("Please enter a username and password!");</script>';
    }
}
?>