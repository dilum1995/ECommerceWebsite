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

            <!--part containing the questions-->
            <div id="table">
                    <div id="quizForm" >
                        <form method="post" id="FormID">

                            Q1: Which was the 1st non Test playing country to beat India in an international match? <br>
                            <input type="radio" name="Q1" value="a" >Canada<br>
                            <input type="radio" name="Q1" value="b" >Zimbabwe<br>
                            <input type="radio" name="Q1" value="c" >Sri Lanka<br>
                            <input type="radio" name="Q1" value="d" >East Africa<br>
                            <br><br>


                            Q2: Who did John McEnroe defeat in the final to win his first Wimbledon singles title? <br>
                            <input type="radio" name="Q2" value="a" >Bjorn Borg<br>
                            <input type="radio" name="Q2" value="b" >Jimmy Connors<br>
                            <input type="radio" name="Q2" value="c">Kevin Curren<br>
                            <input type="radio" name="Q2" value="d" >Chris Lewis<br>
                            <br><br>

                            Q3: How long was the longest singles match in recorded tennis history? <br>
                            <input type="radio" name="Q3" value="a">8 hours, 49 minutes<br>
                            <input type="radio" name="Q3" value="b">7 hours, 12 minutes<br>
                            <input type="radio" name="Q3" value="c">6 hours, 32 minutes<br>
                            <input type="radio" name="Q3" value="d">5 hours, 14 minutes<br>
                            <br><br>

                            Q4:What is the standard height of a badminton net at the center of the court? <br>
                            <input type="radio" name="Q4" value="a">4 feet 6 inches<br>
                            <input type="radio" name="Q4" value="b">5 feet<br>
                            <input type="radio" name="Q4" value="c">5 feet 6 inches<br>
                            <input type="radio" name="Q4" value="d">3 feet<br>
                            <br><br>

                            Q5:How many feathers are there in a standard feathered badminton shuttlecock? <br>
                            <input type="radio" name="Q5" value="a">12 feathers<br>
                            <input type="radio" name="Q5" value="b">16 feathers<br>
                            <input type="radio" name="Q5" value="c">20 feathers<br>
                            <input type="radio" name="Q5" value="d">15 feathers<br>
                            <br><br>

                            Q6:Badminton World rankings are calculated and released by BWF at what frequency? <br>
                            <input type="radio" name="Q6" value="a">Once in every year<br>
                            <input type="radio" name="Q6" value="b">Once in every month.<br>
                            <input type="radio" name="Q6" value="c">Once in every week<br>
                            <input type="radio" name="Q6" value="d">Twice a year<br>
                            <br><br>

                            Q7:Who was the famous US swimmer who won 5 gold medals in the 2004 Athens Olympics? <br>
                            <input type="radio" name="Q7" value="a">Ian Thorpe<br>
                            <input type="radio" name="Q7" value="b">Michael Phelps<br>
                            <input type="radio" name="Q7" value="c">Tom Dolan <br>
                            <input type="radio" name="Q7" value="d">Danyon Loader <br>
                            <br><br>
                            Q8:In the 2004 Athens Olympics, USA got the first place in swimming events. How many medals did it win? <br>
                            <input type="radio" name="Q8" value="a">26<br>
                            <input type="radio" name="Q8" value="b">28<br>
                            <input type="radio" name="Q8" value="c">30<br>
                            <input type="radio" name="Q8" value="d">31<br>
                            <br><br>
                            Q9:In which year was swimming made open for women? <br>
                            <input type="radio" name="Q9" value="a">1896<br>
                            <input type="radio" name="Q9" value="b">1900<br>
                            <input type="radio" name="Q9" value="c">1908<br>
                            <input type="radio" name="Q9" value="d">1912<br>
                            <br><br>
                            Q10:Name the male swimmer who has won 5 Olympic medals and 36 national championships.<br>
                            <input type="radio" name="Q10" value="a">Johnny Weissmuller<br>
                            <input type="radio" name="Q10" value="b">Grant Hackett<br>
                            <input type="radio" name="Q10" value="c">David Berkoff<br>
                            <input type="radio" name="Q10" value="d">Mark Spitz <br>
                            <br><br>
                            <button id="checkBtn" type="button" onclick="checkAnswers()">Check Answers</button>
                            <button id="clearBtn" type="button" onclick="clearAnswers()">Clear Answers</button>    

                        </form>
                    </div>
                
                    <script src="../JS_Files/quiz.js"></script>

            </div>

            <!--including the login section-->
            <?php
            include '../PHP_Files/login.php';
            ?>

            <!--to display the score and result-->
            <div id="QA">
                <div id="score">Score: </div><br>    
                <div id="result">Answers: </div><br>
                <div id="count">Quiz expires in <span id="time"></span> minutes!</div> <br>
            </div>
            
        </div>

        <!--including the footer-->
        <?php
        include '../PHP_Files/footer.php';
        ?>

    </body>
</html>

