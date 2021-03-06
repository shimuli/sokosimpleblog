<?php
require 'models/database.php';
require 'function/article.function.php';
require 'function/url.php';
//require 'Includes/header.php ';
$conn = getDatabase();

// Check if there is an ID for an article
if (isset($_GET['id'])) {
    $articles = getArticle($conn, $_GET['id'], 'id');

    if ($articles) {
        $id = $articles['id'];
    } else {
        die("Article not found");
    }

} else {
    die("No article ID supplied");

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM articles
        WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);

        } else {
            mysqli_stmt_bind_param($stmt, "i", $id);
            if (mysqli_stmt_execute($stmt)) {

                // redirect
                redirect("/index.php");

            } else {
                echo mysqli_stmt_error($stmt);

            }
        }
    }
    ?>
<?php
require 'Includes/header.php'?>
<div class="container-fluid clearfix">

    <h2>Delete article</h2>
    <form method="post" class="align-items-center">
        <p>Are you sure?</p>
        <button class="btn btn-primary">Delete</button>
        <a href="articles.php?id=<?=$articles['id'];?>"><button class="btn btn-primary">Cancel</button></a>
    </form>
</div>
</div>
<?php require 'Includes/footer.php'?>