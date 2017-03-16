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
                    <img src="../IMAGES/benuri1.jpg" alt="Photo of Benuri" id="pic" height="280" width="260" border="5"	/>

                    <div id="contact-info" class="vcard">

                        <h1 class="fn">Benuri Alwis</h1>

                        <p>
                            Mobile: <span class="tel">077-1144496</span><br />
                            <!-- setting up email to be send to the clicked link -->
                            Email: <a class="email" href="mailto:alwisbenuri@gmail.com">alwisbenuri@gmail.com</a>
                        </p>
                    </div>
                    <!-- setting the info about the individual -->
                    <div id="objective">
                        <p>
                            I am a hardworking, determined individual with the capability of working alone effectively or as a supportive team member. 
                            My eventual career goal is to become a fully-qualified and experienced software engineer, 
                            with the longer-term aspiration of moving into project management.
                        </p>
                    </div>

                    <div class="clear"></div>

                    <dl>
                        <dd class="clear"></dd>

                        <dt>Education</dt>
                        <dd>
                            <h2>Informatics Institute of Technology - Sri Lanka</h2>
                            <p><strong>Major:</strong> Software Engineering<br />
                                <strong>Other:</strong> GCE O/L </br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GCE A/L
                            </p>
                        </dd>
                        
                        <dd class="clear"></dd>

                        <dt>Skills</dt>
                        <dd>
                            <h2>Office skills</h2> 
                            <p>Office and records management, database administration, event organization, customer support.</p>

                            <h2>Computer skills</h2>
                            <p>Windows, Microsoft Office 2013, Adobe Photoshop, SQL Developer, Java, C++(beginner), HTML, JavaScript, CSS</p>

                            <h2>Personal skills</h2>
                            <p>Adaptability, Organizing Skills, Teamwork, Reliability, Management </p>
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
                                <li>Computing (Programming)</li>
                                <li>Intensive Reading</li>

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
