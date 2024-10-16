<?php
    // 7.4.2 循环结构

    $poem = array("床前明月光，", "疑是地上霜。", "举头望明月，", "低头思故乡。");
    for ($i = 0; $i < 4; $i++) {
        echo $poem[$i] . "<br>";
    }

    $shiji = array("author" => "司马迁", "dynasty" => "西汉", "chars_len" => 526500);
    foreach ($shiji as $key => $value) {
        echo $key . " ";
        echo $value . "<br>";
    }

    $tangpoem = array(
        array("title" => "秋夕", "author" => "杜牧"),
        array("title" => "静夜思", "author" => "李白"),
        array("title" => "江雪", "author" => "柳宗元"),
        array("title" => "早发白帝城", "author" => "李白"),
    );
    foreach ($tangpoem as $poem) {
        if ($poem["author"] != "李白") {
            continue;
        }
        echo "《" . $poem["title"] . "》" . $poem["author"] . "<br>";
    }
    foreach ($tangpoem as $poem) {
        if ($poem["author"] == "李白") {
            echo "《" . $poem["title"] . "》" . $poem["author"] . "<br>";
            break;
        }
    }
?>