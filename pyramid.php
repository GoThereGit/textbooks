#打印一些星星

<?php
    for($i=1;$i<10;$i++){
        echo"*";
    }
?>


<?php
    for($i=1; $i<=100; $i++){
        echo"*";
        if($i%10==0) echo "<br>";
    }
?>


#星星金字塔

<?php
    for($i=O; $i<10; $i++){
        for($j=o;$j<10;$j++){
            echo "*";
        }
    echo "<br>";
    }
?> 


<?php
    for($i=O; $i< 10; $i++){
        for($j=0;$j< =$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>


<?php
    for($i=1; $i< =10; $i++){
        for($k=10-$i; $k> =O; $k--){
            echo "&nbsp";
        }
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    } 
?>


<?php
    for($i=1; $i< =10; $i++){
        for($k=10-$i; $k> =O; $k--){
            echo "&nbsp;&nbsp;"; 
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo "*"; 
        }
        echo "<br>";
    }
?>


<?php
    $n=10;
    for($i=1; $i<=$n; $i++){
        for($k=$n-$i; $k> =O; $k--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>


#字母金字塔
<?php
    for($i=1; $i< =10; $i++){
        for($k=10-$i; $k>=O; $k--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo chr($j+64);
        }
        echo "<br>";
    }
?>









