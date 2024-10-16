<?php
    // tip.php

    $tangpoem = array(
        array("title" => "秋夕", "author" => "杜牧"),
        array("title" => "静夜思", "author" => "李白"),
        array("title" => "江雪", "author" => "柳宗元"),
        array("title" => "早发白帝城", "author" => "李白"),
    );

    foreach ($tangpoem as $poem) {
        if ($poem["author"] == "李白") {
            echo "《" . $poem["title"] . "》" . $poem["author"] . "<br>";
            break;
        }
    }
?>


