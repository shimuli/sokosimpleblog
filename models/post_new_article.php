<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO articles(title, content)
     VALUES('"
        . $_POST['title'] . "', '"
        . $_POST['content'] .
        "')";

    //  var_dump($sql);
    //  exit;

    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $id = mysqli_insert_id($conn);
        //echo "Inserted record with ID: $id";
    }

}
