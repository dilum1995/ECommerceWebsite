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
                                <form action="../PHP_Files/addToCart.php" method="post">
                                    <img id="itemIMG" src=
                                         "../IMAGES/../IMAGES/Adidas%20Large%20Towel%20-%20Red.jpg"><br>

                                    <div id="item">
                                        <b>Adidas Large Towel - Red</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100001'>
                                        <p><small> Soft and durable woven jacquard towel. <br> Made from 100% cotton.</small></p>
                                        <hr>
                                        <b>$32.42</b><br>

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
                                         "../IMAGES/FINIS%20Ultra%20Mesh%20Gear%20Bag%20-%20Orange.jpg"><br>

                                    <div id="item">
                                        <b>FINIS Ultra Mesh Gear Bag - Orange</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100002'>
                                        <p><small> High durable nylon and polyester mesh material. Easily adjustable straps.</small></p>
                                        <hr>
                                        <b>$23.11</b><br>

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
                                         "../IMAGES/../IMAGES/Arena%20Swim%20Snorkel%20Small%20Pink.jpg"><br>

                                    <div id="item">
                                        <b>Arena Swim Snorkel Small Pink</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100003'>
                                        <p><small> Silicone mouth piece & strap with PVC tube. Padding on head strap.</small></p>
                                        <hr>
                                        <b>$23.25</b><br>

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
                                         "../IMAGES/Taper.jpg"><br>

                                    <div id="item">
                                        <b>Speedo Taper Splice Jammer - PowerFLEX Eco</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100004'>
                                        <p><small>Retains its shape up to 10X longer. 30% more resistant to fiber breakage in chlorine.</small></p>
                                        <hr>
                                        <b>$49.00</b><br>

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
                                         "../IMAGES/splice.jpg"><br>

                                    <div id="item">
                                        <b>Speedo Quark Splice Pulse Back - Speedo Endurance Lite</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100005'>
                                        <p><small> Unique flat lock stitching for superior fit and feel. Resists bagging, sagging.</small></p>
                                        <hr>
                                        <b>$69.00</b><br>

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
                                         "../IMAGES/vanquish.jpg"><br>

                                    <div id="item">
                                        <b>Speedo Vanquisher Optical Goggle</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100006'>
                                        <p><small>UV protection, Anti-fog. <br> Interchangeable nosepiece.</small></p>
                                        <hr>
                                        <b>$19.90</b><br>

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
                                         "../IMAGES/fast.jpg"><br>

                                    <div id="item">
                                        <b>Speedo Fastskin3 Competition Cap</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='S100007'>
                                        <p><small> Reduces drag by 5.7%. <br> 100% Silicone.</small></p>
                                        <hr>
                                        <b>$40.00</b><br>

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

