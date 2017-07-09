<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle,"%d",$n);
for($i=0;$i<$n;$i++)
{
    fscanf($handle,"%s %d",$name,$num);
    $book["$name"]=$num;
}
while(fscanf($handle,"%s",$key))
{   
    if(isset($book["$key"]))
            echo $key.'='.$book["$key"];
    else
        echo "Not found";
    printf("\n");
}
?>
