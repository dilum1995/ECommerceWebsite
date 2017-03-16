<?php

// database properties
$server = 'localhost';
$dbUsername = 'sportslab';
$dbPassword = '123';
$dbName = 'sportslabdb';

// get user inputs
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

$month = $_POST['BirthMonth'];
$day = $_POST['BirthDay'];
$year = $_POST['BirthYear'];
$birthday = $year . $month . $day;

// create connection
$connection = new mysqli($server, $dbUsername, $dbPassword, $dbName);

// sql querry to insert
$sql = "INSERT into userdetails VALUES ('" . $name . "','" . $email . "','" . $username . "','" . $password . "','" . $birthday . "','" . $gender . "','" . $phone . "')";

// execute querry
$result = mysqli_query($connection, $sql);

// if $result = false then error else success
if (!$result) {
    echo "<script>"."alert('Username already exists!');"."window.location.href='../PHP_Files/index.php';"."</script>";
} else {
    echo "<script>"."alert('Account successfully created!');"."window.location.href='../PHP_Files/index.php';"."</script>";
    $filename = 'C:\\xampp\\htdocs\\OnlineStore\\TXT_Files\\' . $username . '.txt';
    $product = fopen($filename, "w");
}

?>