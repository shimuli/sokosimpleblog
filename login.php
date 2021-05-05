<?php
require 'Includes/header.php ';
//$_SESSION['is_logged_in'] = true;

require 'function/url.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['username'] == "soko" && $_POST['password'] =='sokosimple'){
       session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        redirect('/');
    }
    else{
        $error = "wrong Credentials";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Login</p>
            <?php if (!empty($error)): ?>
            <p><?=$error?></p>
            <?php endif?>
            <form method="post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="username">Name </label>
                        <input autofocus name="username" class="form-control" id="username" type="text" placeholder="Name"
                            required data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Password"
                            require />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br />
                <button class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
<hr />

<?php require 'Includes/footer.php'; ?>