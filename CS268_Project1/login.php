<?php
// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cs268project');
// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
echo "Connection Successful";

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