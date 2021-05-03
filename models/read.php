<?php
require 'database.php';
$conn = getDatabase();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT *
    FROM articles
    WHERE id = " . $_GET['id'];

    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    
    }

} else {
    $articles = null;
}
