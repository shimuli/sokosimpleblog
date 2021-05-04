<?php
require 'database.php';
require './functions/article.function.php';
$conn = getDatabase();

if (isset($_GET['id'])) {
    $articles = getArticle($conn, $_GET['id']);

} else {
    $articles = null;
}
