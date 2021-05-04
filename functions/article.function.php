<?php
function getArticle($conn, $id){
    $sql = "SELECT *FROM articles WHERE id=?";

    $stmt = mysqli_prepare($conn, $sql);
    if($stmt === false){
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt, "i", $id);
        if(mysqli_stmt_execute($stmt)){
            $results = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($results, MYSQLI_ASSOC);
        }
    }
}