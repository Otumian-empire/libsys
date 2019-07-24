<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php require_once("includes/autologout.php"); ?>

<?php

    $error_msg = '';

    if (isset($_POST['signin_btn']) && $connection) {
        $index_number = $_POST['index_number'];
        $password = $_POST['si_password'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $index_number = check_data($index_number);
            $password = check_data($password);
        } else {
            $error_msg .= error_message("The longer the password, the better and safer, don't trust me..");
            exit;
        }

        // password is here, you got to work on this and make more
        if (strlen($password) > 8) {
            // md5 encrypting the password
            $password = md5($password);
            echo $password;
        } else {
            $error_msg .= error_message("The longer the password, the better and safer, don't trust me..");
        }
        
        // check if the user already exist
        $sql = "SELECT * FROM `student`
         WHERE `index_number` = '$index_number' 
         LIMIT 1";

        $select_query = mysqli_query($connection, $sql);

        if ($select_query) {
            $sql = "SELECT * FROM `student`
             WHERE `index_number` = '$index_number'
             AND `student_password` = '$password'
             LIMIT 1";

            $index_n_password_query = mysqli_query($connection, $sql);
            
            if ($index_n_password_query && mysqli_num_rows($index_n_password_query) > 0) {

                // when the user signs in,
                // update the time logged in. active state,
                // and number of times logged in
                update_db('student', 'time_login', date('Y-m-d H:i:s'), $index_number);
                
                // create a select function 
                $current_value = 0;
                $sql = "SELECT `number_of_times_login` FROM `student` WHERE `index_number` = '$index_number' LIMIT 1";

                $number_of_times_login = mysqli_query($connection, $sql);

                if ($number_of_times_login) {
                    while ($row = mysqli_fetch_array($number_of_times_login)) {
                        $current_value = $row[0];
                    }
                } else {
                    echo mysqli_error($connection);
                }
                

                update_db('student', 'number_of_times_login', ($current_value + 1), $index_number);
                update_db('student', 'active_status', 1, $index_number);

                $_SESSION['index_number'] = $index_number;
                redirect_to("studentpanel.php");
                
            } else {
                $error_msg .= error_message("Either your index number is wrongly entered or password is incorrect or you just want to try my AI to see if you didn't enter any form");
            }

        } else {
            $error_msg .= error_message("Please, do you mind to sign up? We can't find you anywhere in our system except that you have the right to create a free account..");
        }
        
    } else {
        $error_msg .= error_message("We know who we are by investing time to read on things that may explain certain facts about others that we see in ourselves. yet we are not the same..");
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register | Login</title>
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <link rel="stylesheet" href="css/indexpage.css">
    </head>
    <body>

        <div class="container center">
            
            <div class="signin">
                <p>
                    <?php echo $error_msg; ?>
                </p>
                <p>
                    <h1>Sign in, if you have virtual account...</h1>
                </p>
                
                <form action="formsignin.php" method="post" >
                    <label for="index_number">Index Number</label>
                    <input type="text" name="index_number" value="040918148" required>
                    <label for="password">Password</label>
                    <input type="password" name="si_password" id="si_password"  value="michaelotu" required>
                    
                    <input type="checkbox" name="view_password_btn"  onclick="show_password()"> <span>Show password</span>
                    <input type="submit" value="SUBMIT" name="signin_btn">
                </form>

            </div>

        </div>

        <!-- javascript -->
        <script src="./js/basicjs.js"></script>
    </body>

</html>
