<?php
    $f1=fopen("1.txt","w");
?>



<?php
    $f1=fopen("d://1.txt","w");
?>



<?php
   $f1=fopen("tangshiutf8.txt","r");
   echo $f1;
?>



<?php
   $f1=fopen("tangshiutf8.txt","r");
   echo $f1;
   fclose($f1);
?>



<?php
    $handle = fopen("/tmp/inputfile.txt","r");
    while (!feof($handle)){
        $buffer = fgets($handle,10000);
        echo $buffer;
    }
    fclose($handle);
?>








<?php
   $f1=fopen("tangshiutf8.txt","r");
   echo $f1;
   $s=fgets($f1,1000000);
   echo $s;
   fclose($f1);
?>



<?php
    $f1=fopen("tangshiutf8.txt","r");
    echo $f1;
    while(!feof($f1)){
        $s=fgets($f1,1000000);
        echo $s;
    }
    fclose($f1);
?>



<?php
    $f1=fopen("tangshiutf8.txt","r");
    $f2=fopen("re.txt", "w");
    echo $f1;
    while(!feof($f1)){
        $s=fgets($f1,1000000);
        echo $s;
        fwrite($f2,$s);
    }
    fclose($f1);
?>



<?php
    $f1=fopen("tangshiutf8.txt","r");
    $f2=fopen("re.txt", "w");
    fwrite($f2,"这是全唐诗副本");
    echo $f1;
    while(!feof($f1)){
        $s=fgets($f1,1000000);
        echo $s;
        fwrite($f2,$s);
    }
    fclose($f1);
?>











