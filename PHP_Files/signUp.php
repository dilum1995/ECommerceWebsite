<!DOCTYPE html>

<html>
    <head>
        <title>SportsLab</title>
        <meta charset="UTF-8">
        <link href="../CSS_Files/indexCSS.css" rel="stylesheet" type="text/css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Script to check if the password and the re-entered password matches -->
        <script type="text/javascript">
            function checkpass() {
                var one = document.getElementById("password").value;
                var two = document.getElementById("repassword").value;
                if (one == two)
                {
                    return true;
                } else {
                    alert("Warning! Passwords must match!");
                    return false;
                }
            }

        </script>
    </head>

    <body>
        <?php
        include '../PHP_Files/head.php';
        ?>

        <div>

            <?php
            include '../PHP_Files/sideNav.php';
            ?>

            <div id="table">

                <div class="form">
                    <!-- calling the script to check for password confirmation on submission -->
                    <form id="registerform" name="registerform" onsubmit="return checkpass()" method="POST" action="signUpUser.php"> 

                        <!-- creating the required fields and labels -->
                        <p class="contact">
                            <label for="name">Full Name</label>                          
                        </p>
                        <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">
                        <p class="contact">
                            <label for="email">Email</label>
                        </p>
                        <input id="email" name="email" placeholder="example@domain.com" required="" type="email">
                        <p class="contact">
                            <label for="username">Create a username</label>
                        </p>
                        <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">
                        <p class="contact">
                            <label for="password">Create a password</label>
                        </p>
                        <input id="password" name="password" required="" type="password">
                        <p class="contact">
                            <label for="repassword">Confirm your password</label>
                        </p>
                        <input id="repassword" name="repassword" required="" type="password">  

                        <p class="contact">
                            <label for="phone">Mobile phone</label>
                        </p>
                        <input id="phone" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="phone number" type="text"><br><br>

                        <!-- creating the drop down list for selecting the month in the birthday -->
                        <p>
                            <label>Birthday</label> <label class="month"><select class="select-style" name="BirthMonth" required="">
                                    <option value="">
                                        Month
                                    </option>
                                    <option value="01">
                                        January
                                    </option>
                                    <option value="02">
                                        February
                                    </option>
                                    <option value="03">
                                        March
                                    </option>
                                    <option value="04">
                                        April
                                    </option>
                                    <option value="05">
                                        May
                                    </option>
                                    <option value="06">
                                        June
                                    </option>
                                    <option value="07">
                                        July
                                    </option>
                                    <option value="08">
                                        August
                                    </option>
                                    <option value="09">
                                        September
                                    </option>
                                    <option value="10">
                                        October
                                    </option>
                                    <option value="11">
                                        November
                                    </option>
                                    <option value="12">
                                        December
                                    </option>
                                </select> &nbsp; &nbsp;<label>Day </label><input class="birthday" maxlength="2" name="BirthDay" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Day" required="">
                            &nbsp; &nbsp;
                            <label>Year <input class="birthyear" maxlength="4" name="BirthYear" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Year" required= ""></label>
                        </p> <br>

                        <p>
                            <label>Gender</label> <select class="select-style" name="gender" >
                                <option value="select">
                                    i am..
                                </option>
                                <option value="m">
                                    Male
                                </option>
                                <option value="f">
                                    Female
                                </option>
                                <option value="others">
                                    Other
                                </option>
                            </select>
                        </p> <br>
                        <div align="center">
                            <input id="signBtn1" type="submit" value="Sign me up!" >
                        </div>
                    </form>
                </div>

            </div>

            <?php
            include '../PHP_Files/login.php';
            ?>

        </div>

        <?php
        include '../PHP_Files/footer.php';
        ?>

    </body>
</html>