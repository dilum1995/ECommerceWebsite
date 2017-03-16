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
                                         "../IMAGES/../IMAGES/Gray-Nicolls%20Chimera%20Limited%20Edition%20Cricket%20Bat.jpg"><br>

                                    <div id="item">
                                        <b>Gray-Nicolls Chimera Limited Edition Cricket Bat</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100001'>
                                        <p><small> A hybrid creature – suitable for all formats. <br> Boasts a monstrous 41mm edge profile.</small></p>
                                        <hr>
                                        <b>$437.44</b><br>

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
                                         "../IMAGES/Gunn%20&%20Moore%20Ross%20Taylor%20Player%20Edition%20Cricket%20Bat.jpg"><br>

                                    <div id="item">
                                        <b>Gunn & Moore Ross Taylor Player Edition Cricket Bat</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100002'>
                                        <p><small> Lightweight, Traditional Face Profile. <br> Flowing Power Edges, Size: SH, LH.</small></p>
                                        <hr>
                                        <b>$582.11</b><br>

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
                                         "../IMAGES/adidas%20Adizero%20Rawtek%20Cricket%20Helmet.jpg"><br>

                                    <div id="item">
                                        <b>adidas Adizero Rawtek Cricket Helmet</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100003'>
                                        <p><small> Carbon fibre & kevlar shell with eps liner. <br> Grade 5 titanium grille, weight 590 grams.</small></p>
                                        <hr>
                                        <b>$223.94</b><br>

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
                                         "../IMAGES/Kookaburra%201250%20Long%20Cut%20Wicket%20Keeping%20Gloves.jpg"><br>

                                    <div id="item">
                                        <b>Kookaburra 1250 Long Cut Wicket Keeping Gloves</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100004'>
                                        <p><small> Features traditional 'long cut' cuff.<br> Premium aniline sheep leather with gusset.</small></p>
                                        <hr>
                                        <b>$115.44</b><br>

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
                                         "../IMAGES/../IMAGES/Gunn%20&%20Moore%20Original%20Limited%20Edition%20Batting%20Pad%20Print%20This%20Page.jpg"><br>

                                    <div id="item">
                                        <b>Gunn & Moore Original Limited Edition Batting Pad</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100005'>
                                        <p><small> Luxury Pro PU, comfort straps. <br> Traditional seven cane construction.</small></p>
                                        <hr>
                                        <b>$115.44</b><br>

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
                                         "../IMAGES/Kookaburra%20County%20Club%20Cricket%20Ball.jpg"><br>

                                    <div id="item">
                                        <b>Kookaburra County Club Cricket Ball</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100006'>
                                        <p><small> Hand stitched 4-piece construction. <br> Waxed & finished to English requirements.</small></p>
                                        <hr>
                                        <b>$11.61</b><br>

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
                                         "../IMAGES/../IMAGES/Gray-Nicolls%20Legend%20Cricket%20Bag.jpg"><br>

                                    <div id="item">
                                        <b>Gray-Nicolls Legend Cricket Bag</b><br>

                                        <hr>
                                        <input id="prodcutID" name="prodcutID" type="text" value='C100007'>
                                        <p><small> Multi Pocket Stand Up Design.<br> Shoe, Helmet and Valuables Pockets.</small></p>
                                        <hr>
                                        <b>$131.78</b><br>

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

