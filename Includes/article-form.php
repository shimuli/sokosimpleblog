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
            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?=htmlspecialchars($title)?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" rows="20" name="content"><?=htmlspecialchars($content)?></textarea>
        </div>

        <button class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>

</form>