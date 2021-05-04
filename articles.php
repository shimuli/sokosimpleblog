<?php
require 'models/read.php';
require 'Includes/header.php'
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
<hr />
<?php require 'Includes/footer.php '?>