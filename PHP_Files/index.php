<!DOCTYPE html>

<html>
    <head>
        <title>SportsLab</title>
        <meta charset="UTF-8">
        <link href="../CSS_Files/indexCSS.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    </head>

    <body>
        <!--internal style for only the product elements in the home page-->
        <style>
            #table td:hover {
                transform: scale(1.05);
                box-shadow: 0 0 0 3px #f90;
            }
        </style>

        <!--including the header along with the nav bar-->
        <?php
        include '../PHP_Files/head.php';
        ?>

        <div>
            <!--including the side nav bar in the left to browse by category-->
            <?php
            include '../PHP_Files/sideNav.php';
            ?>

            <!--part containing the main categories-->
            <div id="table">
                <table cellspacing="25" width="100%">
                    <tr>
                        <th align = "center" colspan = "2"><h2><i>PRODUCT CATEGORIES</i></h2></th>
                    </tr>

                    <tr>
                        <td>
                            <a href="Tennis.php"><img src="../IMAGES/tennis.png"><br>
                                <b>Tennis</b></a>
                        </td>

                        <td>
                            <a href="Badminton.php"><img src="../IMAGES/badminton.png"><br>
                                <b>Badminton</b></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="Cricket.php"><img src="../IMAGES/cricket.png"><br>
                                <b>Cricket</b></a>
                        </td>

                        <td>
                            <a href="Swimming.php"><img src="../IMAGES/swimming.png"><br>
                                <b>Swimming</b></a>
                        </td>
                    </tr>

                </table>
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

