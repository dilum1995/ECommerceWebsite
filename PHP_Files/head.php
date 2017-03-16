<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['quantity'] = array();
    $_SESSION['productName'] = array();
    $_SESSION['price'] = array();
    $_SESSION['count'] = 0;
    $_SESSION['subtotal'] = 0;
}
?>

<html>
    <head>
        <script>
            function direct() {
                location.href = '../PHP_Files/signUp.php';
            }
            function view() {
                location.href = '../PHP_Files/cartFull.php';
            }

            function pay() {
                location.href = 'https://www.paypal.com/kr/webapps/mpp/home?locale.x=en_KR&kw=sdGVMxC9b_dc;50052323627;875k975879&gclid=CJK7yfLwp8wCFUgXaAodBe8Bag&mpch=ads&mplx=27735-206518-42569-0&spid=175403333682359283';
            }
 
        </script>
    </head>
    <body>
        <!--Logo at the top-->
        <div><img src = "../IMAGES/logo final.png" style = "width:100%;"></div>

        <!--navigation bar at the top-->
        <div id = "nav">
            <ul id = "navUL">
                <li id = "navLI">
                    <a href = "index.php" id = "navLINK">Home</a>
                </li>

                <li id="navLI">
                    <a href="location.php" id="navLINK">Location</a>
                </li>

                <li id = "navLI">
                    <a href = "about.php" id = "navLINK">About Us</a>
                </li>
                
                <li id="navLI">
                    <a href="quiz.php" id="navLINK">Quiz</a>
                </li>
                
                <li id="navLI">
                    <a href="testimonials.php" id="navLINK">Reviews</a>
                </li>
            </ul>
        </div>
        <br>
        <br>
    </body>
</html>


