<!DOCTYPE html>

<html>
    <body>
        <!--part to navigate from the side-->
        <div id="navDETAIL">
            <p id="category"><strong>Browse by Category</strong>
            </p>

            <hr noshade>

            <ul>
                <li>
                    <a href="Badminton.php">Badminton</a>
                </li>

                <li style="list-style: none"><br>
                </li>

                <li>
                    <a href="Tennis.php">Tennis</a>
                </li>

                <li style="list-style: none"><br>
                </li>

                <li>
                    <a href="Cricket.php">Cricket</a>
                </li>

                <li style="list-style: none"><br>
                </li>

                <li>
                    <a href="Swimming.php">Swimming</a>
                </li>

                <li style="list-style: none"><br>
                </li>
            </ul>

            <!--including the gif-->
            <img src="../IMAGES/b.gif" alt='Our products' style="width: 222px; height: 222px;">
            
            <!--to display the votes-->
            <?php
            include '../HTML_Files/poll.html';
            ?>
        
        </div>
        
    </body>
</html>

