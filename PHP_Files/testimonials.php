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

            <!--part containing the developers-->
            <div id="table">

                <!--show comments section -->
                <?php
                include '../PHP_Files/showComments.php';
                ?>
                <br><br>
            </div>

            <!--write comments section -->
            <div id="table">
                <div id="write">
                    <?php
                    include '../PHP_Files/comments.php';
                    ?>
                </div>
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



