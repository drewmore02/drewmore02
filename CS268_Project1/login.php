<?php
require_once("sql_conn.php");

session_start();

$username = "";
$password = "";

$username_err = "";
$password_err = "";

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
                header("Location: ./adminhome.html");
            }else{
                echo '<script>window.location.replace("./login.html");alert("Incorrect username or password!");</script>';
                exit();
            }
        }else{
            echo '<script>window.location.replace("./login.html");alert("Incorrect username or password!");</script>';
            exit();
        }
        
    }else{
        echo '<script>window.location.replace("./login.html");alert("Please enter a username and password!");</script>';
        exit();
    }
}
?>