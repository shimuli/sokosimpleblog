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



<?php if (isLoggedIn() == false): ?>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">401</span>
                <div class="mb-4 lead">You need to login first.</div>
                <a href="login.php" class="btn btn-link">Login</a>
            </div>
        </div>
    </div>
</div>
<?php else:
    require 'Includes/article-form.php';
 ?>
<?php endif ?>
<?php

 require 'Includes/footer.php ';
 ?>