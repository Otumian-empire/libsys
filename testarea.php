<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <title>Document</title>
    </head> 
    <body>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Select image to upload:<br>
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </body>

</html>
