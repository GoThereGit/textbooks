<?php
    // 7.4.1 判断结构

    $poem = array("床前明月光，", "疑是地上霜。", "举头望明月，", "低头思故乡。");
    if (count($poem) > 4) {
        echo "律诗";
    } else {
        echo "绝句";
    }

    if (count($poem) < 4) {
        echo "绝句";
    } else if (count($poem) < 8) {
        echo "八句以内律诗";
    } else if (count($poem) < 16) {
        echo "十六句以内律诗";
    } else {
        echo "其他律诗";
    }
?>