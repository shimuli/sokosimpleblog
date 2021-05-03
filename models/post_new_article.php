<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO articles(title, content)
    VALUES(?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if($stmt ===false){
        echo mysqli_error($conn);
    }
    else{
       mysqli_stmt_bind_param($stmt, "ss",$_POST['title'],  $_POST['content']);
       if(mysqli_stmt_execute($stmt)){
           $id = mysqli_insert_id($conn);
           echo "Inserted record with ID: $id";
       }
       else{
           echo mysqli_stmt_error($stmt);

       }
    }

}
