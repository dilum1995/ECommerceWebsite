<?php

// if session variable is not set then show login user else show logout
if (!isset($_SESSION['id'])) {
    echo "<form id='login' name='login' method='POST' action='http://localhost/OnlineStore/PHP_Files/loginUser.php'>" .
    "Username : &nbsp;<input name='username' type='text' size='25'><br>" .
    "<br>" .
    "Password : &nbsp;&nbsp;<input name='password' type='password' size='25'><br>" .
    "<input id='loginBtn' name='submit' type='submit' value='Login'>" .
    "<br>" .
    "<input id='signBtn' name='signbtn' type='button' onclick='direct()' value='Sign Up!' >" .
    "</form>";
} else {
    echo "<form id = 'login' name = 'login' method = 'POST' action = 'http://localhost/OnlineStore/PHP_Files/logout.php'>";
    include '../PHP_Files/cart.php';
    echo "<input id = 'viewBtn' name = 'viewbtn' type = 'button' onclick='view()' value = 'View My Cart'>" .
    "<input id = 'loginBtn' name = 'submit' type = 'submit' value = 'Logout'>" .
    "<br>" .
    "<input id = 'signBtn' name = 'signbtn' type = 'button' onclick='direct()' value = 'Sign Up!'>" .
    "</form>";
}

?>