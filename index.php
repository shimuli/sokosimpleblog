<?php
require 'models/blogs.php';
require 'Includes/header.php ';

?>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.png')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Sokosimple Blog</h1>
                        <span class="subheading">It's all about farmers</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container">
        <?php if (empty($articles)): ?>
        <p>No data</p>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <?php foreach ($articles as $my_article): ?>
                    <a a href="articles.php?id=<?= $my_article["id"]; ?>">
                        <h2 class="post-title"> <?=$my_article["title"];?></h2>                
                    </a>

                    
                     <p class="post-meta">Date Published: <?=$my_article["date_posted"];?></p>
                    <?php endforeach;?>
                </div>
                <hr />

                <!-- Pager-->
                <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a></div>
                
            </div>
        </div>
        <?php endif;?>
    </div>
    <hr />
    <?php require 'Includes/footer.php '?>

