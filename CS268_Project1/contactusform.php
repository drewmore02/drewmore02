<?php
require_once('databaseconn.php');

$nameErr = "";
$emailErr = "";
$messageErr = "";

$name = "";
$email = "";
$message = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_REQUEST['name'])){
        $nameErr = "Please enter your name";
        echo '<script>window.location.replace("./contactus.html");alert("Please enter your name!");</script>';
    }else{
        $data = trim($_REQUEST['name']);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $name = $data;
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and spaces can be used";
            echo '<script>window.location.replace("./contactus.html");alert("Only letters or spaces can be used!");</script>';
            exit();;
        }
    }
    if(empty($_REQUEST['email'])){
        $emailErr = "Please enter an email";
        echo '<script>window.location.replace("./contactus.html");alert("Please enter an email!");</script>';
    }else{
        $data = trim($_REQUEST['email']);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $email = $data;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email";
            echo '<script>window.location.replace("./contactus.html");alert("Invalid email!");</script>';
            exit();
        }
    }
    if(empty($_REQUEST['message'])){
        $messageErr = "Please enter a message";
        echo '<script>window.location.replace("./contactus.html");alert("Please enter a message!");</script>';
    }else{
        $data = trim($_REQUEST['message']);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $message = $data;
    }
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        $sql = "INSERT INTO contactSubmissions (userName, userEmail, userMessage) VALUES('$name', '$email', '$message')";
        if(@mysqli_query($dbc, $sql)){
            echo '<script>window.location.replace("./contactus.html");alert("Thank you your message has been sent!");</script>';
        }else{
            echo '<script>window.location.replace("./contactus.html");alert("An error has occurred when submitting your message. Please Try Again!");</script>';
            mysqli_error($dbc);
        }
    }else{
        echo 'Your form was not submitted. Please try again!';
        exit();
    }
}

?>
