<!DOCTYPE html>

<html>
    <head>
        <script>
            /*to open up the pop up window to send the email*/
            function sendmail() {

                window.open("../HTML_Files/popupform.html", "ContactUs", "width=250,height=500");

            }
        </script>
    </head>
    <body>
        <div id="footer">
            <br>

            <hr>
            SportsLab © sportslab.com
        </div>

        <!--part containing information in the footer-->
        <div id="bottom">
            <table id="bottomTb" width="100%">
                <tr>
                    <th>
                        <h3>Contact Us</h3>
                    </th>
                    <th>
                        <h3>Visit Our Retail</h3>
                    </th>
                    <th>
                        <h3>Hours</h3>
                    </th>
                    <th>
                        <h3>Navigate</h3>
                    </th>
                    <th>
                        <h3>Category</h3>
                    </th>
                    <th>
                        <h3>Our Company</h3>
                    </th>
                    <th>
                        <h3>About Us</h3>
                    </th>
                </tr>
                <tr>
                    <td>
                        0772799273 / 0772459943 <br> <br>
                        Email : &nbsp;
                        <a href="mailto:sprtzlab@gmail.com" onclick="sendmail();">sprtzlab@gmail.com</a> <br> <br>
                        <div id="footerConnect">
                            <?php
                            include '../HTML_Files/icons.html';
                            ?>
                        </div>
                    </td>
                    <td>
                        <a href="location.php">Location</a> <br> <br>
                        57 Ramakrishna Rd <br>
                        Colombo 00600 <br>
                        Sri Lanka 
                    </td>
                    <td>
                        RETAIL HOURS <br>
                        Monday - Sunday <br>
                        9am - 5:30pm <br> <br>
                        PHONE HOURS <br>
                        Monday - Sunday <br>
                        9am - 5:30pm
                    </td>
                    <td>
                        <a href="index.php">Home</a> <br> <br>
                        <a href="quiz.php">Quiz</a> <br> <br>
                        <a href="signUp.php">Sign Up</a> 
                    </td>
                    <td>                        
                        <a href="Badminton.php">Badminton</a> <br> <br>
                        <a href="Cricket.php">Cricket</a> <br> <br>
                        <a href="Swimming.php">Swimming</a> <br> <br>
                        <a href="Tennis.php">Tennis</a>
                    </td>

                    <td>              
                        <a href="shippingPolicy.php">Shipping Policy</a> <br> <br>
                        <a href="SiteMap.php">Site Map</a> <br> <br>
                        <a href="testimonials.php">Reviews</a>
                    </td>
                    <td>                       
                        <a href="Rukshan.php">Rukshan Hassim</a> <br> <br>
                        <a href="Nethmi.php">Nethmi Jayawardena</a> <br> <br>
                        <a href="Lakshan.php">Lakshan Gunarathna</a> <br> <br>
                        <a href="Benuri.php">Benuri Alwis</a> <br> <br>
                        <a href="Manul.php">Manul Singhe</a> <br> <br>
                    </td>
                </tr>

            </table>
        </div>
    </body>
</html>

