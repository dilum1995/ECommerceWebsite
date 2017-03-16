<?php

$server = 'localhost'; // address of the server
$dbUsername = 'sportslab'; // username for database
$dbPassword = '123'; // database password
$dbName = 'sportslabdb'; // database name
// create connection to database
$connection = new mysqli($server, $dbUsername, $dbPassword, $dbName);

$comName = $_POST['comName'];
$comEmail = $_POST['mail'];
$comment = $_POST['comment'];
$rating = $_POST['rate'];
// sql querry to save
$sql = "INSERT into comments VALUES('" . $comName . "','" . $comEmail . "','" . $comment . "','" . $rating . "')";

// execute sql
$result = mysqli_query($connection, $sql);

if ($result) {
    echo "<script>alert('Comment has been added!'); window.history.back();</script>";
} else {
    echo "<script>alert('An error has occured!'); window.history.back();</script>";
}

?>