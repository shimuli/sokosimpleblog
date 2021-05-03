<?php
require 'database.php';
$conn = getDatabase();

$sql = "SELECT *
FROM articles
ORDER BY date_posted;";

$results = mysqli_query($conn, $sql);
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
