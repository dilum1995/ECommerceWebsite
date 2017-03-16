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
                    <tr >
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/REVOLVE%20TENNIS%20STRING.jpg"><br>

                                    <div id="item">
                                        <b>REVOLVE TENNIS STRING</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100001'>
                                        <p><small> Gauge: 16/1.30mm, Length: 40ft / 12.2 m. <br> Composition Co-polymer Monofilament</small></p>
                                        <hr>
                                        <b>$9.95</b><br>

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
                                         "../IMAGES/TOUR%20RED%20LARGE%20BACKPACK.jpg"><br>

                                    <div id="item">
                                        <b>TOUR RED LARGE BACKPACK</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100002'>
                                        <p><small> Large compartment to hold shoes. <br> Thermoguard protects equipment.</small></p>
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


                    <tr>
                        <td>
                            <div id="form">
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/../IMAGES/US%20OPEN%20LOGO%20WRISTBAND.jpg"><br>

                                    <div id="item">
                                        <b>US OPEN LOGO WRISTBAND</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100003'>
                                        <p><small> Content: 75% Cotton, 10% Elastic, 15% Nylon. Sizes: One Size Fits Most.</small></p>
                                        <hr>
                                        <b>$5.00</b><br>

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
                                         "../IMAGES/Babolat%20Jet.jpg"><br>

                                    <div id="item">
                                        <b>Babolat Jet AC Grey/Red Men's Shoes</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100004'>
                                        <p><small> Weight: 12.9 ounces (Size 10.5). <br> Kompressor cushioning technology.</small></p>
                                        <hr>
                                        <b>$135.00</b><br>

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
                                         "../IMAGES/../IMAGES/Babolat%20AeroPro%20Drive.jpg"><br>

                                    <div id="item">
                                        <b>Babolat AeroPro Drive</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100005'>
                                        <p><small> Equipped with Cortex Active Technology. <br> Designed for faster swing speeds.</small></p>
                                        <hr>
                                        <b>$159.00</b><br>

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
                                         "../IMAGES/Head%20Graphene%20XT%20Speed%20Rev%20Pro.jpg"><br>

                                    <div id="item">
                                        <b>Head Graphene XT Speed Rev Pro</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100006'>
                                        <p><small> Length: 27.4 in. Weight: 10 oz. Equipped with Head’s new Adaptive String Pattern.</small></p>
                                        <hr>
                                        <b>$199.95</b><br>

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
                                         "../IMAGES/../IMAGES/adidas%20Stella%20Barricade.jpg"><br>

                                    <div id="item">
                                        <b>adidas Stella Barricade Boost Orange/White Women's Shoes</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='T100007'>
                                        <p><small> Durable rubber for the most abrasive of courts. BOOST technology is used.</small></p>
                                        <hr>
                                        <b>$139.95</b><br>

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

