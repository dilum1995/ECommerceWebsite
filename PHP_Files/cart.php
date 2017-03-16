<?php

//session_start();
error_reporting(0);

$server = 'localhost'; // address of the server
$dbUsername = 'sportslab'; // username for database
$dbPassword = '123'; // database password
$dbName = 'sportslabdb'; // database name
$connection = new mysqli($server, $dbUsername, $dbPassword, $dbName); // create connection to database

$cart = $_SESSION['cart'];
$quantity = $_SESSION['quantity'];
$productName = $_SESSION['productName'];
$price = $_SESSION['price'];
$subtotal = 0;

// get data from database
for ($i = 0; $i < sizeof($cart); $i++) {
    if (isset($cart[$i])) {
        $productID = $_SESSION['cart'][$i];//$cart[$i];
        $sql = "SELECT * FROM productdetails WHERE productid='" . $productID . "'"; // sql querry to view
        $result = mysqli_query($connection, $sql); // execute sql
        $row = mysqli_fetch_row($result); // get output of sql
        array_push($productName, $row[1]);
        array_push($price, $row[2]);
    }
}

// table head
echo "<table id='cartName'>
        <tr>
            <th>Product Name</th>
            <th>&nbsp;Qty&nbsp;</th>
            <th>&nbsp;Price&nbsp;</th>
        </tr>";

// table elements
for ($i = 0; $i < sizeof($cart); $i++) {
    echo "<tr><td align='left'>" . ($i + 1) . ". " . $productName[$i] . "</td><td align='center'>";
    echo $quantity[$i] . "</td><td align='right'>";

    $total = $quantity[$i] * $price[$i];
    $subtotal += $total;

    echo $total . "$</td></tr>";
}
$_SESSION['subtotal'] = $subtotal;
if ($_SESSION['subtotal'] != 0) {
    echo "<tr><td id='top' colspan='2' align='center'>Final Total</td><td id='top' align='right'>" . $_SESSION['subtotal'] . "$</td></tr></table>";
} else {
    echo "<tr><td id='top' colspan='2' align='center'>Your Cart is empty!</td><td id='top' align='right'></td></tr></table>";
}

?>