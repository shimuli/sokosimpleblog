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

<?php if (!empty($errors)): ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <li><?=$error?></li>
    <?php endforeach;?>
</ul>
<?php endif;?>
<form method="post">
    <div class="container">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?= htmlspecialchars($title ) ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" rows="20" name="content"><?= htmlspecialchars($content)  ?></textarea>
        </div>

        <button class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>

</form>
<?php require 'Includes/footer.php '?>