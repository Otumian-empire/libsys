<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Borrow a book</title>
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <link rel="stylesheet" href="./css/form.css">
        <link rel="stylesheet" href="./css/student.css">
    </head>
    <body align="center">

        <div class="container" >

            <div class="signin" >

                <p>
                    <h1 >To borrow from the library, fill in the gaps below...</h1>
                </p>
                
                <form action="form.php" method="post" >
                    <label for="book_title">Book title(s)</label>
                    <input type="text" name="book_title">
                    <label for="category">Category</label>
                    <input type="text" name="Category" id="">

                    <input type="button" value="SUBMIT" name="signin_button">
                </form>

            </div>

            <div class="signin" class="center order">

                <p>
                    <h1>Please fill the forms to borrow a book from the library, if it's your first...</h1>
                </p>

                <form action="form.php" method="post" >
                    <table class="center">
                        <tr>
                            <td> <label for="first_name">First Name</label></td>
                            <td><input type="text" name="first_name"></td>
                        </tr>

                        <tr>
                            <td><label for="last_name">Last Name</label></td>
                            <td> <input type="text" name="last_name"></td>
                        </tr>

                        <tr>
                            <td><label for="other_name">Other Name</label></td>
                            <td><input type="text" name="other_name"></td>
                        </tr>

                        <tr>
                            <td><label for="index_number">Index Number</label></td>
                            <td><input type="text" name="index_number"></td>
                        </tr>

                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input type="text" name="password" id=""></td>
                        </tr>

                        <tr>
                            <td><p>press this button when you are done</p></td>
                            <td><input type="button" value="SUBMIT" name="signup_button"></td>
                        </tr>

                    </table>
                    
                </form>

            </div>

        </div>

    </body>

</html>