<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
    </head>

        <body>
            <form action="checklogin.php" method="post">
                Name:<br>
                <input type="text" name="name">
                    <br>
                    Password:<br>
                    <input type="password" name="password">
                    <br><br>
                <input type="submit" value="Submit">
            </form>
            <p>

             <?php

            /* echo "Hello World";
             echo "<br>". "Hello" . " you fools" . " " ."Good luck with getting a pass" . "!";
             echo "<br>". 5*10; */

             $username = "Mihail";
             $password = "mypassword";

             setcookie(`access_level`,`standardUser`);

             ?>

            </p>

        </body>

</html>