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

            <!--part containing items for each category-->
            <div id="table">
                <table cellspacing="25" width="100%">
                    <tr>
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" id="victor"
                                      method="post" name="victor">
                                    <img id="itemIMG" src=
                                         "../IMAGES/VICTOR%20BADMINTON%20NET%20B.jpg"><br>

                                    <div id="item">
                                        <b>VICTOR BADMINTON NET B</b><br>
                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100001'>
                                        <p><small> Suited for indoor and backyard.<br> Durable Nylon construction.</small></p>
                                        <hr>
                                        <b>$45.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart"> 
                                    </div>
                                </form>
                            </div>
                        </td>

                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/Yonex%20ArcSaber%20FD%20Badminton%20Racket.jpg"><br>

                                    <div id="item">
                                        <b>Yonex ArcSaber FD Badminton Racket</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100002'>
                                        <p><small> Lightweight,designed for all-round players. <br> Frame flexes at point of impact.</small></p>
                                        <hr>
                                        <b>$143.98</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/../IMAGES/LI-NING%20BADMINTON%20RACQUET%20-%20MEGA%20POWER%20FLAME%20N55-III%20[XS].jpg"><br>

                                    <div id="item">
                                        <b>LI-NING BADMINTON RACQUET - MEGA POWER FLAME N55-III [XS]</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100003'>
                                        <p><small> With Air Stream Technology. <br> Designed for big power. </small></p>
                                        <hr>
                                        <b>$249.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </td>

                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/WILSON-TEAM60-SHUTTLECOCKS-2.jpg"><br>

                                    <div id="item">
                                        <b>WILSON TEAM 60 BADMINTON SHUTTELCOCKS</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100004'>
                                        <p><small> Top grade goose feather shuttlecocks. <br> 12 shuttles per tube.</small></p>
                                        <hr>
                                        <b>$23.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/../IMAGES/YONEX-AERUS-MX-BADMNTN-SHOE-2.jpg"><br>

                                    <div id="item">
                                        <b>YONEX AERUS MX BADMINTON SHOE</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100005'>
                                        <p><small> Lightest shoes crafted by Yonex. <br> Absorbs 30%  more shock. </small></p>
                                        <hr>
                                        <b>$150.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </td>

                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/YONEX-SHB45-BADMINTON-SHOE-.jpg"><br>

                                    <div id="item">
                                        <b>YONEX SHB-45EX UNISEX BADMINTON SHOE</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100006'>
                                        <p><small> Basic model with comfortable soft fit. <br> Yonex Power Cushion feature.</small></p>
                                        <hr>
                                        <b>$80.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/../IMAGES/YONEX%209026BEX%202010%20TOURNAMENT%20SERIES%20BADMINTON%20BAG.jpg"><br>

                                    <div id="item">
                                        <b>YONEX 9026BEX 2010 TOURNAMENT SERIES BADMINTON BAG</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='B100007'>
                                        <p><small> Thermal 6-pack racket bag. <br> Two outside racket pockets & shoe pocket.</small></p>
                                        <hr>
                                        <b>$75.00</b><br>

                                        <hr>
                                        Quantity &nbsp;:&nbsp;&nbsp;<input id="quantity" name="quantity" type="number" value="0" min="1" max="20">
                                        <hr>
                                        <input id="cart" type="submit" value="Add to Cart">
                                    </div>
                                </form>
                            </div>
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

