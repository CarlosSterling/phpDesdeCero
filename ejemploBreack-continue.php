<?php
for($i=1; $i <= 10; $i++){
    if ($i==5){
        continue;
    }
    echo $i."\n";
}


$c = 1;
while($c <= 10){
    if ($c==2){
        $c++;
        continue;
    }
    echo $c."\n";
    $c++;
}