<!DOCTYPE html>

<html>
    <head>
        <title>SportsLab</title>
        <meta charset="UTF-8">
        <link href="../CSS_Files/indexCSS.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                <p>
                    <u>Free 2-Day Shipping Details. </u> <br>
                </p>
                        <ul>
                            <li>FREE 2-Day shipping on orders over $12.</li>
                            <li>Orders must have an actual or dimensional weight of 12 lbs. or less.</li>
                            <li>Offer not retroactive on prior purchases.</li>
                            <li>Limited Time Offer.</li>
                            <li>Free ship method will be determined by destination.</li>
                            <li>Does not apply to gift cards.</li>
                        </ul>

                <p>
                    <u>$9.95 Overnight Shipping Details</u>
                </p>
                        <ul>
                            <li>Does not include overnight Saturday delivery. Additional charges apply for Saturday delivery.</li>
                            <li>Orders must have an actual or dimensional weight of 4 lbs. or less.</li>
                            <li>Offer not retroactive on prior purchases.</li>
                            <li>Limited Time Offer.</li>
                        </ul>
                
                <p>
                    <u>Free Return Shipping</u>
                </p>
                        <ul>
                            <li>Qualifying orders will include a Pre-paid UPS Ground shipping label.</li>
                            <li>Does not apply to defective products or warranty claims.</li>
                        </ul>
                
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

