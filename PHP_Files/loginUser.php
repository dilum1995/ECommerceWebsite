<?php

//start session
session_start();

$server = 'localhost'; // address of the server
$dbUsername = 'sportslab'; // username for database
$dbPassword = '123'; // database password
$dbName = 'sportslabdb'; // database name
// get user name and password from user input
$username = $_POST['username'];
$password = $_POST['password'];

// create connection to database
$connection = new mysqli($server, $dbUsername, $dbPassword, $dbName);

// sql querry to view
$sql = "SELECT * FROM userdetails WHERE username='" . $username . "' AND password='" . $password . "'";

// execute sql
$result = mysqli_query($connection, $sql);

// get output of sql
$row = mysqli_fetch_array($result);
$myfile;

// if $row is set then login is successful, else login failed
if (isset($row)) {
    $_SESSION['id'] = $username;
    $filename = 'C:\\xampp\\htdocs\\OnlineStore\\TXT_Files\\' . $username . '.txt';
    $file = file($filename);
    
    // write to file about users purchases
    $j = 0;
    for ($i = 0; $i < sizeof($file); $i+=2) {
        $_SESSION['cart'][$j] = rtrim($file[$i]);
        ++$j;
    }
    $j = 0;
    for ($k = 1; $k < sizeof($file); $k+=2) {
        $_SESSION['quantity'][$j] = rtrim($file[$k]);
        ++$j;
    }

    echo "<script>" . "alert('Login successful!');" . "window.location.href='../PHP_Files/index.php';" . "</script>";
} else {
    echo "<script>" . "alert('Invalid credentials!');" . "window.location.href='../PHP_Files/index.php';" . "</script>";
}

?>