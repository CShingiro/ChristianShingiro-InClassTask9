<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            require('database.php');
            require('login.php');
            $password_check = $_POST('password');
            if (password_verify($password_check, $hash ) && $input) {
                echo "Success";
            }
            else {
                echo "Invalid username/password combination";
            }
        ?>
    </body>
</html>