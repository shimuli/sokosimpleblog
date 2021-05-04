<?php
require 'database.php';
$errors = [];
$title = '';
$content = '';
$subfolder = "/sokosimpleblog";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    }
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

                // redirect
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                    $protocal = 'https';
                } else {
                    $protocal = 'http';
                }

                $id = mysqli_insert_id($conn);
                header("Location: $protocal://" . $_SERVER['HTTP_HOST'] . $subfolder . "/articles.php?id=$id");
                exit;

            } else {
                echo mysqli_stmt_error($stmt);

            }
        }

    }

}
