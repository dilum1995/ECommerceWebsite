<?php

$server = 'localhost'; // address of the server
$dbUsername = 'sportslab'; // username for database
$dbPassword = '123'; // database password
$dbName = 'sportslabdb'; // database name
// create connection to database
$connection = new mysqli($server, $dbUsername, $dbPassword, $dbName);

// sql querry to save
$sql = "SELECT * FROM comments";

// execute sql
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_all($result);

$num = rand(0, sizeof($row) - 1);

echo "<div id='coms' onload='reloadAJAX()'><h4>Customer " . ($row[$num][0]) . " gives a rating of " . ($row[$num][3]) . " Stars <br></h4><i>'" . ($row[$num][2]) . "'</i></div>";
$num = rand(0, sizeof($row) - 1);
echo "<div id='coms' onload='reloadAJAX()'><h4>Customer " . ($row[$num][0]) . " gives a rating of " . ($row[$num][3]) . " Stars <br></h4><i>'" . ($row[$num][2]) . "'</i></div>";
$num = rand(0, sizeof($row) - 1);
echo "<div id='coms' onload='reloadAJAX()'><h4>Customer " . ($row[$num][0]) . " gives a rating of " . ($row[$num][3]) . " Stars <br></h4><i>'" . ($row[$num][2]) . "'</i></div>";

?>