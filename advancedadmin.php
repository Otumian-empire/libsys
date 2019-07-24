<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Advanced | Panel</title>
        <!-- <link rel="stylesheet" type="" href="./css/student.css">
        <link rel="stylesheet" type="" href="./css/form.css"> -->
        
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
    </head>
    <body>
        <div class="container">
            <h1>Admin | Panel</h1>
            <a href="admin.php">Basic panel</a>
            <p>Perform advanced search queries here</p>
                <div class="container2">
            
                    <div class="float_left">
                        <form action="form.php" method="post" >
                            <table class="center">
                                <tr>
                                    <tr><th>Student search</th></tr>
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
                                    <td><label for="level">Level</label></td>
                                    <td><input type="text" name="level"></td>
                                </tr>

                                <tr>
                                    <td><label for="email">Email</label></td>
                                    <td><input type="email" name="email" id=""></td>
                                </tr>

                                <tr>
                                    <td><label for="number">Number</label></td>
                                    <td><input type="telephone" name="password" id=""></td>
                                </tr>
                                
                                <tr>
                                    <td><p>press this button to search</p></td>
                                    <td><input type="button" value="SUBMIT" name="advance_query_btn"></td>
                                </tr>

                            </table>
                                
                        </form>
                    
                    </div>

                    <div class="float_right">
                        <form action="form.php" method="post" >
                            <table class="center">
                                <tr>
                                    <tr><th>Book search</th></tr>
                                    <td> <label for="first_name">Title</label></td>
                                    <td><input type="text" name="first_name"></td>
                                </tr>

                                <tr>
                                    <td><label for="last_name">Category</label></td>
                                    <td> <input type="text" name="last_name"></td>
                                </tr>

                                <tr>
                                    <td><label for="other_name">Author</label></td>
                                    <td><input type="text" name="other_name"></td>
                                </tr>
                                
                                <tr>
                                    <td><p>press this button to search</p></td>
                                    <td><input type="button" value="SUBMIT" name="advance_query_btn"></td>
                                </tr>

                            </table>
                                
                        </form>
                    
                    </div>

                </div>

            <br><br>
            <div class="information_area">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Available</th>
                        <th>Category</th>
                        <th>Author</th>
                    </tr>
                    <tr>
                        <td>Akiola Science</td>
                        <td>1</td>
                        <td>Science</td>
                        <td>Michael otu</td>
                    </tr>
                    <tr>
                        <td>Discrete Maths</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>Michael otu</td>
                    </tr>
                    <tr>
                        <td>Discrete Maths</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>Michael otu</td>
                    </tr>                
                    <tr>
                        <td>Discrete Maths</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>Michael otu</td>
                    </tr>
                </table>
            </div>

        </div>
    </body>
</html>