<?php
function redirect($path)
{
    $subfolder = "/sokosimpleblog";

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocal = 'https';
    } else {
        $protocal = 'http';
    }

    header("Location: $protocal://" . $_SERVER['HTTP_HOST'] . $subfolder . $path);
    exit;

}
