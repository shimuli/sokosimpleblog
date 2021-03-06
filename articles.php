<?php
require 'Includes/header.php';

require 'models/database.php';
require './function/article.function.php';
$conn = getDatabase();

if (isset($_GET['id'])) {
    $articles = getArticle($conn, $_GET['id']);

} else {
    $articles = null;
}

?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-sample-image.png')">
    <div class="overlay"></div>
    <div class="container">
        <?php if ($articles == null): ?>
        <p>No article found</p>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?=htmlspecialchars($articles["title"]) ;?></h1>
                    <span class="meta"> Date Posted:
                        <?= $articles["date_posted"];?>
                    </span>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</header>
<!-- Post Content-->
<article>
    <div class="container">
        <?php if ($articles == null): ?>
        <p>No article found</p>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <p> <?=htmlspecialchars($articles["content"]) ;?></p>

            </div>
        </div>
        <?php endif; ?>
    </div>
</article>

<div class="container-fluid clearfix">
    <a class="btn btn-primary float-left" href="edit-article.php?id=<?= $articles['id']; ?>"> Edit </a>
    <a class="btn btn-primary float-right" href="delete-article.php?id=<?= $articles['id'];?>">Delete</a>
</div>

<!-- <div class="clearfix">
    <a class="btn btn-primary float-right" href="delete-article.php?id=<?= $articles['id'];?>">Delete</a>
</div> -->
<hr />
<?php require 'Includes/footer.php '?>