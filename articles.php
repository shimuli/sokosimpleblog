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
                        <?php foreach ($articles as $my_article): ?>
                        <h1><?=$my_article["title"];?></h1>              
                        <span class="meta"> Date Posted: 
                            <?=$my_article["date_posted"];?>
                        </span>
                        <?php endforeach;?>
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
                     <?php foreach ($articles as $my_article): ?>
                    <p> <?=$my_article["content"];?></p>
                    <?php endforeach ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </article>
    <hr />
<?php require 'Includes/footer.php '?>
