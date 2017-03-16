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
                <table cellspacing="25" width="100%">

                    <tr>
                        <td>
                            <a href="Rukshan.php"><img src="../IMAGES/Rukshan.png"><br>
                                <b>Rukshan Hassim</b></a>
                        </td>

                        <td>
                            <a href="Nethmi.php"><img src="../IMAGES/Nethmi.png"><br>
                                <b>Nethmi Jayawardena</b></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="Lakshan.php"><img src="../IMAGES/Lakshan.jpg"><br>
                                <b>Lakshan Gunarathna</b></a>
                        </td>

                        <td>
                            <a href="Benuri.php"><img src="../IMAGES/Benuri.jpg"><br>
                                <b>Benuri Alwis</b></a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <a href="Manul.php"><img src="../IMAGES/Manul.jpg"><br>
                                <b>Manul Singhe</b></a>
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



