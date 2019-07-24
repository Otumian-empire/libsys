<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php
    // query the database for updating
    // upon signing out
    // active status should be set to 0
    // the last
    $index_number = '';

    if (isset($_SESSION['index_number'])) {
        $index_number = $_SESSION['index_number'];
    }
    $date = date('Y-m-d H:i:s');
    update_db('student', 'time_logout', $date, $index_number);
    update_db('student', 'active_status', 0, $index_number);

    session_destroy();

    if ($connection) {
        mysqli_close($connection);
    }

    redirect_to("indexpage.php");
?>