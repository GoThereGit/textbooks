<?php
    // 7.3.3 自定义函数

    function getPoemType($arr) {
        if (count($arr) > 4) {
            return "律诗";
        } else {
            return "绝句";
        }
    }

    $poem = array("床前明月光，", "疑是地上霜。", "举头望明月，", "低头思故乡。");
    $poem_type = getPoemType($poem);
?>