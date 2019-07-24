<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php require_once("includes/check_session_or_redir_to_indexpage.php"); ?>
<?php

    // select all the data from the student table
    // put them at their rightful places in the profile aside
    $sql = "SELECT * FROM `student` WHERE `index_number` = '$index_number' LIMIT 1";
    
    $select_query = mysqli_query($connection, $sql);

    if ($select_query) {
        while ($row = mysqli_fetch_array($select_query)) {
            // last name + first name, email, number, index number, level and year, course
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $number = $row['phone_number'];
            $index_number = $row['index_number'];
            $level = $row['student_level'];
            $course = $row['course'];
            $active_status = $row['active_status'];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student | Doc</title>
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <link rel="stylesheet" href="./css/form.css">
        <link rel="stylesheet" href="./css/student.css">
    </head>
    <body>
        <div class="container center">
            <!-- The info panel, doc -->
            <div class="float_left">
                    
               <div class="profile">
                    <h4>Student Panel</h4>
                    <h5><a href="signout.php">Sign out</a> <a href="virtuallibrary.php">Take me to the library</a></h5>
                    <!-- image + active status -->
                    <div class="image_area">
                        <!-- Pull the image from the database -->
                        <!-- there is a file named image.php, use it -->
                        <!-- instead of testarea.php -->
                        <a href="image.php">
                            <img src="<?php echo($_SESSION['user_image']? $_SESSION['user_image']: 'huhu.png');?>" alt="User image">
                        </a>   
                        <i>
                            <!-- To determine if user is online or off line -->
                            <?php
                                if ($active_status == 1) {
                                    echo "available";
                                } else {
                                    echo "not available";
                                }
                            ?>
                        </i>
                    </div>
                    <!-- name br index number br level br email br number -->
                    <ul>
                        <!-- last name + first name, email, number, index number, level and year, course -->
                        <li><?php echo("{$last_name} {$first_name}");?></li>
                        <li><?php echo("{$email}");?></li>  
                        <li><?php echo("{$number}");?></li>    
                        <li><?php echo("{$index_number}");?></li>
                        <li>
                            <?php
                                switch($level){
                                    case 100:
                                        $level .= " - First year";
                                        echo $level;
                                        break;
                                    case 200:
                                        $level .= " - Second year";
                                        echo $level;
                                        break;
                                    case 300:
                                        $level .= " - Third year";
                                        echo $level;
                                        break;
                                    case 400:
                                        $level .= " - Final year";
                                        echo $level;
                                        break;
                                    default:
                                        $level .= " - The galactic space time line doesn't work here but Welcome to GTUC";
                                        echo $level;
                                        break;
                                }
                            ?>
                         </li>
                         <li><?php echo("{$course}");?></li>
                    </ul>
                </div>
                <div class="books">
                    <h4>Books</h4> 
                    <!-- currently reading books -->
                    <!-- books read -->
                    <!-- books yet to read -->
                    <!-- borrowed book -->
                    <ul>
                        <li>currently reading books</li>
                        <li>books read</li>
                        <li>books yet to read</li>
                        <li>borrowed book</li>
                    </ul>
                </div>

            </div>

            <!-- The info display area -->
            <div class="float_right">
                <h1>Library| student doc</h1>
                <h1>Helooo I am the information area</h1>
                <h3>All the data you want will be displayed here</h3>
                <div class="information_area">
                    <!-- here we put the data to display -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio natus quidem, accusantium deleniti minima harum asperiores earum adipisci nemo dolorem odit commodi hic reiciendis animi sapiente laudantium enim nisi quaerat!</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nostrum odit ab ipsum aperiam voluptatum sed neque delectus harum praesentium eaque, minima quos in veniam beatae. Voluptas molestiae repellendus cumque?
                    Molestias sapiente consequatur inventore recusandae quo distinctio, expedita quia cum nam earum facilis porro tempore molestiae voluptatem! Excepturi natus rem, adipisci, dolores ipsa quia repudiandae velit aut labore iste saepe.
                    A ut sit, rerum autem quibusdam dignissimos molestias ea fugiat cupiditate. Maiores nisi cumque quaerat, iure atque, voluptatum deserunt nam error praesentium mollitia quibusdam est exercitationem ipsa aperiam eaque debitis.
                    Suscipit aperiam rerum porro facere tempora, deleniti libero eum adipisci dicta molestias natus omnis in aliquam consectetur impedit eaque accusamus esse! Magni dolorum et tempora reprehenderit veniam officiis inventore nihil?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam pariatur ipsum omnis maiores velit mollitia optio, tenetur ea quasi cupiditate eligendi, iste voluptatibus eius deserunt iusto assumenda excepturi ducimus ullam?</p>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quae, repellat quo exercitationem ducimus nulla tempore magni obcaecati quasi quibusdam architecto inventore necessitatibus ex voluptatum neque nesciunt soluta fuga minima!
                    Fuga, veritatis. Soluta odit rem esse provident accusantium voluptate architecto molestiae eum quisquam perspiciatis doloremque quas unde accusamus, assumenda minus saepe suscipit blanditiis quos cupiditate dolor nulla in fugit? Pariatur?
                    Voluptates cupiditate, consequatur dignissimos expedita libero fugiat laudantium inventore unde veniam sunt, tempore aperiam doloremque odit enim maxime quas qui eligendi similique! Ad similique beatae autem impedit vel at suscipit.</p>                
                    
                    <p>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, minus perferendis exercitationem quibusdam nam veniam eum amet nesciunt saepe possimus illum repudiandae. Animi voluptas distinctio nisi aut ex debitis inventore!</span>
                        <span>Saepe nihil obcaecati dignissimos, et nam ut amet quaerat exercitationem temporibus aspernatur vitae modi laudantium omnis delectus suscipit! Ex accusamus, iusto corrupti magni veniam vel tempore enim quam eaque dolorem!</span>
                        <span>Quia, eligendi, dignissimos molestias explicabo a aspernatur facere iusto quae inventore cum deleniti ipsa. Repellendus et perspiciatis minus quaerat amet quisquam unde! Velit autem vero doloribus quaerat corrupti molestias optio?</span>
                        <span>Nemo odit, deserunt quasi consequatur adipisci fugit iusto ducimus inventore unde sint earum! Consequatur ut neque amet dolore, maiores debitis voluptatem eius tempore rerum nulla esse magnam nostrum itaque voluptatum.</span>
                        <span>Tenetur quos dignissimos perferendis, natus aliquid facilis accusamus ad nam unde veritatis. Voluptates, officia animi porro eaque quas vitae modi maiores, eligendi ex autem molestias, reprehenderit suscipit tempora libero nam.</span>
                        <span>Consequatur omnis officiis, nesciunt nisi iusto sint aspernatur eligendi aperiam? Ea sit, vero nulla consequuntur recusandae corporis itaque, sequi voluptate harum et, ad doloremque mollitia culpa dolorum quasi totam autem.</span>
                        <span>Aut quia voluptatibus, ex recusandae a totam molestias illo possimus voluptas autem quidem voluptate voluptatem harum fugit obcaecati beatae? Doloremque perspiciatis hic deleniti nisi eius accusantium porro eum totam atque?</span>
                        <span>A nam vero esse eius incidunt. Nobis minima totam voluptas repellat, exercitationem corporis illo quidem esse voluptatem consequuntur et magnam similique odio, provident voluptates quam repellendus. Doloribus provident commodi accusamus.</span>
                        <span>Ab sapiente iure odit atque est ipsam possimus praesentium, consectetur unde architecto voluptates sit beatae. Quaerat dolorem nesciunt itaque temporibus quae tempore reiciendis similique quasi vero autem. Exercitationem, ad modi?</span>
                        <span>Nisi repellat dolorum harum suscipit provident? Alias, ipsum. Deleniti minima, atque ipsam blanditiis accusantium nulla porro delectus molestias nemo explicabo consectetur cupiditate, iure eos modi, error nesciunt dolor? Quis, perferendis?</span>
                    </p>
                </div>
            </div>
        </div>

    </body>
</html>
<?php if ($connection) {mysqli_close($connection);} 