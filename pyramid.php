<?php
#打印一行星星
    for($i=1;$i<10;$i++){
        echo"*";
    }
?>


<?php
#打印一些星星
    for($i=1; $i<=100; $i++){
        echo"*";
        if($i%10==0) echo "<br>";
    }
?>




<?php
#星星金字塔1
    for($i=0; $i<10; $i++){
        for($j=0;$j<10;$j++){
            echo "*";
        }
    echo "<br>";
    }
?> 


<?php
#星星金字塔2
    for($i=0; $i< 10; $i++){
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>


<?php
#星星金字塔3
    for($i=1; $i<=10; $i++){
        for($k=10-$i; $k>=0; $k--){
            echo "&nbsp";
        }
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    } 
?>


<?php
#星星金字塔4
    for($i=1; $i<=10; $i++){
        for($k=10-$i; $k>=0; $k--){
            echo "&nbsp;&nbsp;"; 
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo "*"; 
        }
        echo "<br>";
    }
?>


<?php
#星星金字塔5
    $n=10;
    for($i=1; $i<=$n; $i++){
        for($k=$n-$i; $k>=0; $k--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>



<?php
#字母金字塔
    for($i=1; $i<=10; $i++){
        for($k=10-$i; $k>=0; $k--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo chr($j+64);
        }
        echo "<br>";
    }
?>



<?php
#梯形字母塔
function print_pd($start,$level){
    $n=$level;
    for($i=$start;$i<=10;$i++){
        for($k=10-$i;$k>=0;$k--){
            echo"&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo chr($j+64);
        }
        echo"<br>";
    }
}
print_pd(3,10);
?>






