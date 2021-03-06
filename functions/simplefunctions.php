<?php

    /** 
     * this takes a string message as parameter and echos an error message,
     */
    function error_message($error_message) {
        global $connection;
        return "{$error_message}" . mysqli_error($connection) . "<br/>";
    }

    /** 
     * Thie will MRES, trim, striplashes and htmlspecialchars on the args given to it
     */
    function check_data($data) {
        global $connection;

        $data = mysqli_real_escape_string($connection, strip_tags($data));
        $data = trim($data);
        $data = stripslashes($data);
        $data = strtolower(htmlspecialchars($data));

        return $data;
    }

    /**
     * This redirects to the page provided as an arg, $where
     */
    function redirect_to($where) {
        header("Location: {$where}");
        exit;
    }

    /**
     * To check if the server is online
     */
    function ping_server() {
        global $connection;
        return mysqli_ping($connection);
    }

    /**
     * updates the database with respect to the parameters given
     * You take the table name, the column to update and the new value
     */
    function update_db($table_name, $set, $to, $index_number) {
        global $connection;

        $sql = "UPDATE `$table_name` SET `$set` = '$to' WHERE `index_number` = '$index_number'";

        $query = mysqli_query($connection, $sql);

        if (!$query) {
            echo "I am not sure of what is going on there.. " . mysqli_error($connection);
        }
    }

    /**
     * This function was intenred to create a directory with the name (or username of the user)
     */
    function create_dir($dir_name) {
        if (!is_dir($dir_name)) {
            mkdir($dir_name);
            echo "dir created..";
        }
    }
?>
