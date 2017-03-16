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

            <!--part containing information-->
            <div id="table">
                <div id="page-wrap">
                    <!-- Setting the image -->
                    <img src="../IMAGES/lakshan1.jpg" alt="Photo of Lakshan" id="pic" height="280" width="260" border="5"	/>

                    <div id="contact-info" class="vcard">

                        <h1 class="fn">Lakshan Gunarathna</h1>

                        <p>
                            Mobile: <span class="tel">076-8038846</span><br />
                            <!-- setting up email to be send to the clicked link -->
                            Email: <a class="email" href="mailto:lakshan.1998@gmail.com">lakshan.1998@gmail.com</a>
                        </p>
                    </div>
                    <!-- setting the info about the individual -->
                    <div id="objective">
                        <p>
                            I am following an undergraduate degree from the University of Westminster, UK.
                            Particularly when It comes Web Designing and Software Development.
                            I have been mastering both these talents for a long time.
                            I understand that managing professional practice when dealing with customers is considered vital and in my case I come forward with value added service.
                            So take a look at my work and give me a chance to impress you. Have a nice day!
                        </p>
                    </div>

                    <div class="clear"></div>

                    <dl>
                        <dd class="clear"></dd>

                        <dt>Education</dt>
                        <dd>
                            <h2>Informatics Institute of Technology - Sri Lanka</h2>
                            <p><strong>Major:</strong> Software Engineering<br />

                            </p>
                        </dd>
                        
                        <dd class="clear"></dd>

                        <dt>Skills</dt>
                        <dd>
                            <h2>Office skills</h2> 
                            <p>Office and records management, database administration, event organization, customer support.</p>

                            <h2>Computer skills</h2>
                            <p>Windows, Microsoft Office 2013, Adobe Photoshop, SQL Developer, Java, C++(beginner), HTML, JavaScript, CSS</p>


                        </dd>

                        <dd class="clear"></dd>

                        <dt>Experience</dt>
                        <dd>
                            <p> ----- </p>
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Hobbies</dt>
                        <dd>
                            <ul>
                                <li>Programming Enthusiast</li>
                                <li>Passionate Gamer</li>

                            </ul>
                        </dd>

                        <dd class="clear"></dd>

                        <dt>References</dt>
                        <dd>Available on request</dd>

                        <dd class="clear"></dd>
                    </dl>

                    <div class="clear"></div>

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
