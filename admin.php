<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['admin_query_btn']) && $connection) {
            
            $search_type = $query_name = $query_txt_id = $sql = '';

            if (isset($_GET['query_name']) || isset($_GET['query_txt_id'])) {
                $query_name = check_data($_GET['query_name']);
                $query_txt_id = check_data($_GET['query_txt_id']);

                if ($_GET['search_type'] == 'books') {
                    $search_type = 'books';

                    if (empty($query_name) && empty($query_txt_id)) {
                        $sql = "SELECT * FROM '$search_type'";
                    } else {
                        $sql = "SELECT * FROM '$search_type' WHERE `title` = '$query_name' OR `category`='$query_txt_id' ";
                    }

                    $search_query = mysqli_query($connection, $sql);

                    if ($search_query) {
                        echo "This is the search result..<br>";
                        while ($frow = mysqli_fetch_array($search_query)) {
                            echo $frow['title'] . $frow['author'] . $frow['category'] . $frow['number_of_reads'] . $frow['number_of_likes'] . $frow['number_of_dislikes'] . $frow['recommended'] . $frow['date_of_arrival'];
                        }

                    } else {
                        echo mysqli_error($connection);
                    }

                } else {

                    $search_type = 'student';
                    if (empty($query_name) && !empty($query_txt_id)) {
                        $sql = "SELECT * FROM `student` WHERE `index_number` = {$query_txt_id}";
                    } elseif (!empty($query_name) && empty($query_txt_id)) {
                        $sql = "SELECT * FROM `student` WHERE `first_name` LIKE '%{$query_name}%' OR `last_name` LIKE '%{$query_name}%'";
                    } else {
                        $sql = "SELECT * FROM `student`";
                    }
                    
                    $search_query = mysqli_query($connection, $sql);

                    if ($search_query) {

                        while ($frow = mysqli_fetch_array($search_query)) {

                            $output = "Student name:" . $frow['first_name'] . " - ". $frow['last_name'] ."<br>" ." Student index number: " . $frow['index_number'] . "  Student level: " . $frow['student_level'] . " Student course: " . $frow['course'] . "<br>Student email: " . $frow['email'] . " Student phone number: " . $frow['phone_number'] . " Student is " . $frow['active_status'] = ($frow['active_status'] == 1)? "on-line":"off-line";
                        }
                        echo "end of student query search result..<br>";
                    } else {
                        echo mysqli_error($connection);
                    }
                }

            } else {
                echo "You must provide at least one field..<br>";
            }

        } else {
            echo mysqli_error($connection);
        }
    } else {

        echo "Choose the search type to indicate the search you want to make<br>";
        echo "If it is a book search, then at name write the title of the book and the other, category<br>";
        echo "If it is a student search, then at name write the name of the student and the other, index number of the student<br>";
    }
?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin | Panel</title>
        <!-- <link rel="stylesheet" type="" href="./css/form.css"> -->
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
    </head>
    <body>
        <div class="container">
            <h1>Admin | Panel</h1>
            <a href="advancedadmin.php">Advanced panel</a>
            <p>Perform search queries here</p>
            <div>
                <form action="admin.php" method="get">
                    <label for="search_type">Search type</label>
                    <select name="search_type" id="">
                        <option value="books">Book</option>
                        <option value="student">Student</option>
                    </select>
                    <label for="name">Name</label>
                    <input type="text" name="query_name">
                    <label for="category_or_index_number">Category/Index number</label>
                    <input type="text" name="query_txt_id">
                    <input type="submit" name="admin_query_btn">
                </form>
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
