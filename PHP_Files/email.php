<!DOCTYPE html>

<html>
    <head>
        <title>
            Status
        </title>

        <!--internal style for the background of the email-->
        <style>
            body{
                background:#333;
            }

        </style>

    </head>
    <body>
        <!-- creating php file to send email -->
        <?php
        // getting the values from the submitted form, creating variables using them 
        $to = "sprtzlab@gmail.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        //combines the message and the name of the sender so that it can be passed as one value to when sending mail 
        $body = $message . " -From" . " " . $name;
        //headers use to display info such as the senders email
        $headers = "From:" . "-" . $email . "\r";
        /* this will send the mail and also check if it was succesfulyl sent or failed to sent.
          within the if fucntion the command is given to send the mail, if the mail is sent
          without error it will be equals to true hence executnig the if condition and vice-versa */
        if (mail($to, $email, $body, $headers)) {
            //span tag added to add styling to the echo output.
            echo '<span style="color:white;text-align:center;"> Message successfully sent! </span>';
        } else {
            echo '<span style="color:white;text-align:center;"> Message delivery failed...; </span>';
        }
        ?>
    </body>
</html>