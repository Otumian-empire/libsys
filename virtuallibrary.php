<?php require_once("includes/connection.php"); ?>
<?php require_once("functions/simplefunctions.php"); ?>
<?php require_once("includes/check_session_or_redir_to_indexpage.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/ico" href="./img/huhu.jpg">
        <link rel="stylesheet" href="css/generalcss.css">
        <link rel="stylesheet" href="./css/form.css">
        <link rel="stylesheet" href="./css/student.css">
        <title>The |V| Library</title>
    </head>
    <body>
        <div class="container center">
            <div class="header">
                <div>
                    <form action="virtuallibrary.php" method="get" class="center">
                        <input type="button" name="student_panel" value="Student Panel">
                        <input type="button" name="new_books" value="New books">
                        <input type="button" name="recommendations" value="Recommended">
                        <input type="button" name="most_read" value="Most read">
                        <select name="list_of_subject" id="">
                            <option value="Subject">Subject</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Morals and Ethics">Morals and Ethics</option>
                            <option value="Electricals and electronics">Electricals and electronics</option>
                            <option value="Programming">Programming</option>
                            <option value="Business">Business</option>
                        </select>
                        <input type="search" name="query" id="">
                        <input type="button" name="searc_btn" value="Search">
                    </form>
                </div>
            </div>

            <div class="information_area">
                <div>
                    <h3>category</h3>
                    <p>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo modi illo ad est, tenetur quia qui impedit hic iusto voluptatum perspiciatis, ipsa ipsam consequatur, nobis corporis necessitatibus provident nam dolor?</span>
                        <span>Ipsam ullam voluptatem nostrum sapiente, aut iure minima sequi repellendus, culpa exercitationem eaque magnam. Facere voluptatibus quasi commodi aliquid beatae quisquam, incidunt culpa odio. Nostrum sed dolor consequatur neque magnam.</span>
                        <span>Voluptatem sint atque eligendi facere omnis, sit, similique odio iure, veritatis amet excepturi qui corporis adipisci recusandae officiis laboriosam nemo saepe error ut! Sunt sapiente vitae vel cumque exercitationem odio.</span>
                        <span>Id ratione nobis, necessitatibus a assumenda corporis recusandae natus possimus similique odio veritatis officia, in eos. Molestias cum exercitationem impedit, numquam recusandae veniam reprehenderit accusantium magni voluptatibus iusto laboriosam ratione.</span>
                    </p>
                </div>
                <div>
                    <h3>category</h3>
                    <p>
                        <span>Soluta aspernatur neque et corporis dolorem quo, tenetur in numquam odit necessitatibus labore, ducimus animi corrupti quas dolore doloremque perferendis cum architecto illum. Corrupti nemo maiores a fuga facere? Doloremque?</span>
                        <span>Exercitationem saepe, pariatur, iste, sed hic ut delectus adipisci voluptas beatae commodi voluptatum tenetur nesciunt placeat dignissimos magni. Perferendis quasi iure quas debitis sint nesciunt dignissimos! Sunt dolorum repellendus eveniet!</span>
                        <span>Ex, quisquam? Non repellat aspernatur sint quidem labore ut distinctio inventore, temporibus voluptatum et. Maxime quidem dicta, aspernatur quos dignissimos reprehenderit deserunt facere tempore nostrum soluta quasi laborum temporibus aliquam!</span>
                        <span>Sapiente eaque repudiandae excepturi molestiae numquam tenetur? Inventore deleniti repellendus fugiat. Repudiandae voluptate natus quibusdam fugit laboriosam iusto totam obcaecati distinctio dolorum, rerum voluptates nostrum consequatur eum aperiam consequuntur? Laudantium.</span>
                    </p>
                </div>
                <div>
                    <h3>category</h3>
                    <p>
                        <span>Ratione nostrum voluptatum ut cumque tempora earum sint facere omnis commodi voluptas quod delectus autem similique harum libero esse quaerat, cum aliquid aspernatur eaque! Facilis tempore magnam ut molestias saepe.</span>
                        <span>Nulla, necessitatibus? Corporis asperiores accusantium nam, voluptatem harum, inventore error labore saepe dolore minus blanditiis aliquid magni facere magnam sequi ea ullam totam libero sapiente ducimus? Eum, dolor officiis! Delectus?</span>
                        <span>Sequi magnam nostrum labore necessitatibus aliquid assumenda mollitia dolores earum voluptate modi recusandae, sed veritatis alias ab deserunt ducimus, repudiandae quasi quaerat illum. Nulla error consequatur, suscipit ducimus fugiat a.</span>
                        <span>Fugiat cumque nobis, possimus nisi quasi minima blanditiis provident voluptas. Nostrum, facere consequuntur nihil, explicabo expedita eum magni illum inventore exercitationem adipisci at dignissimos accusantium fuga enim saepe porro! Cupiditate.</span>
                    </p>
                </div>
                <div>
                    <h3>category</h3>
                    <p>
                        <span>Et laborum qui praesentium eius in! Eligendi tempora aliquam facere, obcaecati vitae iste ducimus rerum molestiae quisquam provident deleniti dolorum expedita nam aut quae maiores sunt repellendus aperiam tenetur blanditiis.</span>
                        <span>Maxime, reprehenderit suscipit ullam dolore omnis quaerat debitis cum magnam, in odit, voluptates eveniet. Necessitatibus, enim. Sapiente tenetur et modi magni rerum est eos numquam sed? Doloribus, tempore? Quaerat, provident.</span>
                        <span>A excepturi corrupti ratione perferendis ut aliquam nobis, iusto voluptatem illum, non eius. Officiis quisquam voluptas consequuntur magni itaque voluptatibus dolores? At ea voluptas quidem quod cum sunt doloribus officiis.</span>
                        <span>Atque nulla reprehenderit vel, earum ullam commodi, omnis quisquam consequatur, sapiente voluptatem aliquid. Nobis ipsa sed, consequatur quod sapiente recusandae excepturi incidunt deleniti nemo sint veritatis minus et voluptas nesciunt.</span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>