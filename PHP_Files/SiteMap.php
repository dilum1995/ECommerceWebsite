<!DOCTYPE html>

<html>
    <head>
        <title>SportsLab</title>
        <meta charset="UTF-8">
        <link href="../CSS_Files/indexCSS.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <script>
            /*to open the pop up window for email*/
            function sendmail() {

                window.open("../HTML_Files/popupform.html", "ContactUs", "width=250,height=500");

            }
        </script>
    </head>

    <body>
        <!--including the header along with the nav bar-->
        <?php
        include '../PHP_Files/head.php';
        ?>

        <div>
            <!--including the side nav bar in the left to browse by category-->
            <?php
            include '../PHP_Files/sideNav.php';
            ?>

            <!--part containing details-->
            <div id="table">
                <div id="siteMap"> 
                    <ul>
                        <li>
                            <a href="index.php">Home</a> <br> <br>  
                        </li>
                        <li>
                            <a href="location.php">Location</a> <br> <br>
                        </li>
                        <li>
                            <a href="quiz.php">Quiz</a> <br> <br>
                        </li>
                        <li>
                            <a href="signUp.php">Sign Up</a> <br> <br>
                        </li>
                        <li>
                            Category
                            <ul>
                                <li>
                                    <a href="Badminton.php">Badminton</a> <br>
                                </li>
                                <li>
                                    <a href="Cricket.php">Cricket</a> <br>
                                </li>
                                <li>
                                    <a href="Swimming.php">Swimming</a> <br>
                                </li>
                                <li>
                                    <a href="Tennis.php">Tennis</a> <br> <br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            About Us
                            <ul>
                                <li>
                                    <a href="Rukshan.php">Rukshan Hassim</a> <br>
                                </li>
                                <li>
                                    <a href="Nethmi.php">Nethmi Jayawardena</a> <br>
                                </li>
                                <li>
                                    <a href="Lakshan.php">Lakshan Gubarathna</a> <br>
                                </li>
                                <li>
                                    <a href="Benuri.php">Benuri Alwis</a> <br>
                                </li>
                                <li>
                                    <a href="Manul.php">Manul Singhe</a> <br> <br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Contact Us
                            <ul>
                                <li>
                                    0772799273 / 0772459943  <br>
                                </li>
                                <li>
                                   Email : 
                                    <a href="mailto:sprtzlab@gmail.com" onclick="sendmail();">sprtzlab@gmail.com</a> <br> <br>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="shippingPolicy.php">Shipping Policy</a> <br> <br>
                        </li>
                        <li>
                            <a href="testimonials.php">Reviews</a> <br> <br>
                        </li>
                    </ul>
                </div>              
            </div>

            <!--including the login section-->
            <?php
            include '../PHP_Files/login.php';
            ?>

        </div>

        <!--including the footer-->
        <?php
        include '../PHP_Files/footer.php';
        ?>

    </body>
</html>



