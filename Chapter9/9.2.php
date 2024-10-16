<?php
    // 9.2 文件读取

    $file = fopen("tangshiutf8.txt", "r");
    while (!feof($file)) {
        $line = fgets($file);
        echo $line . "<br>";
    }
    fclose($file);
?>