<?php
    // 9.3 文件写入

    $f1 = fopen("tangshiutf8.txt", "r");
    $f2 = fopen("new.txt", "w");
    fwrite($f2, "这是全唐诗副本\n");
    while (!feof($f1)) {
        $line = fgets($f1);
        fwrite($f2, $line);
    }
    fclose($f1);
    fclose($f2);
?>