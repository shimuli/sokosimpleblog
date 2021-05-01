<?php
require 'database.php';
//echo "Hey, if you are seeing this, know that you have successfully found me and am ready to serve you with data";

$sql = "SELECT *
FROM articles
ORDER BY date_posted;";

$results = mysqli_query($conn, $sql);
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
