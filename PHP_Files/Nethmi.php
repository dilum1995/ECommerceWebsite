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
                    <!-- setting the link for the email to be sent -->
                    <img src="../IMAGES/nethmi1.jpg" alt="Photo of Nethmi" id="pic" height="280" width="260" border="5"	/>

                    <div id="contact-info" class="vcard">

                        <h1 class="fn">Nethmi Jayawardena</h1>

                        <p>
                            Mobile: <span class="tel">077-2799273</span><br />
                            Email: <a class="email" href="mailto:nethmi.2014107@iit.ac.lk">nethmi.2014107@iit.ac.lk</a>
                        </p>
                    </div>
                    <!-- setting the info about the individual -->
                    <div id="objective">
                        <p>
                            I am an outgoing and energetic young professional, seeking a 
                            career that fits my professional skills, personality and knowledge. 
                            My ability to not give up and complete any given task to the 
                            best of my knowledge and in the shortest possible time, 
                            can bring advantages to your organization. 
                        </p>
                    </div>

                    <div class="clear"></div>

                    <dl>
                        <dd class="clear"></dd>

                        <dt>Education</dt>
                        <dd>
                            <h2>Informatics Institute of Technology - Sri Lanka</h2>
                            <p><strong>Major:</strong> Computer Science<br />
                                <strong>Minor:</strong> Game Development</p>
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Skills</dt>
                        <dd>
                            <h2>Office skills</h2> 
                            <p>Office and records management, database administration, event organization, customer support.</p>

                            <h2>Computer skills</h2>
                            <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows, Linux, Unreal Engine, CryENGINE, Unity</p>
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Experience</dt>
                        <dd>
                            <h2>Cutting Edge <span>Team Member - illusionArc - 2015</span></h2>
                            <ul>
                                <li>Won second place in competition</li>
                                <li>Helped coordinate and manage design and development</li>
                                <li>Provided support for team members</li>
                            </ul> 
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Hobbies</dt>
                        <dd>
                            <ul>
                                <li>Reading</li>
                                <li>Programming Enthusiast</li>
                                <li>Arts & creations</li>
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

