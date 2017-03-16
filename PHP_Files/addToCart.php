<?php

session_start();
// if logged in
if (isset($_SESSION['id'])) {
    $productID = $_POST['prodcutID']; // get product id
    $quantity = $_POST['quantity']; // get quantity

    $server = 'localhost'; // address of the server
    $dbUsername = 'sportslab'; // username for database
    $dbPassword = '123'; // database password
    $dbName = 'sportslabdb'; // database name
    $connection = new mysqli($server, $dbUsername, $dbPassword, $dbName); // create connection to database
    $sql = "SELECT * FROM productdetails WHERE productid='" . $productID . "'"; // sql querry to view
    $result = mysqli_query($connection, $sql); // execute sql
    $row = mysqli_fetch_row($result); // get output of sql
    $available = $row[3];

    if ($available >= $quantity) { // check if product is available

        // add product to array
        for ($j = 0; $j < 28; $j++) {
            if (!isset($_SESSION['cart'][$j])) {
                $_SESSION['cart'][$j] = $productID;
                $_SESSION['quantity'][$j] = $quantity;
                break;
            }
        }

        echo "<script>alert('Successfully added!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Item stocks depleted!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Please login first!'); window.history.back();</script>";
}

?>