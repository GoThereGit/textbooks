<?php
    echo "&#19968;";

    for ($i = 19968; $i < 40870; $i++) {
        $char = "&#" . $i . ";";
        echo $char . " ";
    }

    for ($i = 0; $i < 50000; $i++) {
        $char = "&#" . $i . ";";
        echo $char . " ";
    }

    for ($i = 65; $i < 65 + 26; $i++) {
        for ($j = 65; $j < $i; $j++) {
            echo "&#" . $j . ";";
        }
        echo "<br>";
    }


?>