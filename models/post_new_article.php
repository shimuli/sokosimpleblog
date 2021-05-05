<?php
require 'database.php';
require './function/article.function.php';
require './function/url.php';


$title = '';
$content = '';
$subfolder = "/sokosimpleblog";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $errors = validateInput($title, $content);
    if (empty($errors)) {
        $conn = getDatabase();

        $sql = "INSERT INTO articles(title, content)
         VALUES(?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $title, $content);
            if (mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($conn);

                // redirect

                redirect("/articles.php?id=$id");

            } else {
                echo mysqli_stmt_error($stmt);

            }
        }

    }

}
