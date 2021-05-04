<?php
function getArticle($conn, $id, $columns ='*')
{
    $sql = "SELECT $columns FROM articles WHERE id=?";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            $results = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($results, MYSQLI_ASSOC);
        }
    }
}

function validateInput($title, $content)
{
    $errors = [];
    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    }

    return $errors;

}
