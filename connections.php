<?php

    $server="localhost";
    $user="tutorial";
    $pass="supersecretpassword";
    $db="tutorials";

    // connect to mysql

    $connection = mysqli_connect($server, $user, $pass, $db);
    if (!$connection) {
        die("Sorry, can't connect to the mysql." . mysqli_connect_error());
    }
    // select the db
    $db_select = mysqli_select_db($connection, $db);
    if (!$db_select) {
        die("Sorry, can't select the database." . mysqli_connect_error());
    }

?>
