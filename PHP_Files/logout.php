<?php

session_start(); // start session

$filename = 'C:\\xampp\\htdocs\\OnlineStore\\TXT_Files\\' . $_SESSION['id'] . '.txt';
$check = unlink($filename); // delete file
if (!$check) {
    echo "<script>alert('Error Deleting!');</script>";
}
$product = fopen($filename, "w"); // recreate file
$i = 0;
while (!empty($_SESSION['cart'][$i])) { // write to file
    $toWriteProduct = $_SESSION['cart'][$i];
    $toWriteQTY = $_SESSION['quantity'][$i];

    fwrite($product, $toWriteProduct . PHP_EOL);
    fwrite($product, $toWriteQTY . PHP_EOL);
    $i++;
}
session_unset(); // clear all session variables

$header = \header("Location: http://localhost/OnlineStore/PHP_Files/index.php"); // redirect back to index

?>