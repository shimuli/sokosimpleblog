<?php
$db_host = "localhost";
$db_name = "sokosimpleblog";
$db_password = "3pMjhjkLl077W5aT";
$db_user = "cedric_soko";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

