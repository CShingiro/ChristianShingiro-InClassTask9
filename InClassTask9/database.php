<?php
    function prepare_string($db, $input) {
        $input = strip_tags($input);
        $input = mysqli_real_escape_string($db, trim($input));
        return $input;
    }

    define('DB_USER', 'Admin');
    define('DB_PASSWORD', 'password');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'PHPInClassTask9');

    $db_connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('Could not connect to MySQL: '. mysqli_connect_error());
    mysqli_set_charset($db, 'utf8');
?>