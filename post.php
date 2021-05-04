<?php require 'Includes/header.php ';
require 'models/post_new_article.php';

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