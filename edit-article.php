<?php
require 'models/database.php';
require 'function/article.function.php';
require 'function/url.php';

require 'Includes/header.php ';
$conn = getDatabase();


// Check if there is an ID for an article
if (isset($_GET['id'])) {
    $articles = getArticle($conn, $_GET['id']);

    if ($articles) {
        $id = $articles['id'];
        $title = $articles['title'];
        $content = $articles['content'];
    } else {
        die("Article not found");
    }

} else {
    die("No article ID supplied");

}

// validate input data

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $errors = validateInput($title, $content);

    if (empty($errors)) {

        $sql = "UPDATE articles
        SET title = ?,
         content = ?
         WHERE id = ?";


        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);

        } else {
            mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $id);
            if (mysqli_stmt_execute($stmt)) {

                // redirect
               redirect("/articles.php?id=$id");

            } else {
                echo mysqli_stmt_error($stmt); 

            }
        }

    }

}
?>
<header class="masthead" style="background-image: url('assets/img/home-bg.png')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-16 col-md-20 mx-auto">
                <div class="site-heading">
                    <h1>Sokosimple Blog</h1>
                    <span class="subheading">Create a new story</span>
                </div>
            </div>
        </div>
    </div>
</header>


<?php
require 'Includes/article-form.php';
require 'Includes/footer.php ';
?>


