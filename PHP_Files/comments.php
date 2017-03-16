<?php

if (isset($_SESSION['id'])){
    echo "<html>
    <head>
    <script type='text/javascript'>
        function notice() {
            alert('To add a comment please enter your name and email, and also use the scale of a 5 being excellent and 1 being poor to rate our website, Thank You!');
        }

    </script>

    <title>
    </title>
</head>
<body >


    <div class='form'>
    
        <br><p><h3>Write Your comment here</h3></p><br>
        <form action='../PHP_Files/saveComments.php' id='commentsform' method='POST' name='commentsform' onsubmit='checklogin()'>
            <label>Name:</label><br>
            <input id='entername' name='comName' type='text-area' required='' size = '25'><br><br>
            <label>Email:</label><br>
            <input id='entername' name='mail' type='Email' required='' size = '25'><br>
            <br>
            <label>Comments:</label><br>

            <textarea name='comment' cols='50' rows='10'></textarea><br>
            <br>

            <label>Rating:</label><br>
            <input type='radio' name='rate' value='1' >Poor
            <input type='radio' name='rate' value='2' >Satisfactory
            <input type='radio' name='rate' value='3' >Good
            <input type='radio' name='rate' value='4' >Very Good
            <input type='radio' name='rate' value='5' >Excellent
            <br>
            <br>

            <input id='commentadd' type='submit' value='Add Comment'> 
            <input id='clear' type='reset' value='clear'>
            <input id='help' type='button' value='Help' onclick='notice()'>
        </form>
    </div>
</body>
</html>";
} else {
    echo "<h3>Login or sign up to write a comment</h3>";
}

?>