<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php require_once("includes/check_session_or_redir_to_indexpage.php"); ?>

<?php
    // Check if the the submit bottom is set and also the file is selected
    if  (isset($_POST['submit_image']) && isset($_FILES['user_image'])) {

        // taking file info
        $fileName = $_FILES['user_image']['name'];
        $fileTmpName = $_FILES['user_image']['tmp_name'];
        $fileSize = $_FILES['user_image']['size'];
        $fileError = $_FILES['user_image']['error'];
        $fileType = $_FILES['user_image']['type'];

        // file extension
        $fileExt = explode('.', $fileName); 

        // into an array opt for the 2nd item
        $fileActualExt = strtolower(end($fileExt));

        // allowed file types
        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {

            if ($fileError === 0) {

                if ($fileSize < 100000) {
                    $fileNewName = uniqid("", true). ".".$fileActualExt;
                    $fileNewName = $index_number. ".".$fileActualExt;

                    $fileDestination = 'userprofileImage/'.$fileNewName;
                    
                    $fileMoved = move_uploaded_file($fileTmpName, $fileDestination);
                    // $fileMoved = move_uploaded_file($_FILES["user_image"]["tmp_name"], $fileDestination);

                    if ($fileMoved) {

                        $_SESSION['user_image'] = $fileDestination;
                        header("Location: studentpanel.php?image_upload_successful");
                    } else {
                        echo "error code " . $fileError;
                        echo "sorry, file upload failed.<br>please try again in a minute later.";
                    }

                } else {
                    echo "please, file is too huge<br>";
                }
            } else {
                echo "There was an error uploading this file<br>"; 
            }
        } else {
            echo "You can not upload files of this type<br>";
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
        <title>Uploading image...</title>
    </head>
    <body>
        <body>
            <div class="center">
                <form class="center" action="image.php" method="POST" enctype="multipart/form-data">
                <label for="user_image">Upload Image</label>
                <input type="file" alt="user image" name="user_image">
                <input type="submit" name="submit_image" value="upload image">
            </div>
            
        </form>
        </body>
        
    </body>
</html>
