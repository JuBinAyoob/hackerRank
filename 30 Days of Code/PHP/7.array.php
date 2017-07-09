<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
//array_walk($arr,'intval');
$N=count($arr);
for($i=$N-1;$i>=0;$i--)
    echo $arr[$i].' ';

?>
