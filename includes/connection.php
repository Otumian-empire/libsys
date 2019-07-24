<?php
    // start a session
    if (!session_start()) {
        session_start();
    }
 
    // database connection..
    $connection = mysqli_connect("localhost", "root", '');
    if (mysqli_connect_errno()) {
        die("Couldn't connect to the database. " . mysqli_connect_error());
    }

    // database selection
    $db_selection = mysqli_select_db($connection, "libsys");
    if (!$db_selection) {
        die("Couldn't select the database. " . mysqli_error($connection));
    }
?>
