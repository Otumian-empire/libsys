<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php require_once("includes/autologout.php"); ?>

<?php

    $error_msg = "";


    if (isset($_POST['signup_btn']) && $connection) {

        // this line of code will be useless if the server to run php is down
        // this pinging in done in php ; so find js or something similar
        // But it is a good thing too fo the extra security
        // if (ping_server() != 1) {
        //     error_message("There server is done at the moment, would you like to watch a movie?");
        //     redirect_to("youtube.com");
        // }

        // header("Location: Refresh:0, testarea.php");
        // exit;


        $first_name = strtolower($_POST['first_name']);
        $last_name = strtolower($_POST['last_name']);
        $index_number = $_POST['index_number'];
        $level = $_POST['level'];
        $program = $_POST['program'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $number = $_POST['number'];


        if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $first_name = check_data($first_name);
            $last_name = check_data($last_name);
            $index_number = check_data($index_number);
            $level = check_data($level);
            $program = check_data($program);
            $password = check_data($password);
            $email = check_data($email);
            $number = check_data($number);
        } else {
            $error_msg .= "There was an error somewhere " . mysqli_error($connection) . "";
        }

        // there are more to be done to validate the password
        // checking the password length
        if (strlen($password) < 8) {
            $error_msg .= error_message("The longer the password, the better and safer, don't trust me..");
        }
        // md5 encrypting the password
        $password = md5($password);

        // checking if the user already exist in the database
        // if user exit, take user to the formsignin.php
        $query = "SELECT * FROM `student` 
                WHERE (`first_name` LIKE '$first_name' AND `last_name` LIKE '$last_name') OR `index_number` = '$index_number' OR `email` = '$email'
                LIMIT 1";

        $select_query = mysqli_query($connection, $query);

        if ($select_query && mysqli_num_rows($select_query) > 0) {
            $_SESSION['index_number'] = $index_number;
            redirect_to("formsignin.php");
        } else {
            // date for for creating and signing up
            $date = date('Y-m-d H:i:s');

            // putting the student into the database if he doesn't exist in the database
            $insert_query = "INSERT INTO `student` (
                `first_name`, `last_name`, `index_number`, `student_level`, `course`, `student_password`, `email`, `phone_number`, `active_status`, `number_of_times_login`, `time_login`, `time_logout`, `date_account_was_created`
                ) 
                VALUE (
                    '$first_name','$last_name', '$index_number', '$level', '$program', '$password', '$email',
                    '$number', 1, 1, '$date','$date', '$date'
                )";

            $insert_query = mysqli_query($connection, $insert_query);

            if (!$insert_query) {
                $error_msg .= error_message("Couldn't add you to our db");
            } else {
                $_SESSION['index_number'] = $index_number;
                redirect_to("studentpanel.php");
            }
        }
        

    }
        
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <title>Register here</title>
    </head>
    <body>
        <div class="signin" class="center order">

            <span><?php echo($error_msg . "<br/>"); ?></span>
            <p>
                <h1 >Sign Up to have a virtual account, Please...</h1>
            </p>
            <!-- firstname, lastname, othername, indexnumber, level, password, email, number -->
            <form action="formsignup.php" method="post" >
                <table class="center">
                    <tr>
                        <td> <label for="name">First Name</label></td>
                        <td><input type="text" name="first_name" value="" placeholder="first name" required></td>
                    </tr>

                    <tr>
                        <td> <label for="name">Last Name</label></td>
                        <td><input type="text" name="last_name" value="" placeholder="last name" required></td>
                    </tr>

                    <tr>
                        <td><label for="index_number">Index Number</label></td>
                        <td><input type="text" name="index_number" placeholder="index number" required></td>
                    </tr>

                    <tr>
                        <td><label for="level">Level</label></td>
                        <td><input type="text" name="level" placeholder="level" required></td>
                    </tr>

                    <tr>
                        <td><label for="program">Program</label></td>
                        <td> <input type="text" name="program" placeholder="BTE, BIT, BCE, DIT, BEEE, ..."></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" name="password" id="" placeholder="password" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email*</label></td>
                        <td><input type="email" name="email" id="" placeholder="email" required></td>
                    </tr>

                    <tr>
                        <td><label for="number">Number</label></td>
                        <td><input type="telephone" name="number" id="" placeholder="telephone" required></td>
                    </tr>
                    
                    <tr>
                        <td><p>press this button when you are done</p></td>
                        <td><input type="submit" value="SUBMIT" name="signup_btn"></td>
                    </tr>

                </table>
            
            </form>

        </div>
    </body>
</html>

<?php if ($connection) {mysqli_close($connection);} 