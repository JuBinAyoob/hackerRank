<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle,"%d",$c);
for($j=0;$j<$c;$j++)
{
    fscanf($handle,"%s",$S);
    $N=strlen($S);
    for($i=0;$i<$N;$i+=2)
        echo $S[$i];
    echo ' ';
    for($i=1;$i<$N;$i+=2)
        echo $S[$i];
    printf("\n");
}
?>