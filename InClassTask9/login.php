<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="registration.html">Back to Registration</a></li>
            </ul>
        </nav>
        <?php
            require('database.php');
            $username = $_POST('user');
            $password = $_POST('password');
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $username_input = set_string($db_connect, $username);
            $password_input = set_string($db_connect, $hash);

            $s = "INSERT INTO LoginCredentials(Username,PasswordEntry) VALUES (?,?)";

            $login_input = mysql_prepare($db_connect, $s);

            mysqli_stmt_bind_param (
                $login_input,
                'ss',
                $username_input,
                $password_input
            );

            $input = mysqli_stmt_execute($login_input);
        ?>
        <h1>Congratulations. You created a login. Now login to the site.</h1>
            <form action="success.php" method="POST">
            <label>User</label><br>
            <input type="text" name="user" id="user" required><br>
            <label>Password</label><br>
            <input type="text" name="password" id="password" required><br>
            <button type="submit">Submit</button>
    </body>
</html>